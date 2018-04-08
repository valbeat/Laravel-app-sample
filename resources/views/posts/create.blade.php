<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>New Post</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <h1>New Post</h1>
    <form method="post" action="/posts">
        {{csrf_field()}}
        <p><input type="text" name="title" value="" /></p>
        <p><textarea name="body" value="" ></textarea></p>
        <p><input type="submit" value="create" /></p>
    </form>
</html>
