@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">

            <h1 class="text-center mb-3 h3">NEW CUSTOMER AND PRODUCTS</h1>
            <form   method="POST" action="{{ route('customers.store') }}" >
                    @csrf
                 <h2 class="h4">Customer</h2> 
                 <div class="form-row">
                    <div class="form-group col-md-4">  
                        <input type="text" name="name" value="" placeholder="name" class="form-control">
                    </div>
                    <div class="form-group col-md-4"> 
                        <input type="text" name="last_name" value="" placeholder="last name" class="form-control">
                    </div>
                    <div class="form-group col-md-4"> 
                        <input type="email" name="email" value="" placeholder="email" class="form-control">
                    </div>
                </div>
                <hr>

                <h2 class="h4">Products</h2>  
                <ol>
                    <li>
                        <div class="form-row mt-2">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Product" name="product_name[]">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control" placeholder="Cost" name="product_value[]">
                            </div>
                        </div>
                   </li>

                   <li>
                        <div class="form-row mt-2">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Product" name="product_name[]">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control" placeholder="Cost" name="product_value[]">
                            </div>
                        </div>
                  </li>
                  <li>
                        <div class="form-row mt-2">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Product" name="product_name[]">
                            </div>
                            <div class="col ">
                            <input type="number" class="form-control" placeholder="Cost" name="product_value[]">
                            </div>
                        </div>
                  </li>

                   <li>
                        <div class="form-row mt-2">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Product" name="product_name[]">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control" placeholder="Cost" name="product_value[]">
                            </div>
                        </div>
                  </li>

                  <li>
                        <div class="form-row mt-2">
                            <div class="col">
                            <input type="text" class="form-control" placeholder="Product" name="product_name[]">
                            </div>
                            <div class="col">
                            <input type="number" class="form-control" placeholder="Cost" name="product_value[]">
                            </div>
                        </div>
                 </li>
            </ol>
              
                <div class="text-right">
                    <input type="submit" value="CREAR" class="btn btn-success mt-2" >
                </div>

               
            </form>
        </div>
    </div>
</div>

  {{-- <div class="">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="shoes" id="1" name="product_name_1">
                        <input  type="hidden" value="40" name="product_value">
                        <label class="form-check-label" for="1">Shoes
                        <span><strong> ( precio: s/.40  soles)</strong></span>
                        </label>
                    </div >
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="t-shirt" id="2" name="product_name_2">
                        <input  type="hidden" value="50" name="product_value_2" >
                        <label class="form-check-label" for="product_name_2">T-shirt
                        <span><strong> ( precio: s/.50  soles)</strong></span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="glasses" id="3" name="product_name_3">
                        <input  type="hidden" value="100" name="product_value_3" >
                        <label class="form-check-label" for="3">Glasses
                        <span><strong> ( precio: s/.100  soles)</strong></span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="shorts" id="4" name="product_name_4">
                        <input  type="hidden" value="20" name="product_value_4">
                        <label class="form-check-label" for="4">Shorts
                        <span><strong> ( precio: s/.20  soles)</strong></span>
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="t-shirt" id="5" name="product_name_5">
                        <input  type="hidden" value="120" name="product_value_5">
                        <label class="form-check-label" for="5">Pants
                        <span><strong> ( precio: s/.120  soles)</strong></span>
                        </label>
                    </div>
                </div> --}}

{{-- @foreach($products as $product)
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="{{ $product->list_product_name}}" id="defaultCheck1{{ $product->list_product_id}}">
                        <input  type="hidden" value="{{ $product->list_product_value}}" >
                        <label class="form-check-label" for="defaultCheck1{{ $product->list_product_id }}">
                        {{ $product->list_product_name }} <span><strong> ( precio: s/. {{ $product->list_product_value }} soles)</strong></span>
                        </label>
                    </div>
                  @endforeach --}}
@endsection