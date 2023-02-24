<ul>
    @foreach($comments as $comment)
        <li>
            <a>{{$comment->user->name}}: {{$comment->body}}</a>

            @if(!empty($comment->children) && $comment->children->count())
                @include('posts/comment_widget',['comments' => $comment->children])
            @endif
        </li>
    @endforeach
</ul>
