<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <a href="{{route('index')}}">BACK TO INDEX</a>
    <br>
    <form action="{{route('store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="file" name="file" placeholder="file">
        <input type="submit" value="send">
    </form>
</body>

</html>