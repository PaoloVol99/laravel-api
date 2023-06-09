<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'title'=>'required|max:30|unique:projects,title',
            'client'=>'required|max:30',
            'description'=>'required|min:20',
            'url'=>'nullable|url|max:220',
            'type'=>'nullable|exists:types,id'
        ];
    }
}
