@extends('master')

@section('title','homepage')

@section('contain')
<h3>post a message:</h3>
@if(Session::get('success'))
{{ Session::get('success') }}
@endif
@if(Session::get('fail'))
{{ Session::get('fail') }}
@endif
<form action="{{ url('message') }}" method="post">
<input type="hidden" name="_token" value="{{ csrf_token() }}" />

   Title: <input type="text" name="title" required placeholder="litle" value="">
   Content: <input type="text" name="content" required placeholder="contant" value="">
    <button type="submit">submit</button>
</form>

@endsection
