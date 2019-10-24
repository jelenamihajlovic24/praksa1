<h1>Users Posts</h1>
<table style="width:70%; border:1px solid black;">
    <tr>
        <th>Title</th>
        <th>Content</th>
        <th>Like</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    @foreach($posts as $post)
        <tr>
            <td>{{$post->title}}</td>
            <td>{{$post->content}}</td>
            <td>{{$post->likes}}</td> 
        </tr>
        <tr>
            <td>
                <a href="posts/edit/{{$post->id}}">
                    <button type="button" autofocus> Edit/update user </button>
                </a>
            </td>
            <td>
                <a href="posts/like/{{$post->id}}">
                    <button type="submit" autofocus> Like </button>
                </a> 
            </td>
            <td>
                <a href="posts/delete/{{$post->id}}">
                    <button type="submit" autofocus> Delete </button>
                </a> 
            </td>
        </tr>
    @endforeach  
</table>
<br/>

<a href="create">
    <button type="button" autofocus> Add a new Comment </button>
</a>
