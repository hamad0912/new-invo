@extends('layouts.app')

@section('content')



<div class="container-fluid">
    <div class="col-lg-12">
        <div class="row">
            <div class="col-md-9">
                <div class="card">
                    <div class="card-header text-white">
                        <h4 style="float: right">الموردين </h4> 
                        <a href="#" style="float: left" class="btn btn-success" 
                        data-toggle="modal" data-target="#addsupplier">
                        <i class="fa fa-plus"></i> اضافة مورد جديد </a> </div>
                        <div class="card-body">
                            <table class="table table-bordered table-left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>اسم</th>
                                    <th>رقم التواصل</th>
                                    <th>الرابط</th>
                                    <th>الايميل</th>
                                    <th>نوع المنتجات</th>
                                    <th>الاجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($suppliers as $key => $supplier)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    <td style="color: #337ab7;">{{ $supplier->compony}}</td>
                                    <td><a href="https://wa.me/{{ $supplier->phone}}" > <i class="fab fa-whatsapp " style="font-size:20px;color:green"></i></a> , <a href="tel:{{ $supplier->phone}}" > <i class="fas fa-phone-alt" style="font-size:20px;color:green"></i>  </a></td>
                                    <td><a href="{{ $supplier->url}}">زيارة الموقع</a></td>
                                    <td><a href="mailto:{{ $supplier->emmail}}"><i class='fa fa-envelope-square' style="font-size:20px;color:teal"></i> {{ $supplier->emmail}}</a></td>
                                    <td style="color: #337ab7;">{{ $supplier->kind}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info btn-sm" data-toggle="modal"
                                            data-target="#editsupplier{{ $supplier->id }}"><i class="fas fa-edit"></i> تعديل</a>
                                                <a href="#" data-toggle="modal"
                                                data-target="#deletesupplier{{ $supplier->id }}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i>حذف</a>

                                        </div>
                                    </td>
                                </tr>
                                {{-- Modal of Edit supplier Detil --}}
                                <div class="modal center fade" id="editsupplier{{ $supplier->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="staticBackdropLabel">تعديل</h5>
                                          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                            
                                          </button>
                                          
                                        </div>
                                        <div class="modal-body">
                                          <form action="{{ route('suppliers.update', $supplier->id) }}" method="post">
                                              @csrf 
                                              @method('put')
                                              <div class="form-group">
                                                <label for="">الاسم</label>
                                                <input type="text" name="compony" id="" value="{{ $supplier->compony }}" class="form-control" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="">رقم التواصل</label>
                                                <input type="tel" name="phone" id="" value="{{ $supplier->phone }}" class="form-control" placeholder="+966" required>
                                              </div>
                                              
                                              <div class="form-group">
                                                <label for="">الرابط</label>
                                                <input type="text" name="url" id="" value="{{ $supplier->url }}" class="form-control" placeholder="https://example.com" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="">الايميل</label>
                                                <input type="text" name="emmail" id="" value="{{ $supplier->emmail }}" class="form-control" required>
                                              </div>
                                              <div class="form-group">
                                                <label for="">نوع المنتج</label>
                                                <input type="text" name="kind" id="" value="{{ $supplier->kind}}" class="form-control" required>
                                              </div>
                                             
                                              
                                              <div class="modal-footer">
                                                <button class="btn btn-primary btn-block">حفظ</button>
                                              </div>
                                            </form>
                                        
                                        </div>
                                        
                                      </div>
                                    </div>
                                  </div>

                                  <div class="modal center fade" id="deletesupplier{{ $supplier->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                      <div class="modal-content">
                                        <div class="modal-header">
                                          <h4 class="modal-title" id="staticBackdropLabel">حذف مورد</h5>
                                          <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                            
                                          </button>
                                          
                                        </div>
                                        <div class="modal-body">
                                          <form action="{{ route('suppliers.destroy', $supplier->id) }}" method="post">
                                            @csrf 
                                            @method('delete')
                                            <p> هل انت متاكد من حذف هذا المنتج {{ $supplier->compony }} ؟</p>
                                         
                                            <div class="modal-footer">
                                              <button class="btn btn-info " data-dismiss="modal">إالغاء</button>
                                              <button type="submit" class="btn btn-danger">حذف</button>
                                            </div>
                                          </form>
                                        
                                        </div>
                                         
                                      </div>
                                    </div>
                                  </div>
                               
                                  @endforeach
                            </tbody>
                            </table>
                            
                        </div>
                </div>

            </div>
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header"><h6 class="text-center"><i class="bi-bell"></i> التنبيهات</h6></div>
                        <div class="card-body">
                           <ul>  @foreach ($products as $product)
                            @if ($product->alert_stock >= $product->quantity) 
                            <li>{{ $product->product_name}}</li>
                    <span class="badge bg-danger">انخفاض المخزون{{ $product->alert_stock}} </span>
                    
                    
                    
                @endif 
                
                            @endforeach</ul>
                            
                                               
                                      
                                           
                                            
                        </div>
                    
                </div>
              </div>
                
            </div>
        </div>
        
    </div>

</div>

    <div class="modal center fade" id="addsupplier" data-bs-backdrop="static" data-bs-keyboard="false" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="staticBackdropLabel">اضافة مورد جديد</h4>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('suppliers.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="">الاسم</label>
                        <input type="text" name="compony" id="" class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label for="">رقم التواصل</label>
                        <input type="tel" name="phone" id=""  class="form-control" placeholder="+966" required>
                      </div>
                      
                      <div class="form-group">
                        <label for="">الرابط</label>
                        <input type="text" name="url" id=""  class="form-control" placeholder="https://example.com" required>
                      </div>
                      <div class="form-group">
                        <label for="">الايميل</label>
                        <input type="email" name="emmail" id=""  class="form-control" required>
                      </div>
                      <div class="form-group">
                        <label for="">نوع المنتج</label>
                        <input type="text" name="kind" id="" class="form-control" required>
                      </div>
                      <div class="modal-footer">
                        <button class="btn btn-primary btn-block">حفظ</button>
                      </div>
                    </form>

                </div>

            </div>

        </div>

    </div>

    
  
@endsection