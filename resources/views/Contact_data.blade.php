<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register_data</title>
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}.css">
</head>


<body>
    <div class="counter">

        <h1>Register Succsesfully ...</h1>
        <h2>Register data :</h2>
        <ul>
            <li>Name : {{ $name }}</li>
            <li>Email Adress : {{ $email }}</li>
            <li>Subject : {{ $subject }}</li>
            <li>Message :{{ $message }}</li>
        </ul>
    </div>
</body>

</html>
