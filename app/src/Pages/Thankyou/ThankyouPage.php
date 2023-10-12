<?php

namespace App\Pages;

use Page;
use SilverStripe\Forms\TextField;

class ThankyouPage extends Page {
    private static $table_name = 'ThankyouPage';
    private static $plural_name = 'ThankyouPages';
    private static $single_name = 'Bedankt pagina';

    private static $db = [
        'Title' => 'Varchar',
        'ButtonLink' => 'Varchar',
    ];

    private static $summary_fields = [
        'Title' => 'Title',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('ButtonLink', 'Link voor downloaden ticket'),
        ]);

        return $fields;
    }
}
