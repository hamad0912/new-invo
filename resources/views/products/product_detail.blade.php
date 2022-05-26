<div class="row" style="text-align: center">
    @forelse ($products_details as $product)
    
    
    <div class="col-md-12">
        <div class="form-group">
            <img 
            data-toggle="modal" data-target="#productPreview{{ $product->id }}" 
            src="{{ asset('products/images/' .$product->product_image) }}" 
            width="70" style=" cursor: pointer;" alt="">
        </div>
    <div class="col-md-12">
        <div class="form-group">
            <label for="">رقم المنتج</label>
            <input type="text" class="form-control" value=" {{ $product->id }}" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">اسم المنتج</label>
            
            <input type="text" class="form-control" value=" {{ $product->product_name }}" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">كود المنتج</label>
            
            <input type="text" class="form-control" value=" {{ $product->product_code }}" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">سعر المنتج</label>
            
            <input type="text" class="form-control" value=" {{ $product->price }}" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">كمية المنتج</label>
            
            <input type="text" class="form-control" value=" {{ $product->quantity }}" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">مخزون المنتج</label>
            
            <input type="text" class="form-control" value=" {{ $product->alert_stock }}" readonly>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group">
            <label for="">وصف المنتج</label>
            <textarea class="form-control" readonly cols="10" rows="2"> {{ $product->description }}</textarea>
        </div>
    </div>

    <div class="col-md-12">
        <div class="form-group" style="text-align: center !important; padding-left:8%">
            {{-- <label for="">صورة المنتج</label> --}}
            <span style="text-align: center; ">
                <img src="{{ asset('products/barcodes/' .$product->barcode)}}" 
            width="70" style=" cursor: pointer;" alt="">
            </span>
            <h4>{{ $product->product_code }}</h4>
        </div>
    </div>

    @include('products.product_preview')
    @empty
        
    @endforelse
</div>

<style>
    input:read-only{
        background: #fff !important;
        text-align: center

    }

    textarea:read-only{
        background: #fff !important;
        text-align: center
    }
</style>