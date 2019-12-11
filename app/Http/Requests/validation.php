<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validation extends FormRequest
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
           
             'employername'=> 'required|unique:employers,employername',
             'companyname' => 'required',
             'contact' => 'required',
            'username' =>'required',
  
           'password' => 'required',
            'type' => 'required',
        ];
        
    }



     public function messages(){

        return [
            'employername.required'=>'employername field is required!!!',
            'companyname.required'=>'companyname field cant left empty!',
           
            'contact.required'=>'contact field cant left empty!',
            'username.required'=>'username field cant left empty!',

            'password.required'=>'passward field cant left empty!',
            'type.required'=>'passward field cant left empty!',
           
           
           
           
        ];
    }
}
