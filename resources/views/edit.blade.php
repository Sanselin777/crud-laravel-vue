@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h1 class="text-center mb-3 h3">EDIT CUSTOMER AND PRODUCTS</h1>
            <form   method="POST" action="{{ route('customers.update',['customer'=>$customer[0]->customer_id]) }}" >
                    @csrf
                    @method('PUT')
                
                 <h2 class="h4">Customer</h2> 
                 <div class="form-row">
                    <div class="form-group col-md-4">  
                        <input type="text" name="name" value="{{ $customer[0]->name}}" placeholder="name" class="form-control">
                    </div>
                    <div class="form-group col-md-4"> 
                        <input type="text" name="last_name" value="{{ $customer[0]->last_name}}" placeholder="last name" class="form-control">
                    </div>
                    <div class="form-group col-md-4"> 
                        <input type="email" name="email" value="{{ $customer[0]->email}}" placeholder="email" class="form-control">
                    </div>
                </div>
                <hr>

                <h2 class="h4">Products</h2>  
                <ol>
                    @foreach($customer as $cus)
                        
                   
                    <li>
                        <div class="form-row mt-2">
                            <div class="col">
                            <input type="hidden" value="{{ $cus->product_id }}" name = "product_id[]">
                            <input type="text" class="form-control" placeholder="Product" name="product_name[]" value="{{ $cus->product_name }}">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control" placeholder="Cost" name="product_value[]" value="{{ $cus->product_value }}">
                            </div>
                        </div>
                   </li>

                   @endforeach

              
                <div class="text-right">
                    <input type="submit" value="EDIT" class="btn btn-success mt-2" >
                </div>

               
            </form>

            
        </div>
    </div>
</div>
@endsection