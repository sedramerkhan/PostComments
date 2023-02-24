<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('create.css') }}">
    <title> Fieldset</title>

</head>
<body>
<form action="{{route('posts.update',$post->id)}}" method="post">
    @csrf
    @method('PUT')
    <div class="info">
        <fieldset>
            <legend>Update Post</legend>

            <div class="input-box">
                <label>Title</label>
                <div>
                    <input name="title" type="text" value="{{$post->title}}">
                    @error('title')
                    <p class="error">more than 25 char</p>
                    @enderror
                </div>

            </div>
            <div class="input-box">
                <label>Content</label>
                <div>
                    <textarea name="body">{{$post->body}}</textarea>
                    @error('body')
                    <p class="error">less than 10 char</p>
                    @enderror
                </div>

            </div>

            <div align="center">
                <button type="submit" class="button">Submit</button>
            </div>
        </fieldset>
    </div>
</form>
</body>
</html>


