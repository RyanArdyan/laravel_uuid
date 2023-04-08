<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // nama table nya adalah students, default nya adaalh jamak
    // lindungi $table = 'murids'
    protected $table = 'students';
    // default atau bawwan dari primay key nya adalah id
    // lindungi $kunciUtama = 'murid_id'
    protected $primaryKey = 'student_id';
    // jadi untuk buat data dan update data secara massal
    // lindung $penjaga berisi array
    protected $guarded = [];

    // getIncrementing() artinya apakah ID bertambah? aku mengatur nya ke false
    // publik fungsi mendapatkanPeningkatan()
    public function getIncrementing()
    {
        // kembalikan salah;
        return false;
    }

    // getKeyType adalah Dapatkan jenis kunci yang bertambah secara otomatis.
    // publik fungsi dapatkanKunciTipe
    public function getKeyType()
    {
        // karena column student_id atau primary key nya akan berisi string
        return 'string';
    }

}
