<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CSV Example</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"/>
</head>
<body>
    <header>
        <nav>
<ul>
    <li><a href="{{route('import')}}">Import</a></li>
    <li><a href="{{route('export')}}">Export</a></li>
</ul>
        </nav>
    </header>
    <main>
        @forelse ($products as $product)
            <article>
                <head>
                    {{$product->name}}
                </head>
                {{$product->description}}
                <footer>
{{$product->price}}$
                </footer>
            </article>
        @empty
            <h3>No data.</h3>
        @endforelse
    </main>
</body>
</html>