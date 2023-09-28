<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Mini Twitter</h1>

    // Link zu /tweets/create
    // a href
    <a href="URL">

    <ul>
        @foreach($tweets as $tweet)
            <li style="border: 1px solid black; margin-bottom: 1rem;">
                <p>{{$tweet->title}}</p>
                <p>{{$tweet->text}}</p>
                <p>{{$tweet->id}}</p>
                <p>{{$tweet->created_at->format('d.m.Y')}}</p>
            </li>
        @endforeach
    </ul>

    


</body>

</html>