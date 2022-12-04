<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Detail</title>
</head>

<body>
    <form method="POST" action="{{ url('request/post-data') }}">
        <table border="1">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Supplier ID</th>
                <th>Category ID</th>
                <th>QuantityPerUnit ID</th>
                <th>Unit Price</th>
                <th>Units in Stock</th>
                <th>Units on Order</th>
                <th>Reorder Level</th>
                <th>Discontinue</th>
            </tr>
            @foreach ($detail as $produkdetail)
                <tr>
                    <td>{{ $produkdetail->ProductID }}</td>
                    <td>{{ $produkdetail->ProductName }}</td>
                    <td>{{ $produkdetail->SupplierID }}</td>
                    <td>{{ $produkdetail->CategoryID }}</td>
                    <td>{{ $produkdetail->QuantityPerUnit }}</td>
                    <td>{{ $produkdetail->UnitPrice }}</td>
                    <td>{{ $produkdetail->UnitsInStock }}</td>
                    <td>{{ $produkdetail->UnitsOnOrder }}</td>
                    <td>{{ $produkdetail->ReorderLevel }}</td>
                    <td>{{ $produkdetail->Discontinued }}</td>
                </tr>
                <tr>

                    <td colspan="10">Orders
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="hidden" value="{{ $produkdetail->ProductName }}" name="productName">
                        <input type="hidden" value="{{ $produkdetail->UnitPrice }}" name="price">
                        <input type="number" name="jumlah">
                        <input type="submit" value="Add to Cart">
                    </td>
                </tr>
            @endforeach
        </table>
    </form>
</body>

</html>
