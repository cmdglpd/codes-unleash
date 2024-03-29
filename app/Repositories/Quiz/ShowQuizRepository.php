<?php

namespace App\Repositories\Quiz;

use App\Repositories\BaseRepository;

use App\Models\Quiz;

class ShowQuizRepository extends BaseRepository
{
    public function execute($referenceNumber){
        $quiz = Quiz::where('reference_number', $referenceNumber)->firstOrFail();
        $allQuizzes = $quiz->quiz;
        $quizzes = [];

        if($allQuizzes){
            foreach($allQuizzes as $quiz){
                $quizzes[] = [
                    'referenceNumber' => $quiz->reference_number,
                    'title' => $quiz->title
                ];
            }
        }

        return $this->success("Quiz Found", [
            'referenceNumber' => $quiz->reference_number,
            'title' => $quiz->title
        ]);
    }
}

