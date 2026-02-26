<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All books</h1>
    @foreach ($books as $book)
        <h2>{{$book->title}}</h2>
    @endforeach
</body>
</html>