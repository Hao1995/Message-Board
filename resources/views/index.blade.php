@extends('layouts.app')

@section('content')
    <div class="container h-container">
        <h2 class="h-title">CRUD APPLICATION - MESSAGE BOARD</h2>
        @if(session()->has('message'))
            <div class="alert alert-success h-row-2">
                {{ session()->get('message') }}
            </div>
        @endif
        @if(count($data)<=0)
            <div class="row h-row-2">
                <p class="h-notification">No Data</p>
            </div>
        @else 
            @foreach($data as $p)
                <div class="row h-row-0">
                    @if($user['id'] == 1)
                    <form method="post" action="/task/{{$p['id']}}" class="h-delete-form">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" value="X" id="h-delete-submit-{{$p['id']}}" class="btn btn-danger h-btn h-delete-submit">
                        {!! csrf_field() !!}
                    </form>
                    @endif
                    <div class="row h-row-1">
                        <form method="post" action="/task/{{$p['id']}}" class="h-form-edit">
                        <table class="h-table">
                            <tr>
                                <th class="col-xl-9 col-lg-9 col-md-9 col-sm-9 col-8 h-text h-row-left-{{$p['id']}}">
                                    <p id="data-{{$p['id']}}" class="h-data">{{ $p['content'] }}</p>
                                    @if($user['id'] == 1)
                                    <input type="hidden" name="_method" value="PUT">
                                    <input type="text" name="content" placeholder="Enter title" class="h-dataEdit h-display-none" id="dataEdit-{{$p['id']}}" value="{{$p['content']}}">
                                    @endif
                                </th>
                                <th class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-4 h-btn-group h-row-right-{{$p['id']}}">
                                    @if($user['id'] == 1)
                                    <input type="submit" name="submit" value="Submit" id="h-put-submit-{{$p['id']}}" class="btn btn-info h-btn h-display-none" >
                                    <button type="button" id="h-edit" class="btn btn-warning h-btn" value="{{$p['id']}}"><span>Edit</span></button>
                                    @endif
                                </th>
                            </tr>
                        </table>
                            {!! csrf_field() !!}
                        </form>
                    </div>
                </div>
            @endforeach
        @endif
        @if($user['id'] == 1)
        <div class="row h-row-2">
            <form action="/task" method="post" class="h-form">
                <table class="h-table">
                    <tr>
                        <th class="col-xl-10 h-th">
                            <input type="text" name="content" placeholder="What are you thinking?" class="h-input">
                        </th>
                        <th class="col-xl-2 h-th">
                            <select name="level" class="h-selector">
                                <option value="0">Public</option>
                                <option value="1">Private</option>
                                <option value="2">Hidden</option>
                            </select>
                        </th>
                    </tr>
                </table>
                <input type="submit" name="submit" value="Submit" class="btn btn-success h-submit">
                {!! csrf_field() !!}
            </form>
        </div>
        @endif
    </div>
@endsection
