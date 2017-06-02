<?php

namespace App\Http\Requests\Account;

use Illuminate\Foundation\Http\FormRequest;

class RegisterPost extends FormRequest
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
     *        $account = $request->input('phone');
    $password = $request->input('password');
    $role_id = $request->input('role_id');
    $hospital_id = $request->input('hospital_id');
    $head_url = $request->input('head_url');
    $name = $request->input('name');
    $sex = $request->input('sex');
    $age = $request->input('age');
    $title_id = $request->input('title_id');
    $title_id = $request->input('title_id');
    $interest_id = $request->input('interest_id');
    $if_authorized = $request->input('if_authorized');
    $invite_phone = $request->input('invite_phone');
     * @return array
     */
    public function rules()
    {
        return [
//            'phone' => 'required|unique:customers|max:255',
        ];
    }
}
