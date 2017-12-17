<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>CRUD APPLICATION - MESSAGE BOARD</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
        crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="container h-container">
        <h2 class="h-title">CRUD APPLICATION - MESSAGE BOARD</h2>
        @if(session()->has('message'))
            <div class="alert alert-success h-row-2">
                {{ session()->get('message') }}
            </div>
        @endif
        @foreach($data as $p)
        <div class="row h-row-0">
            <form method="post" action="/task/{{$p['id']}}" class="h-delete-form">
                <input type="hidden" name="_method" value="DELETE">
                <input type="submit" value="X" id="h-delete-submit-{{$p['id']}}" class="btn btn-danger h-btn h-delete-submit">
                {!! csrf_field() !!}
            </form>
            <div class="row h-row-1">
                <form method="post" action="/task/{{$p['id']}}" class="h-form-edit">
                    <div class="col-xl-10 col-lg-9 col-md-9 col-sm-8 col-5 h-text" >
                        <p id="data-{{$p['id']}}" class="h-data">{{ $p['content'] }}</p>
                        <input type="hidden" name="_method" value="PUT">
                        <input type="text" name="content" placeholder="Enter title" class="h-dataEdit" id="dataEdit-{{$p['id']}}" value="{{$p['content']}}">
                    </div><!--  
                    --><div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-7 h-btn-group">
                        <input type="submit" name="submit" value="Submit" id="h-put-submit-{{$p['id']}}" class="btn btn-info h-btn" style="display:none;">
                        <button type="button" id="h-edit" class="btn btn-warning h-btn" value="{{$p['id']}}">Edit</button>
                    </div>
                    {!! csrf_field() !!}
                </form>
            </div>
        </div>
        @endforeach
        <div class="row h-row-2">
            <form action="/task" method="post" class="h-form">
                <input type="text" name="content" placeholder="What are you thinking?" class="col-xl-12 h-input">
                <input type="submit" name="submit" value="Submit" id="h-post-submit-{{$p['id']}}" class="btn btn-success h-submit">
                {!! csrf_field() !!}
            </form>
        </div>
    </div>

    <script src="{{ asset('js/javascript.js') }}" ></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
        crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
</body>

</html>