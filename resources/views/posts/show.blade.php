<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>{{$post->title}}</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <h1>{{$post->title}}</h1>
    <p>{{$post->body}}</p>

    <h2>Comments</h2>
    <form method="post" action="/posts/{{$post->id}}/comments">
        {{csrf_field()}}
        <p><textarea name="body" value="" ></textarea></p>
        <p><input type="submit" value="add comment" /></p>
    </form>
    <ul>
    @forelse($post->comments as $comment)
        <li>{{$comment->body}}</li>
    @empty
        <li>post is not exists</li>
    @endforelse
    </ul>
</html>
