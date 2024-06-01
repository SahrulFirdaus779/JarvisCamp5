<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar Tugas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <h1 class="text-center">Daftar Tugas</h1>
    <hr>
    <div class="row">
        @foreach ($tasks as $task)
            <div class="col-12 col-md-4">
                <div class="card mt-2">
                    <div class="card-body">
                        <h4 class="card-title">{{ $task['name'] }}</h4>
                        <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->format('d-F-Y') }}</small> <br>
                        <span class="badge bg-warning">{{ $task['status'] }}</span>
                        <p class="card-text">{{ \Illuminate\Support\Str::limit($task['description'], 100) }}</p>
                        <div class="btn btn-primary" onclick="toggleDescription('desc-{{ $loop->index }}')">Detail</div>
                        <div id="desc-{{ $loop->index }}" class="card-text mt-2" style="display: none;">{{ $task['description'] }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    function toggleDescription(id) {
        var desc = document.getElementById(id);
        if (desc.style.display === "none") {
            desc.style.display = "block";
        } else {
            desc.style.display = "none";
        }
    }
</script>
</body>
</html>
