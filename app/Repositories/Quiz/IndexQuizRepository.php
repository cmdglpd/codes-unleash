<?php

namespace App\Repositories\Quiz;

use App\Repositories\BaseRepository;

class IndexQuizRepository extends BaseRepository
{
    public function execute(){
        $allQuizzes = Quiz::all();

        $exam = [];

        foreach($allQuizzes as $quiz){
            $quiz[] = [

                'referenceNumber' => $quiz->reference_number,
                'title' => $quiz->title
            ];
        }

        return $this->success("List of All Quiz", $quiz);

    }
}
