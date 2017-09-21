<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted'             => ':attribute 必须被接受',
    'active_url'           => ':attribute 不是有效的URL',
    'after'                => ':attribute 必须在 :date 之后',
    'alpha'                => ':attribute 只能包含字母',
    'alpha_dash'           => ':attribute 只能包含字母，数字及破折号',
    'alpha_num'            => ':attribute 只能包含字母和数字',
    'array'                => ':attribute 必须是一个数组',
    'before'               => ':attribute 必须在 :date 之前',
    'between'              => [
        'numeric' => ':attribute 必须介于 :min 和 :max 之间',
        'file'    => ':attribute 必须介于 :min 和 :max K之间',
        'string'  => ':attribute 必须介于 :min 和 :max 字符之间',
        'array'   => ':attribute 必须介于 :min 和 :max 之间',
    ],
    'boolean'              => ':attribute 字段必须是真或假',
    'confirmed'            => ':attribute 确认不匹配',
    'date'                 => ':attribute 不是一个有效日期',
    'date_format'          => ':attribute 不匹配格式 :format',
    'different'            => ':attribute 和 :other 必须是不同的',
    'digits'               => ':attribute 必须是 :digits 位数',
    'digits_between'       => ':attribute 必须介于 :min 和 :max 位数',
    'dimensions'           => ':attribute 具有无效的图像尺寸',
    'distinct'             => ':attribute 字段具有重复的值',
    'email'                => ':attribute 必须是一个有效的电子邮件地址',
    'exists'               => '所选择的 :attribute 不存在',
    'file'                 => ':attribute 必须是一个文件',
    'filled'               => ':attribute 字段是必需的',
    'image'                => ':attribute 必须是图像',
    'in'                   => '所选择的 :attribute 无效',
    'in_array'             => ':attribute 字段不存在 :other',
    'integer'              => ':attribute 必须是整数',
    'ip'                   => ':attribute 必须是一个有效的IP地址',
    'json'                 => ':attribute 必须是一个有效的JSON字符串',
    'max'                  => [
        'numeric' => ':attribute 不得大于 :max',
        'file'    => ':attribute 不得大于 :max K',
        'string'  => ':attribute 不得大于 :max 字符',
        'array'   => ':attribute 不得超出 :max',
    ],
    'mimes'                => ':attribute 类型必须是: :values 文件类型',
    'mimetypes'            => ':attribute 必须是一个类型的文件: :values',
    'min'                  => [
        'numeric' => ':attribute 必须至少为 :min',
        'file'    => ':attribute 必须至少为 :min K',
        'string'  => ':attribute 必须至少为 :min 字符',
        'array'   => ':attribute 必须不能超出 :min',
    ],
    'not_in'               => '选项 :attribute 无效',
    'numeric'              => ':attribute 必须是数字',
    'present'              => ':attribute 字段必须存在',
    'regex'                => ':attribute 格式无效',
    'required'             => ':attribute不能为空',
    'required_if'          => ':attribute 必填当 :other 是 :value',
    'required_unless'      => ':attribute 必填，除非 :other 介于 :values',
    'required_with'        => ':attribute 不能为空当 :values 存在',
    'required_with_all'    => ':attribute 不能为空当 :values 存在',
    'required_without'     => ':attribute 不能为空当 :values 不存在',
    'required_without_all' => ':attribute 不能为空当 :values 不存在',
    'same'                 => ':attribute 和 :other 必须匹配',
    'size'                 => [
        'numeric' => ':attribute 必须是 :size',
        'file'    => ':attribute 必须是 :size K',
        'string'  => ':attribute 必须是 :size 字符',
        'array'   => ':attribute 必须包含 :size',
    ],
    'string'               => ':attribute 必须是一个字符串',
    'timezone'             => ':attribute 必须是一个有效的时区',
    //'unique'               => ':attribute 已被占用',
    'unique'               => ':attribute已存在',
    'uploaded'             => ':attribute 上传失败',
    'url'                  => ':attribute 格式无效',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    //自定义 验证信息
      /*'email' => [
            'required' => 'We need to know your e-mail address!',
        ],*/
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap attribute place-holders
    | with something more reader friendly such as E-Mail Address instead
    | of "email". This simply helps us make messages a little cleaner.
    |
    */

];
