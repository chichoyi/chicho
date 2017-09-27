<?php

namespace App\Http\Requests\Admin;

use App\Http\Requests\CommonRequest;
use App\Services\Core\Request\MyRequest;
use Illuminate\Foundation\Http\FormRequest;

class ArticlePost extends FormRequest
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
            'title' => 'required',
            'description' => 'required',
            'tags' => 'required',
            'content' => 'required',
        ];
        $method = $this->getAction();
        if ($method == 'article') return $rule;
        if ($method == 'article') return $rule;


        return [];
    }

    public function attributes(){
        return [
            'title' => '标题',
            'description' => '描述',
            'tags' => '标签',
            'content' => '内容',
        ];
    }
}
