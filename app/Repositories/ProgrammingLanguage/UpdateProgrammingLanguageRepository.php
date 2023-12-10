<?php

namespace App\Repositories\ProgrammingLanguage;

use App\Repositories\BaseRepository;

use App\Models\ProgrammingLanguage;

class UpdateProgrammingLanguageRepository extends BaseRepository
{
    public function execute($referenceNumber, $request){

        if ($this->user()->hasRole('ADMIN')){

            $programmingLanguage = ProgrammingLanguage::where('reference_number', $referenceNumber)->firstOrFail();
            $programmingLanguage->update([
                'name' => $request->name
            ]);

        }
        else{
            return $this->error("You are not authorized to create Programming Language");
        }

        return $this->success("Programming Language successfully deleted",[
            'referenceNumber' => $programmingLanguage->reference_number,
            'name' => $programmingLanguage->name
        ]);

    }
}
