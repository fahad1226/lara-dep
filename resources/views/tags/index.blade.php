<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>belongs to many relationship of post and tags</h1>
    <div>
        @foreach ($posts as $post)
            <h3>{{ $post->title }}</h3>
            <span>{{ $post->user->name }}</span>
            @foreach ($post->tags as $tag)
                <p>{{ $tag->name }}</p>
            @endforeach
        @endforeach
    </div>

    <h4>Tag relationship with posts</h4>
    @foreach ($tags as $tag)
        <h3>Tag is {{ $tag->name }} </h3>
       
        @foreach ($tag->posts as $post)
            <p> {{ $post->title }} </p>    
        @endforeach
    @endforeach
</body>
</html>