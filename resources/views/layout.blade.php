<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="zh">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>{{ config('app.name') }} | @yield('title')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('semantic-ui/semantic.min.css') }}">
    <script
            src="https://code.jquery.com/jquery-3.1.1.min.js"
            integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
            crossorigin="anonymous"></script>
    <script src="{{ asset('semantic-ui/semantic.min.js') }}"></script>
    <style>
        html, body {
            width: 100%;
            height: 100%;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="ui inverted menu">
    <div class="header item"><a href="{{ url('/') }}">{{ config('app.name') }}</a></div>
    <a class="item">斗图 </a>
    <a class="item">摄影 </a>
    <div class="right menu">
        <div class="item">
            <button class="ui animated button" tabindex="0" onclick="window.location.href='{{url('add-post')}}'">
                <div  class="visible content">发帖</div>
                <div class="hidden content">
                    <i class="right arrow icon"></i>
                </div>
            </button>
        </div>
        <div class="item">
            <button class="ui animated button" tabindex="0" onclick="window.location.href='{{url('login')}}'">
                <div  class="visible content">登录</div>
                <div class="hidden content">
                    <i class="right arrow icon"></i>
                </div>
            </button>
        </div>
        <div class="ui right aligned category search item">
            <div class="ui transparent icon input">
                <input class="prompt" type="text" placeholder="搜索...">
                <i class="search link icon"></i>
            </div>
            <div class="results"></div>
        </div>
    </div>
</div>
<div class="ui main container">
    <div class="ui grid">
        <div class="twelve wide column">
            @yield('main')
        </div>

        <div class="four wide column">
            <div class="ui card sticky">
                <div class="image">
                    <img src="http://placehold.it/300x400">
                </div>
                <div class="content">
                    <a class="header">超级无敌好饺子</a>
                    <div class="meta">
                        <span class="date">Joined in 2013</span>
                    </div>
                    <div class="description">- 情不知所起，一往而深</div>
                </div>
                <div class="extra content">
                    <a><i class="user icon"></i> 有 22 人关注了你 </a>
                </div>
            </div>
            <script>
                $('.ui .sticky').sticky({
                    context: '#mainContext'
                });
            </script>
        </div>
    </div>
</div>
</body>
</html>