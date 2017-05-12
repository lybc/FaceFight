@extends('layout')
@section('title', '发帖')

@section('main')
    <div class="ui form" id="mainContext">
        <form action="">
            <div class="field">
                <label>标题</label>
                <input type="text">
            </div>
            <div class="field">
                <label>描述</label>
                <textarea rows="2"></textarea>
            </div>
            <div class="field">
                <label>内容</label>
                <textarea></textarea>
            </div>
            <button class="ui secondary button" type="submit">发帖</button>
            <button class="ui button" type="submit">取消</button>
        </form>
    </div>
@endsection