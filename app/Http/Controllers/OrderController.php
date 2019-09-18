<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Model\Order;
use App\Model\Pegawai;
use App\Model\Executor;
use App\Model\Mailer;
use App\Mail\PokApprovement;
use App\Libs\EmailSender;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $kd_biaya = substr($user->username, 3);
        $unit_name = $user->unit_name;
        $orders = Order::where('unit', $unit_name)->orderBy('id','desc')->get();
        return View('contents.order.list', compact('orders'));
    }

    public function index_task() {
        $user = Auth::user();
        $kd_biaya = substr($user->username, 3);
        $executor_id = Executor::where('kd_pusat_biaya', $kd_biaya)->get()[0]->id;
        $orders = Order::where('executor_id', $executor_id)->where('status', 'Queue')->orderBy('id','desc')->get();
        $pegawai = Pegawai::where('kd_pusat_biaya', $kd_biaya)->get();
        return View('contents.task.list', compact('orders','pegawai'));
    }

    public function index_onprogress() {
        $user = Auth::user();
        $kd_biaya = substr($user->username, 3);
        $executor_id = Executor::where('kd_pusat_biaya', $kd_biaya)->get()[0]->id;
        $orders = Order::where('executor_id', $executor_id)->where('status', 'On Progress')->orderBy('id','desc')->get();
        return View('contents.task.onprogress', compact('orders'));
    }

    public function index_finished() {
        $user = Auth::user();
        $kd_biaya = substr($user->username, 3);
        $executor_id = Executor::where('kd_pusat_biaya', $kd_biaya)->get()[0]->id;
        $orders = Order::where('executor_id', $executor_id)->where('status', 'Finished')->orderBy('id','desc')->get();
        return View('contents.task.finished', compact('orders'));
    }

    public function index_approv() {
        $user = Auth::user();
        $kd_biaya = substr($user->username, 3, 8);
        $pic = Executor::where('kd_pusat_biaya', $kd_biaya)->get()[0]->pic; 
        $unit_name = $user->unit_name;
        $orders = Order::where('unit', $unit_name)->where('status', 'Waiting')->orderBy('id','desc')->get();
        $pegawai = Pegawai::where('no_badge', $pic)->get()[0]->nama;
        return View('approval.index', compact('orders', 'pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = Auth::user();
        $kd_biaya = substr($user->username, 3);
        $executor = Executor::all();
        $pegawai = Pegawai::where('kd_pusat_biaya', $kd_biaya)->get();
        return View('contents.order.new',compact('executor','pegawai'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "kd_mesin" => "required",
            "description" => "required"
        ]);
        $order = new Order([
            'employee_id' => $request->get('no_badge'),
            'unit' => $request->get('unit'),
            'priority' => $request->get('priority'),
            'kd_mesin' => $request->get('kd_mesin'),
            'description' => $request->get('description'),
            'executor_id' => $request->get('executor'),
            'category' => $request->get('category'),
            'penghentian' => $request->get('pop'),
            'ketentuan' => $request->get('ketentuan'),
            'status' => 'Waiting'
        ]);
            
        $order->save();

        $data = [
            'name' => "Syifa Nurzain",
            'email' => "elzainsyifa@gmail.com",
            'gender' => "Laki - laki",
            'address' => "Bandung",
            'phone' => "08765435151",
            'password' => "inipass"
        ];

        $sent = EmailSender::send($data, 'emails.approvement', 'Terdapat Order Baru', 'elzainsyifa@gmail.com', 'Syifa Nurzain');
        if($sent){
            return redirect('/order')->with(['_msg'=>'Permintaan berhasil diajukan','_e'=>'success']);
        } else {
            return redirect('/order')->with(['_msg'=>'Gagal mengirim email','_e'=>'error']);
        }

        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $crud = Order::find($id);

        return View('contents.task.list');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $order = Order::find($id);
        // $order->title = $request->get('title');
        // $order->save();
        // return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $order = Order::find($id);
        // $order->delete();
        // return redirect('/crud');
    }

    public function get_executor($category) {
        $executors = Executor::where('category',$category)->get(['id','nama']);
        return response()->json($executors);
    }

    public function detail_order($id) {
        $orderDetail = Order::find($id);
        return response()->json($orderDetail);
    }

    public function confirm_task($no_badge, $id) {
        $time = Carbon::now();
        $order = Order::find($id);
        $order->status = 'On Progress';
        $order->confirmed_by = $no_badge;
        $order->confirmed_at = $time->toDateTimeString();
        $order->save();
        return response()->json('success');
    }

    public function close_task(Request $req) {
        $order = Order::find($req->id);
        $order->status = 'Finished';
        $order->finished_at = $req->tanggal;
        $order->keterangan = $req->keterangan;
        $order->save();
        return redirect('/finished-task')->with(['_msg'=>'Task telah diselesaikan','_e'=>'success']);
    }
    
    public function approve($id) {
        $user = Auth::user();
        $kd_biaya = substr($user->username, 3, 8);
        $pic = Executor::where('kd_pusat_biaya', $kd_biaya)->get()[0]->pic;
        $time = Carbon::now();
        $order = Order::find($id);
        $order->status = 'Queue';
        $order->manager_id = $pic;
        $order->approved_at = $time->toDateTimeString();
        $order->save();
        return redirect('/approval')->with(['_msg'=>'Order telah di-approve','_e'=>'success']);;
        
    }

    public function reject_order(Request $req) {
        $order = Order::find($req->id);
        $order->status = 'Rejected';
        $order->keterangan = $req->keterangan;
        $order->save();
        if ($req->tujuan == 'apr') {
            return redirect('/approval');
        } else {
            return redirect('/task-list');
        }
    }

}
