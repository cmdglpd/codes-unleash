<?php

namespace App\Http\Requests\Exam;

use App\Http\Requests\ResponseRequest;

use App\Traits\Getter;

class CreateExamRequest extends ResponseRequest
{
    use Getter; 
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => ['string','required','unique:exams,title']
        ];
    }
}