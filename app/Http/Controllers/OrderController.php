<?php

namespace App\Http\Controllers;
use App\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $result = Order::with(['produk','user'])
                ->where('status','=','Terkirim')
                ->get();
                return view('admin.order_terkirim',compact('result'));
             
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        $data = Order::with(['produk','user'])
        ->where('status','Proses Order')
        ->paginate(5);
        $result = [
            'data' => $data
        ];
        return view('order',$result);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $data =  DB::table('orders')
        ->whereExists(function ($query) {
            $query->select(DB::raw(1))
                  ->from('excel_imports')
                  ->whereRaw('orders.orderid = excel_imports.orderid');
        })
        ->update(['status' => 'Terkirim']);
        return redirect('/order');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
