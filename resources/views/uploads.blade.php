@section('title', '图片上传')
@section('category', '图片上传')

@extends('layouts.basePage')
@section('content')
<link rel="stylesheet" href="{{ asset('/dropzone-4.3.0/dist/basic.css') }}">
<link rel="stylesheet" href="{{ asset('/dropzone-4.3.0/dist/dropzone.css') }}">

<script src="{{ asset('/dropzone-4.3.0/dist/dropzone.js') }}"></script>

<form action="/file-upload" class="dropzone" id="dz">
</form>
<script>
    Dropzone.options.dz = {
        url: '{{ route('handle-file-upload') }}',
        maxFilesize: 10,
        paramName: 'files',
        dictDefaultMessage: '将文件拖拽到此处或点击这里上传',
        acceptedFiles: 'image/*',
        uploadMultiple: true
    };
</script>
@endsection
