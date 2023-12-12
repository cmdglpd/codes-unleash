<?php

namespace App\Repositories\Chapter;

use App\Repositories\BaseRepository;

use App\Models\Chapter;

class UpdateChapterRepository extends BaseRepository
{
    public function execute($referenceNumber, $request){

        if ($this->user()->hasRole('ADMIN')){

            $chapter = Chapter::where('reference_number', $referenceNumber)->firstOrFail();
            $chapter->update([
                'title' => $request->title,
                'chapter_id' => $request->chapter,
                'programming_language_id' => $this->getProgrammingLanguageId($request->programmingLanguage)
            ]);

        }
        else{
            return $this->error("You are not authorized to create Chapter");
        }

        return $this->success("Chapter successfully created",[
            'referenceNumber' => $chapter->reference_number,
            'title' => $chapter->title,
            'chapter_id' => $request->chapter,
            'programmingLanguage' => $chapter->programmingLanguage->name
        ]);

    }
}