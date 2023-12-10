<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

// * REQUEST
use App\Http\Requests\ProgrammingLanguage\{
    CreateProgrammingLanguageRequest
};

// * REPOSITORY
use App\Repositories\ProgrammingLanguage\{
    CreateProgrammingLanguageRepository
};

class ProgrammingLanguageController extends Controller
{
    protected $create ;

    public function __construct(
        CreateProgrammingLanguageRepository $create
    ) {
        $this->create = $create;
    }

    protected function create(CreateProgrammingLanguageRequest $request)
    {
        return $this->create->execute($request);
    }
}
