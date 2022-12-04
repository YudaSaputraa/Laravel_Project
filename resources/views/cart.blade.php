<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>
</head>

<body>




    <a>Product Name : {{ $request->session()->get('productName') }}</a><br>
    <a>Product Price : {{ $request->session()->get('productprice') }}</a><br>
    <a>Jumlah : {{ $request->session()->get('jumlah') }}</a><br>
    <a>Total Belanja : {{ $request->session()->get('total') }}</a>

</body>

</html>
