<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @forelse ($products as $product)
        <div>
            <h3>{{$product->name}}</h3>
            <h3>{{$product->short_description}}</h3>
            <h3>{{$product->price}} USD</h3>
        </div>
    @empty
        <h5>No data.</h5>
    @endforelse
</body>
</html>