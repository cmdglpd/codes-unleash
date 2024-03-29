<?php

namespace App\Repositories\Exam;

use App\Repositories\BaseRepository;

class IndexExamRepository extends BaseRepository
{
    public function execute(){
        $allExams = Exam::all();

        $exam = [];

        foreach($allExams as $exam){
            $exam[] = [

                'referenceNumber' => $exam->reference_number,
                'title' => $exam->title
            ];
        }

        return $this->success("List of All Exam", $exam);

    }
}
