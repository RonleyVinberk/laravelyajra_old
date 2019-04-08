<?php

namespace App\Http\Controllers;

use App\Models\Kupon;
use App\Models\Customer;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use Yajra\Datatables\Datatables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $customer_lists = Customer::select(['id', 'name', 'email', 'status', 'nomor_telepon', 'alamat']);

            return Datatables::of($customer_lists)
            ->addColumn('details_url', function ($customer_list) {
                return url('http://127.0.0.1:8000/masterdata/customers/show/' . $customer_list->id);
            })
            ->make(true);
        }
        
        return view('customer.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customer.form');
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
            'name' => 'required|unique:customers',
            'email' => 'nullable',
            'nomor_telepon' => 'required',
            'alamat' => 'required',
            'status' => 'nullable',
		];

        $dataInput = $request->only('name', 'email', 'nomor_telepon', 'alamat', 'status');
        $dataInput['status'] = 'Non Member';

		// Lakukan validasi
		$validator = Validator::make($dataInput, $rules, $messages);

		// Redirect jika gagal validasi
		if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

		if (!Customer::create($dataInput)) {
			return back()->with('notification_danger_store', 'Data can\'t be saved. Please try again! Thank you.');
		}
		return redirect()->route('customers.index')->with('notification_success_store', 'Data has been successfully saved. Thank you.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $customer_detail = Customer::find($id)->posts();

        return Datatables::of($customer_detail)->make(true);
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
