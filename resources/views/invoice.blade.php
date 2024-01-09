<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Durianes Subang</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-3">Durianes Subang</h1>
        <div class="col-12 d-flex">
            {{-- <div class="row d-flex"> --}}
                <div class="card mx-2" style="width: 60rem;">
                    {{-- <img src="{{asset('assets/images/durian.jpg')}}" class="card-img-top" alt="..."> --}}
                    <div class="card-body">
                    <h5 class="card-title">Detail Pesanan</h5><hr>
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td> : {{$order->name}}</td>
                        </tr>
                        <tr>
                            <td>No HP</td>
                            <td> : {{$order->phone}}</td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td> : {{$order->address}}</td>
                        </tr>
                        <tr>
                            <td>Qty</td>
                            <td> : {{$order->qty}}</td>
                        </tr>
                        <tr>
                            <td>Total Bayar</td>
                            <td> : {{$order->total_price}}</td>
                        </tr>
                        <tr>
                            <td>Status</td>
                            <td > : {{$order->status}}</td>
                        </tr>
                    </table>
                    <a href="/" class="btn btn-primary mt-3">Home</a href="">
                    <button class="btn btn-success mt-3">Print Invoice</button>
                </div>
                
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>