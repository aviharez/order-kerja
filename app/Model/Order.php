<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    protected $connection = 'mysql';

    protected $fillable = [
        'employee_id','unit','priority','kd_mesin','description',
        'executor_id','category','penghentian','ketentuan','status'];

    public function executors() {
        return $this->belongsTo(Executor::class, 'executor_id', 'id');
    }

    public function pegawais() {
        return $this->belongsTo(Pegawai::class, 'employee_id', 'no_badge');
    }
}
