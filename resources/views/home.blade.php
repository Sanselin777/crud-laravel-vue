@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2 class="text-center mt-3">Customers</h2></div>
                <a href="{{route('customers.create')}}" class="btn btn-success">NEW CUSTOMER</a>
                
                @foreach($customers as $key => $customer)
                    <div class="card-body border border-primary rounded mt-2">
                        <p>{{ $key+1 }}</p>       
                        <p>{{ $customer->name }} {{ $customer->last_name}} ({{ $customer->email}} )

                        <div class="text-right">
                                <span  class="font-weight-bold">total products:</span> <span>{{ $customer->total_products }}</span>   
                                <span class="font-weight-bold ml-3">total bill:  </span> <span> s/. {{ $customer->total_bill }}</span>   
                        </div>
                        </p>
                            
                  
                        <a href="{{route('customers.edit', ['customer'=>$customer->customer_id])}}" class="btn btn-primary">EDIT</a>  
                        
                       
                        <form action="{{ route('customers.destroy', ['customer'=>$customer->customer_id]) }}" method="POST" class="d-inline-block" >
                           @csrf
                            @method('DELETE')
                            <input type="submit" value="DELETE" class="btn btn-danger " >
                        </form>   
                
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
