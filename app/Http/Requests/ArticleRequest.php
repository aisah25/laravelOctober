<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleRequest extends FormRequest
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
        $id = $this->article;
        return [
            'title' => 'required|unique:article,title|max:255',
            'content' => 'required|unique:article,content|min:50'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Title is required, at least fill a character',
            'title.unique' => 'Title must unique, take another title',
            'title.max' => 'Title is too long, max 255 character',
            'content.required' => 'Content is required, at least fill a character',
            'content.unique' => 'Content must unique, take another content',
            'content.min' => 'Content is too short, min 50 character',
        ];
    }
}
