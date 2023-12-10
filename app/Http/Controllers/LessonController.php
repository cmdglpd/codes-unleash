<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * REQUEST
use App\Http\Requests\Lesson\{
    CreateLessonRequest
};

// * REPOSITORY
use App\Repositories\Lesson\{
    CreateLessonRepository
};

class LessonController extends Controller
{
    protected $create ;

    public function __construct(
        CreateLessonRepository $create
    ) {
        $this->create = $create;
    }

    protected function create(CreateLessonRequest $request)
    {
        return $this->create->execute($request);
    }
}
