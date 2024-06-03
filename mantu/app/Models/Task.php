<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    // Mendefinisikan data tugas
    protected static $tasks = [
        [
            'id' => 1,
            'name' => 'Bahasa Inggris',
            'deadline' => '2024-05-29',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan tugas bahasa inggris chapter 3 di buku LKS halaman 10-12.',
        ],[
            'id' => 2,
            'name' => 'Matematika',
            'deadline' => '2024-05-30',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan soal-soal matematika di buku PR halaman 20-25.',
        ],[
            'id' => 3,
            'name' => 'Fisika',
            'deadline' => '2024-05-31',
            'status' => 'Belum Selesai',
            'description' => 'Mengerjakan soal-soal fisika di buku PR halaman 30-35.',
        ], [
            'id' => 4,
            'name' => 'Kimia',
            'deadline' => '2024-06-01',
            'status' => 'Belum Selesai',
            'description' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sequi unde numquam sit minima dolorem placeat dolores molestias maxime earum, dolore consectetur officiis delectus explicabo cupiditate aliquam fugiat, magni magnam necessitatibus soluta eveniet. Dolor quibusdam nesciunt sint inventore dolore praesentium esse ab sapiente incidunt? Non pariatur officiis labore, natus mollitia fuga assumenda quia molestiae facere nemo temporibus expedita excepturi incidunt ratione accusantium eum vero? Sit error necessitatibus, minima iure corrupti nemo voluptas dignissimos sunt quos earum neque, exercitationem illo molestias nostrum est! Similique corporis, non rem quos eos animi iure incidunt.'
        ]
    ];

    // method untuk mendapatkan semua data tugas
    public static function getAll(){
        return self::$tasks;
    }
}
