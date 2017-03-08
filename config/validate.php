<?php
return [
    'auth' => [
        'register' => [
            'rule' => [
                'email' => ['required', 'email', 'unique:user,email'],
                'password' => ['required', 'alpha_dash', 'min:6'],
                'repeatPassword' => ['same:password']
            ],
            'msg' => [
                'required' => ':attribute 不能为空',
                'email' => '电子邮件格式不合法',
                'email.unique' => '该用户已存在，请更换邮箱重新注册或直接登陆',
                'password.min' => '密码长度必须大于6位',
                'password.alpha_dash' => '密码只能包含字母、数字、下划线',
                'repeatPassword.same' => '两次输入密码不一致'
            ]
        ],

        'login' => [
            'rule' => [
                'email' => ['required', 'email', 'exists:user,email'],
                'password' => ['required', 'alpha_dash', 'min:6'],
            ],
            'msg' => [
                'required' => ':attribute 不能为空',
                'email' => '电子邮件格式不合法',
                'email.exists' => '该用户不存在，请先注册',
                'password.min' => '密码长度必须大于6位',
                'password.alpha_dash' => '密码只能包含字母、数字、下划线',
            ]
        ]
    ]
];