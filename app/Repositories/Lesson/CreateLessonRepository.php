<?php

namespace App\Repositories\Lesson;

use App\Repositories\BaseRepository;

use App\Models\Lesson;

class CreateLessonRepository extends BaseRepository
{
    public function execute($request){
        if ($this->user()->hasRole('ADMIN')){
            $lesson = Lesson::create([
                'reference_number' => $this->lessonReferenceNumber(),
                'lesson_number' => $request->lessonNumber,
                'title' => $request->title,
                'description' => $request->description,
                //'image' => $request->image,
                'video' => $request->video,
                'example_code' => $request->exampleCode,
                'output' => $request->output,
                'explanation' => $request->explanation,
                'chapter_id' => $this->getChapterId($request->chapter)
            ]);
        }
        else{
            return $this->error("You are not authorized to create Lesson");
        }

        return $this->success("Lesson successfully created", [
            'programmingLanguage' => $lesson->chapter->programmingLanguage->name,
            'chapter' => $lesson->chapter->title,
            'referenceNumber' => $lesson->reference_number,
            'lessonNumber' => $lesson->lesson_number,
            'title' => $lesson->title,
            'description' => $lesson->description,
            //'image' => $lesson->image,
            'video' => $lesson->video,
            'exampleCode' => $lesson->example_code,
            'output' => $lesson->output,
            'explanation' => $lesson->explanation
        ]);
    }
}
