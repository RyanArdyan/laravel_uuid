<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
// impor
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Illuminate\Support\Str;

class StudentSeeder extends Seeder
{
    // cara menjalankan kode ini adalah buka terminal lalu tulis php artisan db:seed --class=StudentSeeder
    public function run(): void
    {
        // Jika Anda ingin memotong seluruh tabel, yang akan menghapus semua catatan dari tabel dan mereset ID penambahan otomatis ke nol, Anda dapat menggunakan metode truncate:
        // DB::meja('murid')->memotong();
        DB::table('students')->truncate();

        // berisi array
        $data = ['tony', 'andy', 'any'];

        // lakukan pengulangan terhadap item atau barang dari array $data
        // untukSetiap($data sebagai $kunci)
        foreach($data as $value) {
            // tambahkan data ke table student
            Student::create([
                // Str::uuid() menghasilkan UUID (versi 4), kode ini di dapatkan dari helpers laravel
                'student_id' => Str::uuid(),
                // name akan diisi dengan 'tony', 'andy' dan 'any'
                'name' => $value
            ]);
        }
    }
}
