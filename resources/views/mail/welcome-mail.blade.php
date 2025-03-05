<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $mailsubject }}</title>
    <style>
        .main_page {
            background-color:rgb(236, 234, 234);
            border-radius: 1.5rem;
            box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
            padding: 20px;
            max-width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="main_page">
        <h2>{{ $mailsubject }}</h2>
        <p>{{ $mailmessages }}</p>
        <div class="social">
            <a href="">{{$sociallink['facebook']}} |</a>
            <a href="">{{$sociallink['twitter']}}|</a>
            <a href="">{{$sociallink['linkedin']}} |</a>
            <a href="">{{$sociallink['instagram']}} </a>
        </div>
        <hr>
        <p>{{$address}}</p>
        <hr>
       
       
        <p>{{ $post->post_title}}</p>
        <p>{{ $post->post_desc}}</p>
       
      

    </div>
</body>
</html>
