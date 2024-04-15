<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class homePageRequest extends FormRequest
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
            'sec_one_h_one' => 'required',
            'sec_one_h_two' => 'required',
            'sec_one_text' => 'required',
            'sec_one_image' => 'required',
            'sec_one_btn_text' => 'required',

            'sec_two_image_one' => 'required',
            'sec_two_title_one' => 'required',
            'sec_two_text_one' => 'required',

            'sec_two_image_two' => 'required',
            'sec_two_title_two' => 'required',
            'sec_two_text_two' => 'required',

            'sec_two_image_three' => 'required',
            'sec_two_title_three' => 'required',
            'sec_two_text_three' => 'required',

            'sec_two_image_four' => 'required',
            'sec_two_title_four' => 'required',
            'sec_two_text_four' => 'required',

            'sec_three_main_h' => 'required',
            'sec_three_image_one' => 'required',
            'sec_three_image_two' => 'required',
            'sec_three_image_three' => 'required',
            'sec_three_image_four' => 'required',
            'sec_three_image_five' => 'required',
            'sec_three_image_six' => 'required',
            'sec_three_image_seven'=> 'required',
            'sec_three_image_eight'=> 'required',


            'sec_four_main_h' => 'required',
            'sec_four_box_btn_text' => 'required',

            'sec_four_box_one_title' => 'required',
            'sec_four_box_one_text' => 'required',


            'sec_four_box_two_title' => 'required',
            'sec_four_box_two_text' => 'required',


            'sec_four_box_three_title' => 'required',
            'sec_four_box_three_text' => 'required',


            'sec_four_box_four_title' => 'required',
            'sec_four_box_four_text' => 'required',

            'sec_four_box_five_title' => 'required',
            'sec_four_box_five_text' => 'required',


            'sec_five_main_h' => 'required',
            'sec_five_image' => 'required',
            'sec_five_google_map' => 'required',


            'sec_six_main_h' => 'required',
            'sec_six_text_one' => 'required',
            'sec_six_text_two' => 'required',
            'sec_six_text_three' => 'required',
            'sec_six_text_four' => 'required',
            'sec_six_text_five' => 'required',
            'sec_six_text_six' => 'required',

            'sec_seven_main_h' => 'required',
            
            'sec_eight_main_h' => 'required',
            
        ];
    }
}
