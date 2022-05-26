<table class="table table-bordered table-left">
    <thead>
        <tr>
            <th>#</th>
            <th>طريقة الدفع</th>
            <th>رقم الموظف </th>
            <th>تاريخ العملية</th>
            
            
            
            
        </tr>
    </thead>
    <tbody>
      @forelse ($tranc as $key => $tran)
        <tr>
            <td>{{$key+1}}</td>
            <td style="font-size: 16px">{{ $tran->payment_method}}</td>
            <td>{{ $tran->user_id}}</td>
            <td>{{ $tran->transac_date }}</td>
            
            
        
           
          
            
       
        </tr>

        
        <!-- Modal of Edit product Detail -->


    @empty
        @endforelse
    </tbody>
    {{-- {{ $order_detaill->links('pagination::bootstrap-4')  }} --}}
</table>