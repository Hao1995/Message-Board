@extends('layouts.app')

@section('content')

<div class="container h-container">
    @if(session()->has('success'))
    <div class="alert alert-success h-row-2">
        {{ session()->get('success') }}
    </div>
    @elseif(session()->has('error'))
    <div class="alert alert-danger h-row-2">
        {{ session()->get('error') }}
    </div>
    @endif
    @foreach($files as $file)
    <div class="row h-row-0">
        <form method="post" action="/filedata/{{ $file->name }}" class="h-delete-form">
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" value="X" id="h-delete-submit-{{ $file->id }}" class="btn btn-danger h-btn h-delete-submit">
            {!! csrf_field() !!}
        </form>
        <div class="row h-row-1">
            <a class="h-data" target="_blank" href="/user-upload/{{ $file->name }}">{{ $file->name }}</p>
        </div>
    </div>
    @endforeach
    <div class="row h-row-2">
        <form class="form-horizontal h-form" method="post" action="/filedata" accept-charset="UTF-8" enctype="multipart/form-data">  
            <input type="file" class="form-control h-input" id="user_icon_file" name="user_icon_file" placeholder="Upload" value="">
            <input type="submit" name="submit" value="Submit" class="btn btn-success h-submit">
            {!! csrf_field() !!}
        </form> 
    </div>
</div>

@endsection
