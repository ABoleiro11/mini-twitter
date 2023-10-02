<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mini-twitter</title>
    @vite('resources/css/app.scss')
</head>
<body>
@extends('layouts.app')

@section('content')
<div class="container">
    <header>
        <h1>Mini Twitter</h1>
        <div class="my-tweets">
            <p>Meine Tweets</p>
        </div>
        <div class="post-button">
            <a href="#" class="btn btn-primary">Tweet</a>
        </div>
    </header>

    <div class="message-box">
        <!-- Hier werden die Nachrichten angezeigt -->
        <!-- Blade-Direktiven, um Nachrichten aus der Datenbank anzuzeigen -->
    </div>
</div>
@endsection
    
    
</body>
</html>