@extends('layouts.app')

@section('content')


@livewire('products')

<!-- model of addproduct -->
<div  class="modal center fade" id="addproduct" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div  class="modal-header">
        <h4  class="modal-title" id="staticBackdropLabel">اضافة منتج</h4>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data" autocomplete="off">
          @csrf 
          
          <div class="form-group">
            <label for="">اسم المنتج</label>
            <input type="text" name="product_name" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">الباركود</label>
            <input type="number" name="product_code" id="" class="form-control" placeholder="001" required>
          </div>
          <div class="form-group">
            <label for="">سعر الشراء</label>
            <input type="text" name="buy" id="" class="form-control" required>
          </div>
          
          <div class="form-group">
            <label for="">السعر</label>
            <input type="number" name="price" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">الكمية</label>
            <input type="number" name="quantity" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">المخزون</label>
            <input type="number" name="alert_stock" id="" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">الوصف</label>
            <textarea name="description" id="" cols="30" rows="2" class="form-control" required></textarea>
          </div>
        
          <div class="form-group">
            
            <label for="">القسم</label>
            <select name="section_id" id="" class="form-control">
              @foreach ($sections as $section)
              <option  value={{ $section->id}}>{{$section->section_name}}</option>
              @endforeach
              
            </select>
          </div>
            
                
            
           
          
          <div class="form-group">
            <label for="">الصورة</label>
            <input type="file" name="product_image" id="product_image" cols="30" rows="2" class="form-control">
          </div>
          
          <div class="modal-footer">
            <button class="btn btn-primary btn-block">حفظ</button>
          </div>
        </form>
      
      </div>
       
    </div>
  </div>
</div>




<style>
    .modal.right .modal-dialog{
      /* position: absolute; */
       top: 0;
       right: 0;
       margin-right: 0vh;
        
    }
    .modal-fade:not(.in).right .modal-dialog{
      -webkit-transform: translate3d(25%, 0, 0);
      transform: translate3d(25%, 0, 0);
    }
</style>

@endsection