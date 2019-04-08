<?php

namespace App\Http\Controllers;

use App\Models\Kupon;
use App\Models\Diskon;
use App\Models\Barang;
use App\Models\Supplier;
use App\Models\CategoryBarang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Yajra\Datatables\Datatables;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $item_lists = DB::table('barangs')
            ->join('category_barangs', 'barangs.category_barang_id', '=', 'category_barangs.id')
            ->join('suppliers', 'barangs.supplier_id', '=', 'suppliers.id')
            ->select(['barangs.id', 'barangs.barang_name', 'barangs.price', 'barangs.information', 'barangs.stock', 'barangs.harga_beli', 'category_barangs.category_barang_name', 'suppliers.name']);
            
            return Datatables::of($item_lists)
            ->addColumn('details_url', function ($item_list) {
                return url('http://127.0.0.1:8000/masterdata/items/show/' . $item_list->id);
            })
            ->make(true);
        }
        
        return view('item.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kupon_list = Kupon::all();
        $diskon_list = Diskon::all();
        $supplier_list = Supplier::all();
        $cat_barang_list = CategoryBarang::all();
        return view('item.form', compact('kupon_list', 'diskon_list', 'supplier_list', 'cat_barang_list'));
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
            'barang_name' => 'required|unique:barangs',
            'price' => 'required',
            'information' => 'required',
            'stock' => 'required',
            'harga_beli' => 'required',
            'kupon_id' => 'nullable',
            'diskon_id' => 'nullable',
            'supplier_id' => 'required',
            'category_barang_id' => 'required',
		];

		$dataInput = $request->only(
            'price', 
            'barang_name', 
            'information', 
            'stock', 
            'harga_beli', 
            'kupon_id', 
            'diskon_id', 
            'supplier_id', 
            'category_barang_id'
        );

		// Lakukan validasi
		$validator = Validator::make($dataInput, $rules, $messages);

		// Redirect jika gagal validasi
		if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

		if (!Barang::create($dataInput)) {
			return back()->with('notification_danger_store', 'Data can\'t be saved. Please try again! Thank you.');
		}
		return redirect()->route('items.index')->with('notification_success_store', 'Data has been successfully saved. Thank you.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item_detail = Barang::find($id)->posts();

        return Datatables::of($item_detail)->make(true);
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
