
<!DOCTYPE html>
<html>
<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic-ui/semantic.min.css') }}">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="{{ asset('semantic-ui/semantic.min.js') }}"></script>
    <style type="text/css">
        body {
            background-color: #DADADA;
        }
        body > .grid {
            height: 100%;
        }
        .image {
            margin-top: -100px;
        }
        .column {
            max-width: 450px;
        }
    </style>
    <script>
        $(document).ready(function() {
            $('.ui.form').form({
                fields: {
                    email: {
                        identifier  : 'email',
                        rules: [{
                            type   : 'empty',
                            prompt : 'Please enter your e-mail'
                        },
                        {
                            type   : 'email',
                            prompt : 'Please enter a valid e-mail'
                        }
                    ]
                },
                password: {
                    identifier  : 'password',
                    rules: [{
                        type   : 'empty',
                        prompt : 'Please enter your password'
                    },
                    {
                        type   : 'length[6]',
                        prompt : 'Your password must be at least 6 characters'
                    }]
                }
            }
        });
    });
    </script>
</head>
<body>

<div class="ui middle aligned center aligned grid">
    <div class="column">
        <h2 class="ui teal image header">
            {{--<img src="assets/images/logo.png" class="image">--}}
            <div class="content">
                Welcome to Face Fight
            </div>
        </h2>
        <form class="ui large form" action="{{ route('login') }}">
            <div class="ui stacked segment">
                <div class="field">
                    <div class="ui left icon input">
                        <i class="user icon"></i>
                        <input type="text" name="email" placeholder="邮箱">
                    </div>
                </div>
                <div class="field">
                    <div class="ui left icon input">
                        <i class="lock icon"></i>
                        <input type="password" name="password" placeholder="密码">
                    </div>
                </div>
                <div class="field">
                    <div class="ui checkbox">
                        <input type="checkbox" tabindex="0" class="hidden">
                        <label>记住我</label>
                    </div>
                </div>
                <div class="ui fluid large teal submit button">登录</div>
            </div>

            <div class="ui error message"></div>

        </form>

        <div class="ui message">
            还没有账户 ? <a href="#">Sign Up</a>
        </div>
    </div>
</div>

</body>

</html>
