<h1>Users</h1>
<table style="width:70%; border:1px solid black;">
    <tr>
        <th>Name</th>
        <th>Lastname</th>
        <th>Email</th>
        <th>Password</th>
    </tr>
    
    @foreach($users as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->lastname}}</td>
            <td>{{$user->email}}</td>
            <td>{{$user->password}}</td>
        </tr>
        <tr>
            <td>
                <a href="edit/{{$user->id}}">
                    <button type="button" autofocus> Edit/update user </button>
                </a>
            </td>
            <td>
                <a href="delete/{{$user->id}}">
                    <button type="button" autofocus> Delete user </button>
                </a>
            </td>
        </tr>
    @endforeach
</table>
<br/>

<a href="/register">
    <button type="button" autofocus> Go to register </button>
</a>
