<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Directive & Form</title>
</head>

<body>

    <!-- 1. Cetak Data -->
    <h1>{{ $username }}</h1>
    <p>Waktu Login: {{ $last_login }}</p>

    <hr>

    <!-- Form Pertanyaan -->
    <h5 class="card-title">Form Pertanyaan</h5>
    <form action="{{ route('question.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama">
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>
        <div class="mb-3">
            <label for="pertanyaan" class="form-label">Pertanyaan</label>
            <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
    </form>

</body>

</html>