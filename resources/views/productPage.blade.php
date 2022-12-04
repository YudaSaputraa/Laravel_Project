<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Products</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>Product ID</th>
            <th>Product Name</th>
            <th>Unit Price</th>
        </tr>
        @foreach ($product as $produk)
        <tr>
            <td>{{$produk->ProductID}}</td>
            <td> <a href="/product/{{$produk->ProductID}}">{{$produk->ProductName}}</a></td>
            <td>{{$produk->UnitPrice}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>