@extends('layouts.app')

@section('content')
{{-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> --}}

<div class="container-fluid">

  @livewire('order')

<!-- model of addproduct -->

        <div class="modal">
            <div id="print">
                @include('reports.receipt')
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
    td{
        text-align: center
    }
    .radio-item{
        display: inline-block;
        right: 0;
    }
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

    .radio-item input[ type="radio"]{
        /* visibility: hidden; */
        width: 20px;
        height: 20px;
        margin: 0 5px 0 5px;
        padding: 0;
        cursor: pointer;
        
    }
</style>

@endsection


@section('script')
<script>
    // $(document).ready(function(){
        
    // })


        $('.add_more').on('click', function() {
            var product = $('.product_id').html();
            var numberofrow = ($('.addMoreProduct tr').length - 0) + 1;
            var tr = '<tr><td class"no"">' + numberofrow + '</td>' +
                '<td><select class="form-control product_id" name="product_id[]" >' + product +
                ' </select></td>' +
                '<td> <input type="number" name="quantity[]" class="form-control quantity"></td>' +
                '<td> <input type="number" name="price[]" class="form-control price"></td>' +
                '<td> <input type="number" name="discount[]" class="form-control discount"></td>' +
                '<td> <input type="number" name="total_amount[]" class="form-control total_amount" ></td>' +
                '<td> <a class="btn btn-danger btn-sm delete rounded-circle"><i class="fa fa-times-circle" </a></td>';
            $('.addMoreProduct').append(tr);
        });
        // Delete a row 
        $('.addMoreProduct').delegate('.delete', 'click', function() {
            $(this).parent().remove();
        })
        function TotalAmount() {
            // i will make all the loics here 
            var total = 0;
            $('.total_amount').each(function(i, e) {
                var amount = $(this).val() - 0;
                total += amount;
            });
            $('.total').html(total);
        }
        $('addMoreProduct').delegate('.product_id', 'change', function() {
            var tr = $(this).parent().parent();
            var price = tr.find('.product_id option:selected').attr('data-price');
            tr.find('.price').val(price);
            var qty = tr.find('.quantity').val() - 0;
            var disc = tr.find('.discount').val() - 0;
            var price = tr.find('.price').val() - 0;
            var total_amount = (qty * price) - ((qty * price * disc) / 100);
            tr.find('.total_amount').val(total_amount);
            TotalAmount();
        });
        $('addMoreProduct').delegate('.quantity , .discount', 'keyup', function() {
            var tr = $(this).parent().parent();
            var qty = tr.find('.quantity').val() - 0;
            var disc = tr.find('.discount').val() - 0;
            var price = tr.find('.price').val() - 0;
            var total_amount = (qty * price) - ((qty * price * disc) / 100);
            tr.find('.total_amount').val(total_amount);
            TotalAmount();
        });
        $('#paid_amount').keyup(function() {
            // alert(1)
            var total = $('.total').html();
            var paid_amount = $(this).val();
            var tot = paid_amount - total;
            $('#balance').val(tot).toFixed(2);
        })



        // print Section
        function PrintReceiptContent(el){
            var data = '<input type="button" id="printPageButton class="printPageButton" style="display: block; width: 100%; border: none; background-color: #008B8B; color: #fff; padding: 14px 28px; font-size: 16px; cursor:pointer; text-align:center" value="طباعة الفاتورة" onClick="window.print()">';
                     data += document.getElementById(el).innerHTML;
                     myReceipt = window.open("", "myWin", "left=150, top=130, width=400, height=400");
                     myReceipt.screnX = 0;
                     myReceipt.screnY = 0;
                     myReceipt.document.write(data);
                     myReceipt.document.title = "طباعة الفاتورة";
                     myReceipt.focus();
                     setTimeout(() => {
                        myReceipt.close();
                     }, 10000);
        }

</script>

    
@endsection
