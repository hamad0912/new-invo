@extends('layouts.app')

@section('content')


<div class="container-fluid">
   
    <div  class="row">

        {{-- top payment mothed --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-primary shadow h-100 py-2">
                <div style="text-align: center" class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                           
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                اكثر طرق الدفع</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">CASH</div>
                            
                            
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-hand-holding-magic fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- employee --}}
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-info shadow h-100 py-2">
                <div style="text-align: center" class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                اكثر الموظفين بيعا</div>
                                @foreach ($top_sales as $tops)
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{ $tops->user_id}}</div>
                            @endforeach
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>

        <div class="row">
            
                <div class="card">
                    <div style="text-align: center" class="card-header text-white">
                        <h4>تقارير المبيعات </h4> 
                        
                       </div>
                        <div class="card-body">
                            <form method="GET" class="col-sm-3">
                                
                                <i class="fa fa-search"></i>
                                <label for="">بحث عن عملية</label>
                                <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
                              </form>
                            <table class="table table-bordered table-left">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>رقم الطلب</th>
                                    <th>مبلغ الشراء</th>
                                    <th>مبلغ الدفع</th>
                                    <th>الباقي</th>
                                    <th>طريقة الدفع</th>
                                    <th>تاريخ العملية</th>
                                    <th>الموظف</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                                
                                @foreach ($tranc as $key => $tran)
                                <tr>
                                    <td>{{ $key+1}}</td>
                                    
                                    <td style="color: #337ab7;">{{ $tran->order_id}}</td>
                                    <td>{{ $tran->transac_amount}}</td>
                                    <td>{{ $tran->paid_amount}}</td>
                                    <td>{{ $tran->balance}}</td>
                                    <td>{{ $tran->payment_method}}</td>
                                    <td>{{ $tran->transac_date}}</td>
                                
                                    <td>{{ $tran->user_id}}</td>
                                    
                                    <td>
                                     
                                    </td>
                                </tr>

                                
                               
                               @endforeach
                                 

                               
                               
                                 
                            </tbody>
                            
                            </table>
                            <div class="d-felx justify-content-center">
                            {{ $tranc->links('pagination::bootstrap-4') }} 
                            </div>
                        </div>
                

            </div>
            
        
        
    </div>
  
  
</div>

    @endsection