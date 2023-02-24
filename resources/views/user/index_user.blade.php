<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding_bottom: 12px;
            text-align: center;
            background-color: #04AA6D;
            color: white;
        }

        #title {
            display: inline-block;
            /*margin-right: 10px;*/
            width: 80%;
            vertical-align: middle;
        }

        #create_button {
            display: inline-block;
            width: 19%;
        }

        a {
            color: #ddd;
        }

        .button1 {
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            size: 5px;
            padding: 10px 15px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
        }

        .button2 {
            background-color: #04AA6D; /* Green */
            border: none;
            color: white;
            size: 5px;
            padding: 0 2px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 15px;
        }
    </style>
</head>
<body>

<h1 id="title" align="center"> Users </h1>

{{--<div id='create_button' align="end">--}}
{{--    <a href={{route('complaints.create')}}>--}}
{{--        <button class="button1">+ Create</button>--}}
{{--    </a>--}}
{{--</div>--}}


<table id="customers">
    <tr>
        <th> Id</th>
        <th> Name</th>
        <th> Email</th>
        <th> Courses</th>
    </tr>
    @isset($users)
        @foreach($users as $user)
            <tr>
                <td> {{$user->id}}</td>
                <td> {{$user->name}}</td>
                <td> {{$user->email}}</td>
                <td>
                    @foreach($user->courses as $course)
                        {{$course->name}}
                    @endforeach
                </td>

                <th scope="row">
                    <div align="center">
                        <a class="fa fa-edit" href={{route('users.edit',$user->id)}}></a>
                    </div>
                </th>
{{--                <form action="{{route('complaints.destroy',$user->id)}}" method="post">--}}
{{--                    <th scope="row">--}}
{{--                        @csrf--}}
{{--                        @method('DELETE')--}}
{{--                        <div align="center">--}}
{{--                            <button class="button2">--}}
{{--                                <a class="fa fa-trash"></a>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    </th>--}}
{{--                </form>--}}
{{--                <th scope="row">--}}
{{--                    <div align="center">--}}
{{--                        <a href="{{route('complaints.show', $user->id)}}">--}}
{{--                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"--}}
{{--                                 class="bi bi-eye" viewBox="0 0 16 16">--}}
{{--                                <path--}}
{{--                                    d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8zM1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>--}}
{{--                                <path--}}
{{--                                    d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5zM4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0z"/>--}}
{{--                            </svg>--}}
{{--                        </a>--}}
{{--                    </div>--}}

{{--                </th>--}}
            </tr>

        @endforeach
    @endisset
</table>

</body>
</html>

