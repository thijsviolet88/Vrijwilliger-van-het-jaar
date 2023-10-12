<?php

namespace App\Extensions;

use SilverStripe\Assets\Image;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextareaField;
use DNADesign\Elemental\TopPage\DataExtension;
use SilverStripe\AssetAdmin\Forms\UploadField;

class BannerExtension extends DataExtension {
    private static $db = [
        'BannerTitle' => 'Varchar',
      ];

    public function updateCMSFields(FieldList $fields) {
    $fields->addFieldsToTab('Root.Banner', [
        TextareaField::create('BannerTitle', 'Koptekst voor in banner'),
    ]);

    return $fields;
    }
}
