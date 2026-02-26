<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Add a book</h1>
    <form action="/books/add" method="post">
        @csrf

        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="author">Author</label>
            <input type="text" name="author" id="author">
        </div>
        <div>
            <label for="title">Title</label>
            <input type="text" name="title" id="title">
        </div>
        <div>
            <label for="date">Released at</label>
            <input type="text" name="date" id="date">
        </div>
        <div>
            <label for="description">Description</label>
            <textarea name="description" id="description"></textarea>
        </div>
        <div>
            <button type="submit">Confirm</button>
        </div>
    </form>
</body>
</html>