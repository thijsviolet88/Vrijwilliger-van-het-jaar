<?php
namespace App\Elements;

use DNADesign\Elemental\Models\BaseElement;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\TextField;

class VolunteerFormBlock extends BaseElement {
    private static $table_name = "VolunteerFormBlock";
    private static $singular_name = "Vrijwilliger formulier";
    private static $plural_name = 'VolunteerFormBlocks';
    private static $description = 'Vrijwilliger nominatie formulier voor';
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
