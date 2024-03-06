<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{route('search)}}" method="post">
        @csrf
        <input type="text" placeholder="Type name to search" name="name" value="{{old(name)}}">
        <input type="submit" value="">
    </form>
</body>

</html>