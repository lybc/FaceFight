<link rel="stylesheet" type="text/css" href="{{ asset('wangEditor-2.1.23/dist/css/wangEditor.min.css') }}">

<div id="editor"></div>
<script type="text/javascript" src="{{ asset('wangEditor-2.1.23/dist/js/wangEditor.min.js') }}"></script>
<script>
    var editor = new wangEditor('editor');
    editor.config.uploadImgUrl = '/asdfasdf';
    editor.create();
</script>