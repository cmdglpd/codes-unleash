<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// * REQUEST
use App\Http\Requests\Chapter\{
    CreateChapterRequest
};

// * REPOSITORY
use App\Repositories\Chapter\{
    CreateChapterRepository
};


class ChapterController extends Controller
{
    protected $create ;

    public function __construct(
        CreateChapterRepository $create
    ) {
        $this->create = $create;
    }

    protected function create(CreateChapterRequest $request)
    {
        return $this->create->execute($request);
    }
}
