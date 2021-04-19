<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stament = 'call get_all_customers()';
        $customers = DB::select($stament);
        return $customers;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)

    {
        //new customer

        $stament_customer = 'call insert_new_customer (?,?,?)';
        $parameter_customer = [
            $request['name'],
            $request['last_name'],
            $request['email']
        ];

        $data=DB::select($stament_customer, $parameter_customer);

        //new id
        $id = $data[0]->id;

        //new products
        $stament_products = 'call insert_new_product(?,?,?)';
        foreach ($request['products'] as $product) {
            if (!is_null($product['product_name']) && !is_null($product['product_cost'])) {
                $parameter_product = [
                    $product['product_name'],


                    $product['product_cost'],
                    $id
                ];
                DB::select($stament_products, $parameter_product);
            }
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
        $stament = 'call get_a_customer(?)';
        $parameter = [$id];
        $customer = DB::select($stament, $parameter);

        return  $customer;
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
        //update customer
        $stament = 'call update_customer(?,?,?,?)';
        $parameter =  [
            $id,
            $request[0]['name'],
            $request[0]['last_name'],
            $request[0]['email']
        ];
        DB::select($stament, $parameter);

        //update products
        $stament_products = 'call update_products(?,?,?)';

        foreach ($request as $product) {
           
                $parameter_product = [
                    $product['product_id'],
                    $product['product_name'],
                    $product['product_cost']
                ];
             DB::select($stament_products, $parameter_product);
            
        }

        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $stament = 'call delete_customer(?)';
        $parameter = [$id];
        DB::select($stament, $parameter);
    }
}
