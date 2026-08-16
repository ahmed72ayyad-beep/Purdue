<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register_data</title>
    <link rel="stylesheet" href="{{ asset('css/mystyle.css') }}">
</head>

<body>
    <div class="counter">

        <h1>Checkout Succsesfully ...</h1>
        <h2>Checkout data :</h2>
        <ul>
            <li>fname : <span>{{ $fname }}</span></li>
            <li>lname : <span>{{ $lname }}</span></li>
            <li>email : <span>{{ $email }}</span></li>
            <li>country_name : <span>{{ $country_name }}</span></li>
            <li>province : <span>{{ $province }}</span></li>
            <li>address1 : <span>{{ $address1 }}</span></li>
            <li>address2 : <span>{{ $address2 }}</span></li>
            <li>Postal : <span>{{ $Postal }}</span></li>
            <li>company_name : <span>{{ $company_name }}</span></li>
        </ul>
    </div>
</body>

</html>
