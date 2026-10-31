<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Pertanyaan</title>
    <!-- Masukkan Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container mt-5" style="max-width: 600px;">
        <!-- Card Form Pertanyaan -->
        <div class="card shadow-sm">
            <div class="card-body">
                <h5 class="card-title mb-4">Form Pertanyaan</h5>

                <!-- Menampilkan Pesan Error Validasi -->
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
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
                        <input type="text" class="form-control" id="nama" name="nama" value="{{ old('nama') }}" placeholder="farhan">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="farhan@pcr.ac.id">
                    </div>
                    <div class="mb-3">
                        <label for="pertanyaan" class="form-label">Pertanyaan</label>
                        <textarea class="form-control" id="pertanyaan" name="pertanyaan" rows="3" placeholder="Tolong jelaskan bagaimana cara mendaftar di pcr ? ?">{{ old('pertanyaan') }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim Pertanyaan</button>
                </form>
            </div>
        </div>
    </div>

</body>

</html>