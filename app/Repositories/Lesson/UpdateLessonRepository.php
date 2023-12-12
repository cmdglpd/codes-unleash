<?php

namespace App\Repositories\Lesson;

use App\Repositories\BaseRepository;

use App\Models\Lesson;

class UpdateLessonRepository extends BaseRepository
{
    public function execute($request, $referenceNumber){
        if ($this->user()->hasRole('ADMIN')){

            $lesson = Lesson::where('reference_number', $referenceNumber)->firstOrFail();
            $lesson->update([
                'lesson_number' => $request->lesson_number,
                'title' => $request->title,
                'description' => $request->description,
                'video' => $request->video,
                'example_code' => $request->example_code,
                'output' => $request->output,
                'explanation' => $request->explanation,
                'chapter_id' => $request-> chapter_id
            ]);

        }
        else{
            return $this->error("You are not authorized to create Lesson");
        }

        return $this->success("Lesson successfully created",[
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
