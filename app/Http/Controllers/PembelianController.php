<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Supplier;
use App\Models\Pembelian;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Yajra\Datatables\Datatables;

class PembelianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $purchase_lists = DB::table('pembelians')
            ->join('barangs', 'pembelians.barang_id', '=', 'barangs.id')
            ->join('suppliers', 'barangs.supplier_id', '=', 'suppliers.id')
            ->select(['pembelians.id', 'pembelians.keterangan_permintaan', 'pembelians.jumlah_barang', 'pembelians.total_harga', 'barangs.barang_name', 'barangs.harga_beli', 'suppliers.name']);
            
            return Datatables::of($purchase_lists)
            ->addColumn('details_url', function ($purchase_list) {
                return url('http://127.0.0.1:8000/transactions/purchases/show/' . $purchase_list->id);
            })
            ->make(true);
        }
        
        return view('pembelian.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $barang_list = Barang::all();
        return view('pembelian.form', compact('barang_list'));
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
            'keterangan_permintaan' => 'nullable',
		];

		$dataInput = $request->only(
            'barang_id', 
            'jumlah_barang', 
            'keterangan_permintaan'
        );

		// Lakukan validasi
		$validator = Validator::make($dataInput, $rules, $messages);

		// Redirect jika gagal validasi
		if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

		if (!Pembelian::create($dataInput)) {
			return back()->with('notification_danger_store', 'Data can\'t be saved. Please try again! Thank you.');
		}
		return redirect()->route('purchases.index')->with('notification_success_store', 'Data has been successfully saved. Thank you.');
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
