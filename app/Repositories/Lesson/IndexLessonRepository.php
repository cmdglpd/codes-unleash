<?php

namespace App\Repositories\Lesson;

use App\Repositories\BaseRepository;

use App\Models\Lesson;

class IndexLessonRepository extends BaseRepository
{
    public function execute(){
        $allChapter = Chapter::all();

        $lesson = [];

        foreach($allChapter as $lesson){
            $lesson[] = [
                'referenceNumber' => $lesson->reference_number,
                'lesson_number' => $lesson->lesson_number,
                'title' => $lesson->title,
                'video' => $lesson->video,
                'example_code' => $lesson->example_code,
                'output' => $lesson->output,
                'explanation' => $lesson->explanation,
                'chapter_id' => $lesson-> chapter_id
            ];
        }

        return $this->success("List of All Lessons", $chapter);
    }
}
