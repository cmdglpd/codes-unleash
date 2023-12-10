<?php

namespace App\Traits;

use App\Models\{
    User,
    ProgrammingLanguage,
    Chapter,
    Lesson
};

trait Generator
{
    protected function programmingLanguageReferenceNumber(){

        do {

            $referenceNumber = bin2hex(random_bytes(6));

        } while (ProgrammingLanguage::where("reference_number", $referenceNumber)->first());

        return $referenceNumber;
    }

    protected function chapterReferenceNumber(){

        do {

            $referenceNumber = bin2hex(random_bytes(6));

        } while (Chapter::where("reference_number", $referenceNumber)->first());

        return $referenceNumber;
    }

    protected function lessonReferenceNumber(){

        do {

            $referenceNumber = bin2hex(random_bytes(6));

        } while (Lesson::where("reference_number", $referenceNumber)->first());

        return $referenceNumber;
    }
}
