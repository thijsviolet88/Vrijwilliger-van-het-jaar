<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;

class ProgramBlock extends BaseElement {
    private static $table_name = "ProgramBlock";
    private static $singular_name = "Programma block";
    private static $plural_name = 'ProgramBlocks';
    private static $description = 'Programma block';
    private static $icon = 'font-icon-book-open';
    private static $db = [
        'Title' => 'HTMLText',
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        return $fields;
    }

    public function getType() {
        return self::$singular_name;
    }
}
