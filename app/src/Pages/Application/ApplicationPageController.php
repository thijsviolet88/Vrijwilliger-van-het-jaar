<?php

namespace App\Pages;

use PageController;

use App\Objects\Organization;
use App\Objects\Volunteer;

class ApplicationPageController extends PageController {
    private static $allowed_actions = [
        'processApplicationForm'
    ];

    public function processApplicationForm($data) {
        $volunteer = Volunteer::create();
        
        $volunteer->Gender = $data['gender'];
        $volunteer->FirstName = $data['firstname'];
        $volunteer->Tussenvoegsel = $data['insert'];
        $volunteer->LastName = $data['lastname'];
        $volunteer->Email = $data['email'];
        $volunteer->Phone = $data['phone'];
        $volunteer->Postcode = $data['postcode'];
        $volunteer->City = $data['city'];
        $volunteer->Street = $data['street'];
        $volunteer->Housenumber = $data['housenumber'];
        $volunteer->Work = $data['work'];
        $volunteer->Organization = $data['organization'];
        
        $validator = $volunteer->validate();
        
        if ($validator->isValid()) {
            $volunteer->Votes = 0;
            $volunteer->write();
            
            return $this->redirect('bedankt');
        } else {
            foreach ($validator->getMessages() as $field => $message) {
            }
            
            return $this->redirectBack();
        }
    }


    public function processVolunteerForm($data) {
        $email = $data['email'];
        $nomineeName = $data['nomineeName'];

        $volunteer = Volunteer::get()->filter(['Email' => $email])->first();

        if ($volunteer) {
            $volunteer->Votes++;
            $volunteer->write();
        } else {
            return $this->redirectBack();
        }
    }

    public function processOrganizationForm($data) {
        $organizationName = $data['organization'];

        $organization = Organization::get()->filter(['Name' => $organizationName])->first();

        if ($organization) {
            $organization->Votes++;
            $organization->write();
        } else {
            $organization = Organization::create(['Name' => $organizationName, 'Votes' => 1]);
            $organization->write();
        }
    }
}
