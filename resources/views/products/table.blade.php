<table class="table table-bordered table-left">
    <thead>
        <tr>
            <th>#</th>
            <th>اسم المنتج</th>
            <th>سعر الشراء</th>
            <th>السعر</th>
            <th>الكمية</th>
            <th>القسم</th>
            <th>المخزون</th>
            <th>الاجراءات</th>
        </tr>
    </thead>
    <tbody>
      @forelse ($products as $key => $product)
        <tr>
            <td>{{$key+1}}</td>
            <td style="cursor: pointer" data-toggle="tooltip"
            data-placement="right" title="للتفاصيل اضغط هنا"
             wire:click="ProductDetails({{ $product->id }})" >{{ $product->product_name}}</td>
            <td>{{ $product->buy}}</td>
            <td>{{ number_format($product->price,2) }}</td>
            <td>{{ $product->quantity }}</td>
            <td >{{ $product->section->section_name}}</td>
            <td> 
                @if ($product->alert_stock >= $product->quantity) 
                <span class="badge bg-danger"> {{ $product->alert_stock}} </span>
                @else 
                <span class="badge bg-success">{{ $product->alert_stock}}</span>
            @endif 
        </td>
           
          
            
            <td>
              <div class="btn-group">
                <a href="#"  class="btn btn-info btn-sm" data-toggle="modal" 
                data-target="#editproduct{{ $product->id }}"><i class="fas fa-edit"></i> تعديل</a>
                
                <a href="#" data-toggle="modal" 
                data-target="#deleteproduct{{ $product->id }}" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> حذف </a>
              </div>
            </td>
        </tr>

        
        <!-- Modal of Edit product Detail -->

    @include('products.edit')

    {{-- Delete --}}

    @include('products.delete')

    @empty
        @endforelse
    </tbody>
    {{-- {{ $products->links('pagination::bootstrap-4')  }} --}}
</table>