@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    You Can Upload File
                </div>
            </div>
        </div>
    </div>
</div>

@if(session()->has('success'))
    <div class="alert alert-success h-row-2">
        {{ session()->get('success') }}
    </div>
@elseif(session()->has('error'))
    <div class="alert alert-danger h-row-2">
        {{ session()->get('error') }}
    </div>
@endif
<form class="form-horizontal" method="post" action="/file" accept-charset="UTF-8" enctype="multipart/form-data">  
    <input type="file" class="form-control" id="user_icon_file" name="user_icon_file" placeholder="上傳圖片" value="">
    <input type="submit" name="submit" value="Submit" class="btn btn-success h-submit">
    {!! csrf_field() !!}
</form> 

@foreach($files as $file)
    <div class="row h-row-0">
        <div class="row h-row-1">
            <a class="h-data" href="/user-upload/{{ $file->name }}">{{ $file->name }}</p>
        </div>
    </div>
@endforeach

@endsection
