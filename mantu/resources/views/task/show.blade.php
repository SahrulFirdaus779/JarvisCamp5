<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Detail Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h1 class="text-center my-4">{{ $task['name'] }}</h1>
        <hr>

        <div class="card mt-2">
            <div class="card-body">
                <h4 class="card-title">{{ $task['name'] }}</h4>
                <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</small><br>
                <span class="badge bg-warning">{{ $task['status'] }}</span>
                <p class="mt-3">{{ $task['description'] }}</p>

                <div class="mt-2">
                    <a href="{{ url('/tasks') }}" class="btn btn-secondary">Kembali ke Daftar Tugas</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
