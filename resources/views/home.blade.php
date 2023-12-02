<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserCRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    @auth
    <div class="container mt-5">
        <h1>You are logged in!</h1>
        <form action="/logout" method="POST">
            @csrf
            <button type="submit" class="btn btn-danger">Logout</button>
        </form>

        <div class="border p-4 mt-4">
            <h2>Create a new post</h2>
            <form action="/create-post" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="text" placeholder="Title">
                </div>
                <div class="mb-3">
                    <textarea class="form-control" name="body" placeholder="Body content..."></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Save post</button>
            </form>
        </div>

        <div class="border p-4 mt-4">
            <h2>All posts</h2>
            @foreach ($posts as $post)
                <div class="bg-light p-3 mt-3">
                    <h3>{{$post['text']}} --> {{$post->user->name}}</h3>
                    {{$post['body']}}
                    <p><a href="/edit-post/{{$post->id}}" class="btn btn-warning">Edit post</a></p>
                    <form action="/delete-post/{{$post->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete Post</button>
                    </form>
                </div>
            @endforeach
        </div>
    </div>
    @else
    <div class="container mt-5">
        <div class="border p-4">
            <h1>Register</h1>
            <form action="/register" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="name" placeholder="Name">
                </div>
                <div class="mb-3">
                    <input type="text" class="form-control" name="email" placeholder="Email">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Register</button>
            </form>
        </div>
        <div class="border p-4 mt-4">
            <h1>Login</h1>
            <form action="/login" method="POST">
                @csrf
                <div class="mb-3">
                    <input type="text" class="form-control" name="loginname" placeholder="Name">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control" name="loginpassword" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>
    </div>
    @endauth

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
