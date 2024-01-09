<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script type="text/javascript"
		src="{{config('midtrans.snap_url')}}"
    data-client-key="{{config('midtrans.client_key')}}"></script>

    <title>Detail Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-3">Durianes Subang</h1>
        <div class="col-12 d-flex">
            <div class="card mx-3" style="width: 30rem;">
                <img src="{{asset('assets/images/durian.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Detail Pesanan</h5>
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
                </table>
                <button class="btn btn-primary mt-3" id="pay-button">Bayar Sekarang</button>
                </div>
            </div>
            <div id="snap-container" style="width:400px;"></div>
        </div>
    </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script type="text/javascript">
        // For example trigger on button clicked, or any time you need
        var payButton = document.getElementById('pay-button');
        payButton.addEventListener('click', function () {
          // Trigger snap popup. @TODO: Replace TRANSACTION_TOKEN_HERE with your transaction token.
          // Also, use the embedId that you defined in the div above, here.
          window.snap.embed('{{$snapToken}}', {
            embedId: 'snap-container',
            onSuccess: function (result) {
              /* You may add your own implementation here */
              window.location.href = '/invoice/{{$order->id}}';
              alert("pembayaran berhasil!"); console.log(result);
            },
            onPending: function (result) {
              /* You may add your own implementation here */
              alert("menunggu pembayaran Anda!"); console.log(result);
            },
            onError: function (result) {
              /* You may add your own implementation here */
              alert("pembayaran gagal!"); console.log(result);
            },
            onClose: function () {
              /* You may add your own implementation here */
              alert('Anda menutup popup tanpa menyelesaikan pembayaran');
            }
          });
        });
    </script>
</body>
</html>