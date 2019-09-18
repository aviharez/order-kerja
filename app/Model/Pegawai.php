<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    protected $connection = 'mysql2';
    public $incrementing = false;
    public $timestamps = false;

    public function orders() {
        return $this->hasMany(Order::class, 'employee_id', 'no_badge');
    }

    public function executors() {
        return $this->hasMany(Executor::class, 'pic', 'no_badge');
    }

}
