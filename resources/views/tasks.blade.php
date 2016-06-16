@extends('layouts.app')

@section('content')
<h1>
Task add form
</h1>
<div class="col-lg-4">
<form method="POST" action="/task">
<label for="name">Name</label><input class="form-control" placeholder ="Name" name="name" id="name" type="text"><br><br>
<label for="descr">Description</label><textarea class="form-control" placeholder ="Description" name="descr" id="descr"></textarea><br><br>
<label for="url">URL</label><input class="form-control" placeholder ="URL" name="url" id="url" type="url"><br><br>
<label for="priority">Priority</label><input class="form-control" placeholder ="Priority" name="priority" id="priority" type="number"><br><br>
<button type="submit" class="btn btn-danger">Отправить</button><br>
<input type="hidden" name="_token" value="{{ csrf_token() }}">
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.2/jquery.min.js"></script>
<script>
$.ajaxSetup({ 
headers: { 
'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
} 
});
</script>
</form>
</div>

@endsection