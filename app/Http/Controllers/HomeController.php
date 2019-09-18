<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\Order;
use App\Model\Pegawai;
use App\Model\Executor;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $kd_biaya = substr($user->username, 3);
        $unit_name = $user->unit_name;
        $orders = Order::where('unit', $unit_name)->orderBy('id','desc')->take(6)->get();
        @$executor_id = Executor::where('kd_pusat_biaya', $kd_biaya)->get()[0]->id;
        $task = Order::where('executor_id', $executor_id)->where('status', 'Queue')->orderBy('id','desc')->take(6)->get();
        $waiting = Order::where('unit', $unit_name)->where('status', 'Waiting')->orderBy('id','desc')->get();
        $onprogress = Order::where('unit', $unit_name)->where('status', 'On Progress')->orderBy('id','desc')->get();
        $queue = Order::where('unit', $unit_name)->where('status', 'Queue')->orderBy('id','desc')->get();
        $finished = Order::where('unit', $unit_name)->where('status', 'Finished')->orderBy('id','desc')->get();
        return view('contents.home', compact('orders', 'task', 'waiting', 'onprogress', 'queue', 'finished'));
    }
    
}
