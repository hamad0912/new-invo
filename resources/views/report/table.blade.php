<table class="table table-bordered table-left">
    <thead>
        <tr>
            <th>#</th>
            <th>رقم الفاتورة</th>
            <th>رقم المنتج </th>
            <th>قيمة الشراء</th>
            <th>الكمية</th>
            <th>التفاصيل</th>
            
            
        </tr>
    </thead>
    <tbody>
      @forelse ($order_detaill as $key => $order)
        <tr>
            <td>{{$key+1}}</td>
            <td >{{ $order->order_id}}</td>
            <td>{{ $order->product}}</td>
            <td>{{ $order->amount }}</td>
            <td>{{ $order->quantity_id }}</td>
            <td style="cursor: pointer; text-align: center" data-toggle="tooltip"
            data-placement="right" title="للتفاصيل اضغط هنا"
             wire:click="OrdertDetails({{ $order->id }})"><button type="button" class="btn btn-info">عرض الفاتورة</button></td>
        
           
          
            
       
        </tr>

        
        <!-- Modal of Edit product Detail -->


    @empty
        @endforelse
    </tbody>
    {{-- {{ $order_detaill->links('pagination::bootstrap-4')  }} --}}
</table>