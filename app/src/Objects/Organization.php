<?php

namespace App\Objects;
use SilverStripe\ORM\DataObject;

class Organization extends DataObject {
    private static $table_name = 'VolunteerCompany';

    private static $db = [
        'Name' => 'Varchar(255)',
        'Votes' => 'Int'
    ];

    private static $summary_fields = [
        'NameVotes' => 'Naam en stemmen',
    ];
    
    public function getFullNameAndEmail() {
        return "{$this->Name} ($this->Votes)}";
    }
}
