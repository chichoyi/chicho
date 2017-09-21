<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminLoginPost extends FormRequest
{
    use CommonRequest;

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
        $rule = [
            'name' => 'required|exists:admins,name',
            'password' => 'required',
        ];
        $actionName = $this->getAction();
        if ($actionName == 'login') return $rule;

        return [];
    }

    public function attributes()
    {
        return [
            'name' => '用户名',
            'password' => '密码',
        ];
    }


}
