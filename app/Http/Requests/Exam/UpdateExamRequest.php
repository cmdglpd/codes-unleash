<?php

namespace App\Http\Requests\Exam;

use App\Http\Requests\ResponseRequest;

class UpdateExamRequest extends ResponseRequest
{
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
            'title' => ['required|string|max:255'],
            'questions' => ['required|array|min:10'], // Assuming you need exactly 15 questions
            'questions.*.options' => ['required|array|min:2|max:4'] // Assuming each question has 2 to 4 options
        ];
    }
}