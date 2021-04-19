@extends('layouts.app')

@section('content')
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        
        <router-link to="/" class="navbar-brand">CUSTOMERS</router-link>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
                <router-link to="/" class="nav-link">HOME</router-link>
            </li>
            <li class="nav-item">
                <li><router-link to="/add" class="nav-link">CREATE</router-link></li>
            </li>
           
         
          </ul>

         
        </div>
    </nav> 
  
      <div class="row justify-content-center mt-3">
        <div class="col-md-12">
            <router-view>
        </div>
      </div>
</div>
@endsection