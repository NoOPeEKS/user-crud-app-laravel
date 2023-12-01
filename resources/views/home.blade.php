<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserCRUD</title>
</head>
<body>
    @auth
    <h1>You are logged in!</h1>
    <form action="/logout" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>

    <div style="border: 3px solid black;">
        <h2>Create a new post</h2>
        <form action="/create-post" method="POST">
            @csrf
            <input type="text" name="text" placeholder="title">
            <textarea name="body" placeholder="Body content..."></textarea>
            <button type="submit">Save post</button>
        </form>
    </div>

    <div style="border: 3px solid black;">
        <h2>All posts</h2>
        @foreach ($posts as $post)
            <div style="background-color: gray; padding: 10px; margin: 10px;">
                <h3>{{$post['text']}} --> {{$post->user->name}}</h3>
                {{$post['body']}}
                <p><a href="/edit-post/{{$post->id}}">Edit post</a></p>
                <form action="/delete-post/{{$post->id}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button>Delete Post</button>
                </form>
            </div>
        @endforeach
    @else
     <div style="border: 3px solid black;">
        <h1>Register</h1>
        <form action="/register" method="POST">
            @csrf
            <input type="text" name="name" placeholder="name">
            <input type="text" name="email" placeholder="email">
            <input type="password" name="password" name="password" placeholder="password">
            <button type="submit">Register</button>
        </form>
    </div>
    <div style="border: 3px solid black;">
        <h1>Login</h1>
        <form action="/login" method="POST">
            @csrf
            <input type="text" name="loginname" placeholder="name">
            <input type="password" name="loginpassword" name="password" placeholder="password">
            <button type="submit">Login</button>
        </form>
    </div>
    @endauth
</body>
</html>