<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'post' => 'required|max:2000',
            'feeling' => 'required',
            'about' => 'required'
        ];
    }

    public function tweet(): string
    {
        return $this->input('post');
    }

    public function id() :int
    {
        return (int) $this->route('postId');
    }

    public function feeling()
    {
        return $this->input('feeling');
    }

    public function about_what()
    {
        return $this->input('about');
    }
}
