<div class="modal center fade" id="deletetran{{ $tran->id }}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">حذف منتج</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
          
        </button>
        
      </div>
      <div class="modal-body">
        <form action="{{ route('tranc.destroy', $tran->id) }}" method="post">
          @csrf 
          @method('delete')
          <p> هل انت متاكد من حذف هذا المنتج {{ $tran->order_id }} ؟</p>
       
          <div class="modal-footer">
            <button class="btn btn-info " data-dismiss="modal">إالغاء</button>
            <button type="submit" class="btn btn-danger">حذف</button>
          </div>
        </form>
      
      </div>
       
    </div>
  </div>
</div>