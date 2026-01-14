<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum Modul 3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-4">Praktikum</h1>

        
        <h2>List dan Link</h2>
        <ul class="list-group mb-4">
            @foreach($links as $link)
            <li class="list-group-item"><a href="{{ $link['url'] }}">{{ $link['name'] }}</a></li>
            @endforeach
        </ul>

        <!-- Grid System -->
        <h2>Grid System</h2>
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kartu 1</h5>
                        <p class="card-text">Isi Konten</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kartu 2</h5>
                        <p class="card-text">Isi Konten</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Kartu 3</h5>
                        <p class="card-text">Isi Konten</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table -->
        <h2>3. Tabel Data</h2>
        <table class="table table-striped table-bordered mb-4">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($users as $user)
                <tr>
                    <td>{{ $user['id'] }}</td>
                    <td>{{ $user['name'] }}</td>
                    <td>{{ $user['email'] }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>



    <h2>4. Formulir</h2>
        <form action="/submit-form" method="post">
            @csrf
            <div class="form-group mb-3">
                <label for="name">Nama</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama">
            </div>
            <div class="form-group mb-3">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email">
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>