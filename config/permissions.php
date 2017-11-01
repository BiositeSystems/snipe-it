<?php

return array(

    'Global' => array(
        array(
            'permission' => 'superuser',
            'label'      => 'Super User',
            'note'       => 'Determines whether the user has full access to all aspects of the admin. This setting overrides any more specific permissions throughout the system. ',
            'display'    => true,
            'superuser'  => true,
        ),
        array(
            'permission' => 'allcompanies',
            'label'      => 'All Companies',
            'note'       => 'Determines whether the user has access to all companies or only their own when full company support is enabled. ',
            'display'    => true,
            'superuser'  => true,
        ),
    ),

    'Admin' => array(
        array(
            'permission' => 'admin',
            'label'      => '',
            'note'       => 'Determines whether the user has access to most aspects of the admin. ',
            'display'    => true,
            'superuser'  => false,
        ),

        array(
            'permission' => 'admin.api_key',
            'label'      => 'Create API Key',
            'note'       => 'Determines whether the user can access the API via API key.',
            'display'    => false,
            'superuser'  => false,
        ),
    ),

    'Reports' => array(
        array(
            'permission' => 'reports.view',
            'label'      => 'View',
            'note'       => 'Determines whether the user has the ability to view reports.',
            'display'    => true,
            'superuser'  => false,
        ),
    ),

    'Assets' => array(
        array(
            'permission' => 'assets.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'assets.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'assets.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'assets.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'assets.checkout',
            'label'      => 'Checkout ',
            'note'       => '',
            'display'    => false,
            'superuser'  => false,
        ),

        array(
            'permission' => 'assets.checkin',
            'label'      => 'Checkin ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),

        array(
            'permission' => 'assets.checkout',
            'label'      => 'Checkout ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),

        array(
            'permission' => 'assets.audit',
            'label'      => 'Audit ',
            'note'       => 'Allows the user to mark an asset as physically inventoried.',
            'display'    => true,
            'superuser'  => false,
        ),


        array(
            'permission' => 'assets.view.requestable',
            'label'      => 'View Requestable Assets',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),

    ),

    'Accessories' => array(
        array(
            'permission' => 'accessories.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'accessories.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'accessories.edit',
            'label'      => 'Edit ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'accessories.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'accessories.checkout',
            'label'      => 'Checkout ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'accessories.checkin',
            'label'      => 'Checkin ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),

    'Consumables' => array(
        array(
            'permission' => 'consumables.view',
            'label'      => 'View',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'consumables.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'consumables.edit',
            'label'      => 'Edit ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'consumables.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'consumables.checkout',
            'label'      => 'Checkout ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),


    'Licenses' => array(
        array(
            'permission' => 'licenses.view',
            'label'      => 'View',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'licenses.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'licenses.edit',
            'label'      => 'Edit ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'licenses.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'licenses.checkout',
            'label'      => 'Checkout ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'licenses.keys',
            'label'      => 'View License Keys',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),


    'Components' => array(
        array(
            'permission' => 'components.view',
            'label'      => 'View',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'components.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'components.edit',
            'label'      => 'Edit ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'components.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'components.checkout',
            'label'      => 'Checkout ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'components.checkin',
            'label'      => 'Checkin ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),

    ),

    'Users' => array(
        array(
            'permission' => 'users.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'users.create',
            'label'      => 'Create Users',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'users.edit',
            'label'      => 'Edit Users',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'users.delete',
            'label'      => 'Delete Users',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),

    ),


    'Models' => array(
        array(
            'permission' => 'models.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'models.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'models.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'models.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),

    ),

    'Categories' => array(
        array(
            'permission' => 'categories.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'categories.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'categories.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'categories.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),

    'Departments' => array(
        array(
            'permission' => 'departments.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'departments.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'departments.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'departments.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),

    'Status Labels' => array(
        array(
            'permission' => 'statuslabels.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'statuslabels.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'statuslabels.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'statuslabels.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),

    'Custom Fields' => array(
        array(
            'permission' => 'customfields.view',
            'label'      => 'View',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'customfields.create',
            'label'      => 'Create',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'customfields.edit',
            'label'      => 'Edit',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'customfields.delete',
            'label'      => 'Delete',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),



    'Suppliers' => array(
        array(
            'permission' => 'suppliers.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'suppliers.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'suppliers.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'suppliers.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),


    'Manufacturers' => array(
        array(
            'permission' => 'manufacturers.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'manufacturers.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'manufacturers.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'manufacturers.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),

    'Depreciations' => array(
        array(
            'permission' => 'depreciations.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'depreciations.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'depreciations.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'depreciations.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),

    'Locations' => array(
        array(
            'permission' => 'locations.view',
            'label'      => 'View ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'locations.create',
            'label'      => 'Create ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'locations.edit',
            'label'      => 'Edit  ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
        array(
            'permission' => 'locations.delete',
            'label'      => 'Delete ',
            'note'       => '',
            'display'    => true,
            'superuser'  => false,
        ),
    ),




    'Self' => array(
        array(
            'permission' => 'self.two_factor',
            'label'      => 'Two-Factor Authentication',
            'note'       => 'The user may disable/enable two-factor authentication themselves if two-factor is enabled and set to selective.',
            'display'    => true,
            'superuser'  => false,
        ),

        array(
            'permission' => 'self.api',
            'label'      => 'Create API Keys',
            'note'       => 'The user create personal API keys to utilize the REST API.',
            'display'    => true,
            'superuser'  => false,
        ),

    ),





);
