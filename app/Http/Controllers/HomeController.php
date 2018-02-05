<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use App\Invoice;
use Excel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }


    public function reports()
    {
        return view('reports');
    }


    public function data(Request $request, Invoice $enquiries)
    {

        if ($request->get('supplier_id') != null) {
            $enquiries = $enquiries->where('supplier_id', $request->input('supplier_id'));
        }

        if ($request->get('area_id') != null) {
            $enquiries = $enquiries->where('area_id', $request->input('area_id'));
        }

        if ($request->get('client_id') != null) {
            $enquiries = $enquiries->where('client_id', $request->input('client_id'));
        }

        if ($request->get('car_id') != null) {
            $enquiries = $enquiries->where('car_id', $request->input('car_id'));
        }

        $data = $enquiries->get();
//        dd($result);

//        if ($request->has('role')) {
//            $enquiries = $enquiries->where('role', $request->input('role'));
//        }


        return view('welcome', compact('data'));


    }


    public function importExcel()
    {

        if (Input::hasFile('import_file')) {
            $path = Input::file('import_file')->getRealPath();
            $data = Excel::load($path, function ($reader) {
            })->get();
            if (!empty($data) && $data->count()) {
                foreach ($data as $key => $value) {
                    $insert[] = [
                        'code' => $value->code,
                        'name' => $value->name,
                        'supplier_id' => $value->supplier_id,
                        'retail' => $value->retail,
                        'wholesale' => $value->wholesale,
                        'vip' => $value->vip,
                        'hyper' => $value->hyper,
                        'cost' => $value->cost,
                        'qty' => $value->qty,
                        'single' => $value->single,
                        'num' => $value->num,
                    ];

                }


                if (!empty($insert)) {

//                    dd($insert);
                    DB::table('items')->insert($insert);
                    \Session::flash('msg', 'تم الإستيراد بنجاح.');
                    return back();

                }
            }
        }
        return back();
    }

}
