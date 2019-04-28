<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kupon;
use App\Models\Diskon;
use App\Models\Customer;
use App\Models\Penjualan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Yajra\Datatables\Datatables;

class PenjualanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $sales_lists = DB::table('penjualans')
            ->join('barangs', 'penjualans.barang_id', '=', 'barangs.id')
            ->join('kupons', 'penjualans.kupon_id', '=', 'kupons.id')
            ->join('customers', 'penjualans.customer_id', '=', 'customers.id')
            ->select(['penjualans.id', 'penjualans.nomor_penjualan', 'penjualans.jumlah_barang', 'penjualans.jumlah_harga', 'barangs.barang_name', 'barangs.price', 'customers.name', 'kupons.jumlah']);
            
            return Datatables::of($sales_lists)
            ->addColumn('details_url', function ($sales_list) {
                return url('http://127.0.0.1:8000/transactions/sales/show/' . $sales_list->id);
            })
            ->make(true);
        }
        
        return view('penjualan.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kupon_list = Kupon::all();
        $barang_list = Barang::all();
        $diskon_list = Diskon::all();
        $customer_list = Customer::all();
        return view('penjualan.form', compact('kupon_list', 'diskon_list', 'customer_list', 'barang_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = [
			"required" => ':attribute can\'t be blank!'
		];

		$rules = [
            'barang_id' => 'required',
            'jumlah_barang' => 'required',
            'kupon_id' => 'nullable',
            'diskon_id' => 'nullable',
            'customer_id' => 'required',
		];

		$dataInput = $request->only(
            'barang_id', 
            'jumlah_barang', 
            'kupon_id', 
            'diskon_id', 
            'customer_id'
        );
        $dataInput['nomor_penjualan'] = "IB-S".rand();

		// Lakukan validasi
		$validator = Validator::make($dataInput, $rules, $messages);

		// Redirect jika gagal validasi
		if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

		if (!Penjualan::create($dataInput)) {
			return back()->with('notification_danger_store', 'Data can\'t be saved. Please try again! Thank you.');
		}
		return redirect()->route('sales.index')->with('notification_success_store', 'Data has been successfully saved. Thank you.');
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
        //
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
        //
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
