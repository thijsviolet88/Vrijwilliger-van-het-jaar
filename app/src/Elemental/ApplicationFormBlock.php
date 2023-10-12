<?php
namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\TextField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\FormAction;
use SilverStripe\Forms\CheckboxSetField;
use SilverStripe\Forms\EmailField;
use SilverStripe\Forms\Form;
use SilverStripe\Control\HTTPResponse;

class ApplicationFormBlock extends BaseElement {
    private static $table_name = "ApplicationFormBlock";
    private static $singular_name = "Aanmeld formulier";
    private static $plural_name = 'ApplicationFormBlocks';
    private static $description = 'Aanmeld formulier voor vrijwilliger';
    private static $icon = 'font-icon-block-content';
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

    public function submitApplicationForm($data, $form)
    {
        // Process form data here
        // $data contains form input values
        // You can save data to the database or perform any other actions here

        // For example, you can redirect the user back to the page after form submission
        return $this->controller->redirectBack();
    }
}
