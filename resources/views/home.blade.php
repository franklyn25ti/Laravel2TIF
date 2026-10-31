<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertanyaan</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Memanggil CSS Kustom Menggunakan Helper asset() -->
    <link rel="stylesheet" href="{{ asset('assets/css/custom-style.css') }}">
</head>

<body class="bg-dark p-2">

    <div class="bg-success-subtle text-dark p-2 rounded mb-3 d-flex align-items-center gap-2">
        <!-- Memanggil Gambar Logo Menggunakan Helper asset() -->
        <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" height="30">
        
        <!-- Menerapkan Class Font Kustom -->
        <span class="font-custom fw-bold fs-5">Form Pertanyaan</span>
    </div>

    <div class="card">
        <div class="card-body">
            <h5 class="card-title mb-3 font-custom">Form Pertanyaan</h5>

            <!-- Tampilkan Alert Flash Data (Opsional jika menggunakan session info) -->
            @if (session('info'))
                <div class="alert alert-info">
                    {{ session('info') }}
                </div>
            @endif

            <!-- Menampilkan Error Validasi -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('question.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="{{ old('email') }}">
                </div>

                <div class="mb-3">
                    <label for="pertanyaan" class="form-label">Pertanyaan</label>
                    <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="4">{{ old('pertanyaan') }}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
            </form>
        </div>
    </div>
</body>

</html>