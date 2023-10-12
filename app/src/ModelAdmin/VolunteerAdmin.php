<?php

namespace App\ModelAdmin;

use SilverStripe\Admin\ModelAdmin;
use App\Objects\Volunteer;

class VolunteerAdmin extends ModelAdmin {
    private static $table_name = 'VolunteerAdmin';
    private static $url_segment = 'VolunteerAdmin';
    private static $menu_title = 'Vrijwilligers';
    private static $menu_icon_class = 'font-icon-page-multiple';

    private static $managed_models = [
        Volunteer::class,
    ];
}