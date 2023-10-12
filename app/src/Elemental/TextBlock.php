<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\TextField;

class TextBlock extends BaseElement {
    private static $table_name = "TextBlock";
    private static $singular_name = "Tekst block";
    private static $plural_name = 'TextBlocks';
    private static $description = 'Opmaakbaar tekst block';
    private static $icon = 'font-icon-edit-write';
    private static $db = [
        'Title' => 'Varchar',
        'Content' => 'HTMLText',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeByName(['Title', 'Content']);

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Title', 'Titel bovenaan tekst'),
            HTMLEditorField::create('Content', 'Tekst content')->setRows(12),
        ]);

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
