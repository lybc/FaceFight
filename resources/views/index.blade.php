@section('title', '首页')
@extends('layouts.basePage')

@section('content')
<div class="row">
    @foreach($imgs as $img)
        <div class="col-sm-6 col-md-4">
            <div class="thumbnail">
                <img src="{{ $img['href'] }}">
                <div class="caption">
                    <h3>{{ $img['category'] }}</h3>
                    @if(!empty($img['topics']))
                    <p>
                        @foreach($img['topics'] as $topic)
                            <span class="label label-default">{{ $topic }}</span>
                        @endforeach
                    </p>
                    @endif
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
