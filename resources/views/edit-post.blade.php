<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UserCRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
   <div class="container mt-5">
       <h1>Edit Post</h1> 
       <form action="/edit-post/{{$post->id}}" method="POST">
           @csrf
           @method('PUT')
           <div class="mb-3">
               <input type="text" class="form-control" name="text" value="{{$post->text}}">
           </div>
           <div class="mb-3">
               <textarea class="form-control" name="body">{{$post->body}}</textarea>
           </div>
           <button type="submit" class="btn btn-primary">Save</button>
       </form>
   </div>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
