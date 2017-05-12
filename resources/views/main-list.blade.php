@extends('layout')
@section('title', '首页')
<?php $faker = Faker\Factory::create();?>
@section('main')
<div class="ui three cards stackable" id="mainContext">
    @foreach(range(1, 20) as $item)
    <div class="card">
        <div class="image">
            <img src="http://placehold.it/300x300">
        </div>
        <div class="content">
            <div class="header"><a href="{{ url('/detail') }}">Matthew is an interior designer living in New York.</a> </div>
            <div class="meta">
                <a>Friends</a>
            </div>
            <div class="description">Matthew is an interior designer living in New York. </div>
        </div>
        <div class="extra content">
            <span class="right floated">Joined in 2013 </span>
            <span><i class="user icon"></i> 75 Friends </span>
        </div>
    </div>
    @endforeach
</div>
@endsection