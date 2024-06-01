<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends Controller
{
    // mendapatkan dan menampilkan data tugas
    public function index()
    {
        // mendapatkan data tugas dari model
        $tasks = Task::getAll();

        // mengirim data tugas ke view
        return view('task.index', [
            'tasks' => $tasks
        ]);
    }
    
}
