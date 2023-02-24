<!DOCTYPE html>
<html>
<head>
    <style>
        h1 {
            color: #04AA6D;
            font-family: Arial;
        }
        div {

            font-family: Arial;
            font-size: 120%;
        }
        p{
            border: 2px solid palegreen;
            margin-right: 30px;
        }
        hr{
            margin-right: 20px;
            margin-left: 20px;
        }
        li {
            display: list-item;
        }
        ul{
            font-family: Arial;
            font-size: 100%;
        }
    </style>
</head>
<body>

@isset($post)

    <h1> {{$post->user->name}}: {{$post->title}} </h1>
    <p>
    <div> {{$post->body}}</div>
    <hr color="palegreen" width="90%">
    <br>
    <div ><b>Comments:</b></div>
    <div class="tree">
        @include('posts/comment_widget',['comments' => $post->comments])
    </div>
    </p>


@endisset


</body>
</html>
