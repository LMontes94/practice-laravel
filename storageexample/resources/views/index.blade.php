<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('create')}}">Create</a>
    <h3>Todo: read the info</h3>
    <ul>
        @forelse($infos as $info)
        <li><img src="{{asset('store/images/'.$info->file_uri)}}"></li>
        @empty
        <h3>No data.</h3>
        @endforelse
    </ul>
</body>

</html>