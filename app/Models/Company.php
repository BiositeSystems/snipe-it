<?php
namespace App\Models;

use App\Models\SnipeModel;
use App\Presenters\Presentable;
use Auth;
use DB;
use Illuminate\Database\Eloquent\Model;
use Watson\Validating\ValidatingTrait;

/**
 * Model for Companies.
 *
 * @version    v1.8
 */
final class Company extends SnipeModel
{
    protected $table = 'companies';

    // Declare the rules for the model validation
    protected $rules = [
        'name' => 'required|min:1|max:255|unique:companies,name'
    ];

    protected $presenter = 'App\Presenters\CompanyPresenter';
    use Presentable;

    /**
    * Whether the model should inject it's identifier to the unique
    * validation rules before attempting validation. If this property
    * is not set in the model it will default to true.
    *
    * @var boolean
    */
    protected $injectUniqueIdentifier = true;
    use ValidatingTrait;


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name'];

    private static function isFullMultipleCompanySupportEnabled()
    {
        $settings = Setting::getSettings();

        // NOTE: this can happen when seeding the database
        if (is_null($settings)) {
            return false;
        } else {
            return $settings->full_multiple_companies_support == 1;
        }
    }

    private static function scopeCompanyablesDirectly($query, $column = 'company_id')
    {
        if (Auth::user()) {
            $company_id = Auth::user()->company_id;
        } else {
            $company_id = null;
        }

        return $query->where($column, '=', $company_id);
    }

    public static function getIdFromInput($unescaped_input)
    {
        $escaped_input = e($unescaped_input);

        if ($escaped_input == '0') {
            return null;
        } else {
            return $escaped_input;
        }
    }

    public static function getIdForCurrentUser($unescaped_input)
    {
        if (!static::isFullMultipleCompanySupportEnabled()) {
            return static::getIdFromInput($unescaped_input);
        } else {
            $current_user = Auth::user();

            // Global users should be able to set a company to whatever they need
            if ($current_user->hasAccess('allcompanies')) {
                return static::getIdFromInput($unescaped_input);
            } else {
                if ($current_user->company_id != null) {
                    return $current_user->company_id;
                } else {
                    return static::getIdFromInput($unescaped_input);
                }
            }

        }
    }

    public static function isCurrentUserHasAccess($companyable)
    {
        if (is_null($companyable)) {
            return false;
        } elseif (!static::isFullMultipleCompanySupportEnabled()) {
            return true;
        } else {
            $current_user_company_id = Auth::user()->company_id;
            $companyable_company_id = $companyable->company_id;
            return ($current_user_company_id == null || $current_user_company_id == $companyable_company_id || Auth::user()->hasAccess('allcompanies'));
        }
    }

    public static function isCurrentUserAuthorized()
    {
        return ((!static::isFullMultipleCompanySupportEnabled()) || (Auth::user()->hasAccess('allcompanies')));
    }

    public static function canManageUsersCompanies()
    {
        return (!static::isFullMultipleCompanySupportEnabled() || Auth::user()->hasAccess('allcompanies') ||
                Auth::user()->company_id == null);
    }

    public static function getIdForUser($unescaped_input)
    {
        if (!static::isFullMultipleCompanySupportEnabled() || Auth::user()->hasAccess('allcompanies')) {
            return static::getIdFromInput($unescaped_input);
        } else {
            return static::getIdForCurrentUser($unescaped_input);
        }
    }

    public static function scopeCompanyables($query, $column = 'company_id')
    {
        // If not logged in and hitting this, assume we are on the command line and don't scope?'
        if (!static::isFullMultipleCompanySupportEnabled() || (Auth::check() && Auth::user()->hasAccess('allcompanies')) || (!Auth::check())) {
            return $query;
        } else {
            return static::scopeCompanyablesDirectly($query, $column);
        }
    }

    public static function scopeCompanyableChildren(array $companyable_names, $query)
    {
        if (count($companyable_names) == 0) {
            throw new Exception('No Companyable Children to scope');
        } elseif (!static::isFullMultipleCompanySupportEnabled() || (Auth::check() && Auth::user()->hasAccess('allcompanies'))) {
            return $query;
        } else {
            $f = function ($q) {

                static::scopeCompanyablesDirectly($q);
            };

            $q = $query->where(function ($q) use ($companyable_names, $f) {
                $q2 = $q->whereHas($companyable_names[0], $f);

                for ($i = 1; $i < count($companyable_names); $i++) {
                    $q2 = $q2->orWhereHas($companyable_names[$i], $f);
                }
            });
            return $q;
        }
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function assets()
    {
        return $this->hasMany(Asset::class);
    }

    public function licenses()
    {
        return $this->hasMany(License::class);
    }
    public function accessories()
    {
        return $this->hasMany(Accessory::class);
    }

    public function consumables()
    {
        return $this->hasMany(Consumable::class);
    }

    public function components()
    {
        return $this->hasMany(Component::class);
    }
}
