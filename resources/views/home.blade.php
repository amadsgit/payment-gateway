<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Toko durian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="my-3">Toko Durian</h1>
        <div class="col-12 d-flex">
            {{-- <div class="row d-flex"> --}}
                <div class="card mx-2" style="width: 20rem;">
                    <img src="{{asset('assets/images/durian.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Durian Lokal</h5>
                    <p class="card-text">Durian Lokal, rasanya manis dan ada pahit pahitnya.</p>
                    <form action="/checkout" method="POST">
                        @csrf
                        <div class="mb-3">
                            {{-- <label for="qty" class="form-label">Mau Pesan Berapa?</label> --}}
                            <input type="number" class="form-control" id="qty" name="qty" placeholder="jumlah yang dipesan" required>
                        </div>
                        <div class="mb-3">
                            {{-- <label for="name" class="form-label">Nama Pelanggan</label> --}}
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama anda" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            {{-- <label for="phone" class="form-label">No Telp</label> --}}
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukan nomor hp anda" required>
                        </div>
                        <div class="mb-3">
                            {{-- <label for="address" class="form-label">Alamat</label> --}}
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Alamat" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Chekout</button>
                        </form>
                    </div>
                </div>
                <div class="card" style="width: 20rem;">
                    <img style="height:180px;" src="{{asset('assets/images/musangking.jpeg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">Durian Musangking</h5>
                    <p class="card-text">Durian Musangking, rasanya manis dan ada pahit pahitnya.</p>
                    <form action="/checkout" method="POST">
                        @csrf
                        <div class="mb-3">
                            {{-- <label for="qty" class="form-label">Mau Pesan Berapa?</label> --}}
                            <input type="number" class="form-control" id="qty" name="qty" placeholder="jumlah yang dipesan" required>
                        </div>
                        <div class="mb-3">
                            {{-- <label for="name" class="form-label">Nama Pelanggan</label> --}}
                            <input type="text" class="form-control" id="name" name="name" placeholder="Masukan nama anda" required autocomplete="off">
                        </div>
                        <div class="mb-3">
                            {{-- <label for="phone" class="form-label">No Telp</label> --}}
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Masukan nomor hp anda" required>
                        </div>
                        <div class="mb-3">
                            {{-- <label for="address" class="form-label">Alamat</label> --}}
                            <textarea class="form-control" name="address" id="address" rows="3" placeholder="Alamat" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Chekout</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>