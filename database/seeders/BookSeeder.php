<?php

namespace Database\Seeders;

use App\Models\Book;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Book::create([
            'title' => 'Disforia Inersia',
            'author' => 'Wira Nagara',
            'publisher' => 'Wira Nagara & Dzawin Nur',
            'year' => '2019',
            'isbn' => '987-0-04-875672-4', 
            'cover' => 'https://marketplace.canva.com/EAFIPWUqNwY/1/0/1003w/canva-biru-putih-modern-sampul-buku-catatan-Tv1PVfS5Llo.jpg',
            'description' => 'Disforia Inersia adalah buku yang menceritakan perayaan patah hati',
            'category' => 'Puisi'
        ]);
    }
}
