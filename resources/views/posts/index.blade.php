<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>This is the posts file</h2>
    @foreach ($posts as $post)
    <h3>{{ $post->title }}</h3>
    {{-- <p>{{ optional($post->user)->name }}</p> --}}
    <p>{{ $post->user->name }}</p>
    @endforeach


    <h2>User data</h2>

    <div>
        @foreach ($users as $user)
            <h2>{{ $user->name }}</h2>
            @foreach ($user->posts as $post)
                <p>{{ $post->title }}</p>
            @endforeach 
        @endforeach
    </div>

</body>
</html>