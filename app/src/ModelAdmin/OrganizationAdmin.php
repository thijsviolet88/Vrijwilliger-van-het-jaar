<?php

namespace App\ModelAdmin;

use SilverStripe\Admin\ModelAdmin;
use App\Objects\Organization;

class OrganizationAdmin extends ModelAdmin {
    private static $table_name = 'CompanyAdmin';
    private static $url_segment = 'CompanyAdmin';
    private static $menu_title = 'Organisaties';
    private static $menu_icon_class = 'font-icon-page-multiple';

    private static $managed_models = [
        Organization::class,
    ];
}