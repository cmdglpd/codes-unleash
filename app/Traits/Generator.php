<?php

namespace App\Traits;

use App\Models\{
    User,
    ProgrammingLanguage
};

trait Generator
{
    protected function programmingLanguageReferenceNumber(){

        do {

            $referenceNumber = bin2hex(random_bytes(6));

        } while (ProgrammingLanguage::where("reference_number", $referenceNumber)->first());

        return $referenceNumber;
    }
}
