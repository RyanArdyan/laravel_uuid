<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // skema buat table students, jalankan fungsi berikut, cetak biru $meja
        Schema::create('students', function (Blueprint $table) {
            // UUID digunakan jika Anda takut pengguna bisa mendapatkan semua item (scrape) hanya dengan mengiterasi id di url
            // primary() berarti menambahkan kunci utama
            // $meja->uuid('murid_id')->utama
            $table->uuid('student_id')->primary();
            // tipe data string, column name
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
