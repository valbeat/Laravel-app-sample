<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>Posts</title>
        <link rel="stylesheet" href="/css/app.css">
    </head>
    <h1>Posts</h1>
    <p><a href="posts/create">create</a></p>
    <ul>
        @forelse($posts as $post)
            <li><a href="posts/{{$post->id}}">{{$post->title}}</a>
                 <a href="posts/{{$post->id}}/edit">[edit]</a>
                 <a href="#" class="del-btn" data-id="{{$post->id}}">[x]</a></li>
                 <form method="post" action="posts/{{$post->id}}" id="form_{{$post->id}}">
                    {{csrf_field()}}
                    {{method_field('delete')}}
                 </form>
        @empty
            <li>post is not exists</li>
        @endforelse

    </ul>
    <script>
        (function() {
            'use strict';
            const buttons = document.getElementsByClassName('del-btn');
            for (let button of buttons) {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    if (confirm('Are you sure?')) {
                        document.getElementById('form_' + this.dataset.id).submit();
                    }
                });
            }
        })();
    </script>
</html>