<?php

namespace App\Objects;
use SilverStripe\ORM\DataObject;

class Volunteer extends DataObject {
    private static $table_name = 'Volunteer';

    private static $db = [
        'Gender' => 'Text',
        'FirstName' => 'Varchar(255)',
        'Tussenvoegsel' => 'Varchar(255)',
        'LastName' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Phone' => 'Varchar(20)',
        'Postcode' => 'Varchar(10)',
        'City' => 'Varchar(255)',
        'Street' => 'Varchar(255)',
        'Housenumber' => 'Varchar(10)',
        'Work' => 'Text',
        'Organization' => 'Varchar(255)',
        'Votes' => 'Int'
    ];

    private static $summary_fields = [
        'FullNameAndEmail' => 'Naam, email en aantal stemmen',
    ];
    
    public function getFullNameAndEmail() {
        return "{$this->FirstName} {$this->LastName} ({$this->Email}) aantal stemmen: $this->Votes";
    }
    public function validate() {
        $result = parent::validate();

        $requiredFields = [
            'Gender' => 'Geslacht is verplicht.',
            'FirstName' => 'Voornaam is verplicht.',
            'LastName' => 'Achternaam is verplicht.',
            'Email' => 'E-mailadres is verplicht.',
            'Phone' => 'Telefoonnummer is verplicht.',
            'Postcode' => 'Postcode is verplicht.',
            'City' => 'Plaatsnaam is verplicht.',
            'Street' => 'Straatnaam is verplicht.',
            'Housenumber' => 'Huisnummer is verplicht.',
            'Work' => 'Werkinformatie is verplicht.',
            'Organization' => 'Organisatie is verplicht.'
        ];

        foreach ($requiredFields as $field => $message) {
            if (empty($this->$field)) {
                $result->addFieldError($field, $message);
            }
        }

        if (!filter_var($this->Email, FILTER_VALIDATE_EMAIL)) {
            $result->addFieldError('Email', 'E-mailadres is ongeldig.');
        }

        if (!preg_match('/^[0-9+() -]+$/', $this->Phone)) {
            $result->addFieldError('Phone', 'Telefoonnummer is ongeldig.');
        }

        if (!preg_match('/^\d{4} ?[A-Z]{2}$/i', $this->Postcode)) {
            $result->addFieldError('Postcode', 'Postcode is ongeldig. Gebruik het Nederlandse formaat (1234 AB).');
        }

        if (!preg_match('/^\d+[A-Z]*$/i', $this->Housenumber)) {
            $result->addFieldError('Housenumber', 'Huisnummer is ongeldig. Gebruik het Nederlandse formaat (123 of 123A).');
        }

        return $result;
    }
}
