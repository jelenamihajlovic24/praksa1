<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Post</title>
</head>

<body>
<h1>Edit YOUR post</h1>
<form method="POST" action="/posts/{{ $post->id }}">

    @csrf

    <p>Title:</p>
    <input type="text" name="title" placeholder="Title" required value="{{ $post->title }}">
    
    <p>Content:</p>
    <textarea type="text" name="content"placeholder="Content" required >{{ $post->content }}</textarea>

    <p><button type="submit">Update</button>
   
</form>
<a href="/posts">
    <button>Back</button>
</a>
    
</body>
</html>
