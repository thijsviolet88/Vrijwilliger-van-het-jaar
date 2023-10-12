<?php

namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;

class CtaBlock extends BaseElement {
    private static $table_name = "CtaBlock";
    private static $singular_name = "Call to action block";
    private static $plural_name = 'CtaBlocks';
    private static $description = 'Call to action block';
    private static $icon = 'font-icon-check-mark-2';
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
