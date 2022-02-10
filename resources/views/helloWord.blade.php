{{-- @php
 dd($ciao)    
@endphp --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
    @foreach ($ciao as $element)
        <li>{{$element}}</li>
    @endforeach
        <li>{{$swag}}</li>
    </ul>
</body>
</html>