<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Directive</title>
</head>

<body>

    <!-- 1. Cetak Data -->
    <h1>{{ $username }}</h1>
    <p>Waktu Login: {{ $last_login }}</p>

    <hr>

    <!-- 2. Perulangan Foreach -->
    <h3>Daftar Pengguna:</h3>
    @foreach ($users as $user)
    <p>Ini adalah pengguna {{ $user->id }} - Nama: {{ $user->name }}</p>
    @endforeach

    <hr>

    <!-- 3. Kondisi (If-Else) -->
    <h3>Status Rekaman:</h3>
    @if (count($records) === 1)
    <p>Saya punya satu rekaman!</p>
    @elseif (count($records) > 1)
    <p>Saya punya banyak rekor!</p>
    @else
    <p>Saya tidak punya catatan apa apa!</p>
    @endif

    <!-- Contoh Code Comment Blade (Komentar ini tidak akan tampil di HTML browser) -->
    {{-- Ini adalah komentar menggunakan Blade Directive --}}
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