<?php

namespace App\Repositories\Lesson;

use App\Repositories\BaseRepository;

use App\Models\Lesson;

class IndexLessonRepository extends BaseRepository
{
    public function execute(){
        $allLessons = Lesson::all();

        $lessons = [];

        foreach($allLessons as $lesson){
            $lesson[] = [
                'referenceNumber' => $lesson->reference_number,
                'lesson_number' => $lesson->lesson_number,
                'title' => $lesson->title,
            ];
        }

        return $this->success("List of All Lessons", $lessons);
    }
}
