@extends('layout')
@section('title', '发帖')
@section('main')
    <div class="ui form" id="mainContext">
        <form id="post">
            {{ csrf_field() }}
            <div class="field">
                <label>标题</label>
                <input type="text" name="title">
            </div>
            <div class="field">
                <label>描述</label>
                <textarea rows="2" name="description"></textarea>
            </div>
            <div class="field">
                <label>内容</label>
                @include('pageComponents.editor', ['postName' => 'content'])
            </div>
            <button class="ui secondary button" type="submit">发帖</button>
            <button class="ui button" type="submit">取消</button>
        </form>
    </div>
    <script>
        $('form#post').submit(function () {
            var formData = $(this).serialize();
            return false;
        });
    </script>
@endsection