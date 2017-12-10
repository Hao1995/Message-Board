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
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        @foreach($data as $p)
        <div class="row h-row">
            <div class="col-xl-10 col-lg-9 col-md-9 col-sm-8 col-6 h-text">
                <p>{{ $p['content'] }}</p>
            </div>
            <div class="col-xl-2 col-lg-3 col-md-3 col-sm-4 col-6 h-btn-group">
                <button class="btn btn-warning h-btn">Edit</button>
                <button class="btn btn-danger h-btn">Delete</button>
            </div>
        </div>
        @endforeach
        <div class="row h-row">
            <form action="/task" method="post" class="h-form">
                <input type="text" name="content" placeholder="What are you thinking?" class="col-xl-12 h-input">
                <input type="submit" name="submit" class="btn btn-success h-submit">
                {!! csrf_field() !!}
            </form>
        </div>
    </div>

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