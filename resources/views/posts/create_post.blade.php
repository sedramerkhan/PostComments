<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('create.css') }}">
    <title> Fieldset</title>

</head>
<body>
<form action="{{route('posts.store')}}" method="post">
    @csrf
    <div class="info">
        <fieldset>
            <legend>Create Post</legend>

            <div class="input-box">
                <label>Title</label>

                <div>
                    <input name="title" type="text" value="{{old('title')}}">
                    @error('title')
                    <p class="error">less than 10 char</p>
                    @enderror
                </div>
            </div>
            <div class="input-box">
                <label>Content</label>
                <div>
                    <textarea name="body">{{old('body')}}</textarea>
                    @error('body')
                    <p class="error">less than 10 char</p>
                    @enderror
                </div>
            </div>
            <div class="col-12">
                <label class="form-label select-label">Type </label>
                <select name='user_id' class="select form-control-lg">
                    <option value="none" selected disabled hidden>
                        Select an Option
                    </option>
                    @isset($users)
                        @foreach($users as $user)
                            <option value="{{$user->id}}"> {{$user->name}}</option>
                        @endforeach
                    @endisset
                </select>
            </div>
            <div align ="center">
                <button  type="submit" class="button">Submit</button>
            </div>
        </fieldset>
    </div>
</form>
</body>
</html>


