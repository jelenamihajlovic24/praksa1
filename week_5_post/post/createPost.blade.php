<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>
<body>
<h1>Make a post - comment!</h1>
    <form method="POST" action="/create">
   {{csrf_field()}}
        Title: <input name= "title" type="text"><br/>
        <br/>
        <textarea name="content" type="text">Comment!</textarea>
        <button type="submit">Sačuvaj</button>
        
    </form>

    <a href="/posts">
    <button type="submit" autofocus>Back</button>
    </a>
</body>
</html>