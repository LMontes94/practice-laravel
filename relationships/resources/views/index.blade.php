<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>{{$user->name}} phones:</h1>
    <h3>{{$user->phoneSim->company}}</h3>
    <ul>
        @foreach($user->phones as $phone)
        <li>{{$phone->prefix }} {{$phone->phone_number}}</li>
        @endforeach
    </ul>

    <h1>{{$user->name}} Roles:</h1>
    <ul>
        @foreach($user->roles as $role)
        <li>{{$role->name }} Added by:{{$role->pivot->added_by}}</li>
        @endforeach
    </ul>

    <h1>{{$user->image->url}}</h1>
</body>

</html>