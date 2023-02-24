<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="{{asset('plane/create_plane.css') }}">
    <title> Fieldset</title>

</head>
<body>

<form action="{{route('users.update', $user->id)}}" method="post">
    @csrf
    @method('PUT')

    <div class="plane-info">
        <fieldset>
            <legend>Edit user</legend>

            <div class="input-box">
                <label>Type</label>

                <input name="name" type="text" value="{{$user->name}}">

            </div>

            <div class="input-box">
                <label>Content</label>

                <input name="email" type="email" value="{{$user->email}}">


            </div>
            <div class="col-12">
                <label class="form-label select-label">Courses </label>

                @isset($courses)
                    @foreach($courses as $item )
                        <input type="checkbox" name="courses[]" value={{$item->id}}
                            {{$user->courses->contains($item)? 'checked':''}}>{{$item->name}}

                    @endforeach
                @endisset

            </div>
            <div align="center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </fieldset>
    </div>
</form>
</body>
</html>
