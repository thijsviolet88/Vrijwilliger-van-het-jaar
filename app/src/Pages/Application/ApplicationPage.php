<?php

namespace App\Pages;

use Page;
use SilverStripe\Assets\Image;

class ApplicationPage extends Page {
    private static $table_name = 'ApplicationPage';
    private static $plural_name = 'ApplicationPage';
    private static $single_name = 'Aanmeld pagina';

    private static $db = [
        'Title' => 'Varchar',
    ];

    private static $has_one = [
        'Image' => Image::class,
    ];

    private static $owns = [
        'Image',
    ];


    private static $summary_fields = [
        'Title' => 'Title',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }
}
