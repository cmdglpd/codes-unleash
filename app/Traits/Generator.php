<?php

namespace App\Traits;

use App\Models\{
    Availability,
    User,
    Appointment
};

trait Generator
{
    protected function appointmentReferenceNumber(){

        do {

            $referenceNumber = bin2hex(random_bytes(6));

        } while (Appointment::where("reference_number", $referenceNumber)->first());

        return $referenceNumber;
    }
}
