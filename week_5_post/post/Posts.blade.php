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
                <a href="update/{id}{{$post->id}}/edit">
                    <button type="button" autofocus> Edit/update user </button>
                </a>
            </td>
            <td>
                <a href="like/{{$posts->id}}/like">
                    <button type="submit" autofocus> Like </button>
                </a> 
            </td>
            <td>
                <form method="POST" action="delete/{id}{{$posts->id}}">
                    @method('DESTROY')
                    @csrf
                    <button type="button" autofocus> Delete</button>
                </form>
            </td>
        </tr>
        @endforeach  
</table>
<br/>

<a href="/create">
    <button type="button" autofocus> Add a new Comment </button>
</a>
