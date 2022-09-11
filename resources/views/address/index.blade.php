<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>this is the address page</h1>

    <ul>
       
        @foreach($address as $adrs)
        {{-- <li> Name is {{ $adrs->name }} </li> --}}
        <p>user is  {{ $adrs->user->name }} </p>

        {{-- @foreach ($adrs->addresses as $item)
            <li> {{ $item->name }} </li>
        @endforeach --}}
        @endforeach
    </ul>

    <div>
        <h1>users relationship form user table</h1>
        <ul>
            @foreach ($users as $item)
                <p>{{ $item->name }} is the user</p>
                @foreach ($item->addresses as $address)    
                    <li> {{ $address->name }} </li>
                @endforeach
            @endforeach
        </ul>
    </div>
</body>

</html>