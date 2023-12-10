<?php

namespace App\Repositories\ProgrammingLanguage;

use App\Repositories\BaseRepository;

use App\Models\ProgrammingLanguage;

class CreateProgrammingLanguageRepository extends BaseRepository
{
    public function execute($request){
        if ($this->user()->hasRole('ADMIN')){
            $programmingLanguage = ProgrammingLanguage::create([
                'reference_number' => $this->programmingLanguageReferenceNumber(),
                'name' => $request->name
            ]);
        }
        else{
            return $this->error("You are not authorized to create Programming Language");
        }

        return $this->success("Programming Language successfully created",[
            'referenceNumber' => $programmingLanguage->reference_number,
            'name' => $programmingLanguage->name
        ]);
        
    }
}
