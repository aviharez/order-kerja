<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Executor extends Model
{
    protected $connection = 'mysql';
    public $timestamps = false;
    public $incrementing = false;

    public function orders() {
        return $this->hasMany(Order::class, 'executor_id', 'id');
    }

    public function pegawais() {
        return $this->belongsTo(Pegawai::class, 'pic', 'no_badge');
    }

}
