<?php

namespace App\Repositories\Chapter;

use App\Repositories\BaseRepository;

use App\Models\Chapter;

class ShowChapterRepository extends BaseRepository
{
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

        return $this->success("Chapters Found", [
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
