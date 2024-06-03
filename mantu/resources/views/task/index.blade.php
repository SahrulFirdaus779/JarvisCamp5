<!doctype html>
<html lang="en">
    @include('partials._head')
<body>
    @include('partials._nav')
    <div id="layoutSidenav">
        @include('partials._sidebar')
        <div id="layoutSidenav_content">
            <main>
                <div class="container">
                    <h1 class="text-center my-4">Daftar Tugas</h1>
                    <hr>
            
                    <div class="row">
                        @foreach ($tasks as $task)
                            <div class="col-12 col-md-4">
                                <div class="card mt-2">
                                    <div class="card-body">
                                        <h4 class="card-title">{{ $task['name'] }}</h4>
                                        <small>Deadline: {{ \Carbon\Carbon::parse($task['deadline'])->format('d F Y') }}</small><br>
                                        <span class="badge bg-warning">{{ $task['status'] }}</span>
                                        <p>{{ Str::limit($task['description'], 40, '...') }}</p>
            
                                        <div class="mt-2">
                                            <a href="{{ route('tasks.show', ['id' => $task['id']]) }}" class="btn btn-warning">Detail</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </main>

            @include('partials._footer')
        </div>
    </div>
    @include('partials._scripts')
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
