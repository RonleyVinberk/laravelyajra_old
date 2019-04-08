<?php

namespace App\Http\Controllers;

use App\Models\Kupon;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Yajra\Datatables\Datatables;

class KuponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $kupon_lists = Kupon::select(['id', 'kupon_kode', 'jumlah']);

            return Datatables::of($kupon_lists)
            ->addColumn('details_url', function ($kupon_list) {
                return url('http://127.0.0.1:8000/masterdata/coupon/show/' . $kupon_list->id);
            })
            ->make(true);
        }
        
        return view('kupon.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kupon.form');
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
            'kupon_kode' => 'nullable',
			'jumlah' => 'required|unique:kupons'
		];

        $dataInput = $request->only('jumlah', 'kupon_kode');
        $dataInput['kupon_kode'] = Str::random(40);

		// Lakukan validasi
		$validator = Validator::make($dataInput, $rules, $messages);

		// Redirect jika gagal validasi
		if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

		if (!Kupon::create($dataInput)) {
			return back()->with('notification_danger_store', 'Data can\'t be saved. Please try again! Thank you.');
		}
		return redirect()->route('coupons.index')->with('notification_success_store', 'Data has been successfully saved. Thank you.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $kupon_detail = Diskon::find($id)->posts();

        return Datatables::of($kupon_detail)->make(true);
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
