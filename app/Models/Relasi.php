<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Relasi extends Model
{
    use HasFactory;

    protected $table = 'relasis';
    protected $fillable = ['kode_gejala', 'kode_penyakit'];
    

    public function dataPenyakit()
    {
        return $this->belongsTo(TKModel::class, 'relasis', 'kode', 'kode_penyakit');
    }
    public function dataGejala()
    {
        return $this->belongsToMany(Gejala::class,'relasis', 'kode_gejala', 'kode_gejala',);
    }

    public function penyakit()
    {
        return $this->belongsTo(TKModel::class);
    }
    public function gejala()
    {
        return $this->belongsTo(Gejala::class, 'kode_gejala');
    }
}
