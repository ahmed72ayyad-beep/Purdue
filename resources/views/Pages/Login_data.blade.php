<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register_data</title>
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}.css">
</head>
<style>

<body>
    <div class="counter">

        <h1>Login Succsesfully ...</h1>
        <h2>Login data :</h2>
        <ul>
            <li>user name :<span>
                    {{ $username }}
                </span>
            </li>
            <li>password :<span>
                    {{ $password }}
                </span>
            </li>
        </ul>
    </div>
</body>

</html>
