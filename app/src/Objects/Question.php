<?php

namespace App\Objects;
use SilverStripe\Forms\TextField;
use SilverStripe\ORM\DataObject;

class Question extends DataObject {
    private static $table_name = 'Question';

    private static $db = [
        'Question' => 'Text',
        'Answer' => 'Text',
    ];

    private static $summary_fields = [
        'Question' => 'Vraag'
    ];

    public function getCMSFields() {
        $fields = parent::getCMSFields();

        $fields->removeByName(['Question', 'Answer']);

        $fields->addFieldsToTab('Root.Main', [
            TextField::create('Question', 'Vraag'),
            TextField::create('Answer', 'Antwoord op vraag'),
        ]);

        return $fields;
    }
}
