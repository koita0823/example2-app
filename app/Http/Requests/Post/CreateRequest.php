<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'post' => 'required',
            'feeling' => 'required',
            'about' => 'required'
        ];
    }

    public function userId(): int
    {
        return $this->user()->id;
    }
    
    public function tweet(): string
    {
        return $this->input('post');
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
