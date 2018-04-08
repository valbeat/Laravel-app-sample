<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Edit Post</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <h1>Edit Post</h1>
    <form method="post" action="/posts/{{$post->id}}">
        {{csrf_field()}}
        {{method_field('patch')}}
        <p><input type="text" name="title" value="{{$post->title}}" /></p>
        <p><textarea name="body">{{$post->body}}</textarea></p>
        <p><input type="submit" value="edit" /></p>
    </form>
</html>
