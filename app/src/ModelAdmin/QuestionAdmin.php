<?php

namespace App\ModelAdmin;

use SilverStripe\Admin\ModelAdmin;
use App\Objects\Question;

class QuestionAdmin extends ModelAdmin {
    private static $table_name = 'QuestionAdmin';
    private static $url_segment = 'QuestionAdmin';
    private static $menu_title = 'Veelgestelde vragen';
    private static $menu_icon_class = 'font-icon-info-circled';

    private static $managed_models = [
        Question::class,
    ];
}