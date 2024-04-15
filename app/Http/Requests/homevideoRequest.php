<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class homevideoRequest extends FormRequest
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
                'video_category_id'=>'required',
                'video_link'=>'required',
                'video_image'=>'required',
                'video_title'=>'required',
                'video_description'=>'required',
            ];
                    
    }

    /**
     * Get the custom validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */


    public function messages()
    {
        return [
            'video_category_id.required'=>'The Category Field Is required',
            'video_link.required'=>'The Video Link Field Is required',
            'video_image.required'=>'The Video Image Field Is required',
            'video_title.required'=>'The Video Title Field Is required',
            'video_description.required'=>'The Video Description Field Is required',
    
        ]   ;     
    }
}
