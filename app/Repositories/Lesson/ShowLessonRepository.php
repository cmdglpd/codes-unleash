<?php

namespace App\Repositories\Lesson;

use App\Repositories\BaseRepository;

use App\Models\Lesson;

class ShowLessonRepository extends BaseRepository
{
    //diko sure to kase show na diko alam ano passhow ng lessons 
    //kase makikita na sa chapters? HJJSHAHJSAHJSJHJHS huhu
    public function execute(){
        $chapter = Chapter::where('reference_number', $referenceNumber)->firstOrFail();
        $allLessons = $chapter->lessons;
        $lesson = [];

        foreach($allLessons as $lesson){
            $lesson[] = [
                'referenceNumber' => $chapter->reference_number,
                'title' => $lesson->title
            ];
        }

        return $this->success("Lessons Found", [
            'referenceNumber' => $chapter->reference_number,
            'lesson_number' => $lesson->lesson_number,
            'title' => $lesson->title,
            'video' => $lesson->video,
            'example_code' => $lesson->example_code,
            'output' => $lesson->output,
            'explanation' => $lesson->explanation,
            'chapter_id' => $lesson-> chapter_id
        ]);
    }
}
