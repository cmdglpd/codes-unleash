<?php

namespace App\Repositories\Lesson;

use App\Repositories\BaseRepository;

use App\Models\Lesson;

class ShowLessonRepository extends BaseRepository
{
    public function execute($referenceNumber){
        $lesson = Lesson::where('reference_number', $referenceNumber)->firstOrFail();

        return $this->success("Lessons Found", [
            'programmingLanguage' => $lesson->chapter->programmingLanguage->name,
            'chapter' => $lesson->chapter->name,
            'referenceNumber' => $lesson->reference_number,
            'lessonNumber' => $lesson->lesson_number,
            'title' => $lesson->title,
            'description' => $lesson->description,
            'video' => $lesson->video,
            'image' => $lesson->image,
            'exampleCode' => $lesson->example_code,
            'output' => $lesson->output,
            'explanation' => $lesson->explanation,
        ]);
    }
}
