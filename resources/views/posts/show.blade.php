<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Login </title>
    
</head>
<body>
	<div>
    <h2>Title-{{ $post->title }}</h2>
    <p><b>Content -</b>{{ $post->content }}</p>
    <p>Published: {{ $post->created_at }}</p>

    <div>
        <h2>comments</h2>
         @foreach ($blogPost->comments as $comment)
    <div>
        <strong> Name - {{ $comment->commenter_name }}</strong>
        <p>   Comment -{{ $comment->comment }}</p>
    </div>
      @endforeach

    </div>
    <br>
    <br>
    <form method="POST" action="{{ route('comments.store',$blogPost->id) }}">
    @csrf
    <div class="form-group">
        <label for="commenter_name">Your Name:</label>
        <input type="text" name="commenter_name" class="form-control" required input="text">
    </div>
    <br>
    <div class="form-group">
        <label for="comment">Comment:</label>
        <textarea  input="text" name="comment" class="form-control" required></textarea>
    </div>

    <br>
    <button type="submit" class="btn btn-primary">Submit Comment</button>
</form>
</div>

</body>
</html>
</body>
</html>
