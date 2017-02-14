@section('title', '首页')
@extends('layouts.basePage')

@section('content')
<div class="row">
    @foreach(range(1, 10) as $v)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ asset('QQ图片20161017184259.jpg') }}">
                <div class="caption">
                    <h3>分类xxx</h3>
                    <p>
                        <span class="label label-default">标签1</span>
                        <span class="label label-default">标签2</span>
                        <span class="label label-default">标签3</span>
                    </p>
                    <div class="btn-group">
                        <a href="#" class="btn btn-primary" role="button">复制</a>
                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            更多操作 <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a href="#">编辑</a></li>
                            <li><a href="#">删除</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@endsection
