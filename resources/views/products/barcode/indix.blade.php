@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
          <div class="col-md-12">
          <div class="card">
                <div class="card-header">
                    <h4 style="float: right">باركود المنتج </h4> 
                </div>
                    <div class="card-body">
                       <div id="print">

                        <div class="row">

                            @forelse ($productsBarcode as  $barcode)
                                <div class="col-lg-3 col-md-4 col-sm-12 mt-3 text-center">
                                    <div class="card">
                                        <div class="card-body">
                                            <img src="{{ asset('products/barcodes/'. $barcode->barcode)}}" alt="">
                                            
                                            <h4 class="text-center" style="padding: 1em; margin-top: 0.5em">{{ $barcode->product_code}}</h4>
                                        </div>
                                    </div>
                                </div>
                                
                            @empty
                                <h2 align="center">no data</h2>
                            @endforelse

                        </div>


                       </div>
                    </div>
                
            
          </div>
       
        </div>
    </div>
</div>

<!-- model of addproduct -->







@endsection