<div id="invoice-POS">
    <div id="printed_content">
<div class="row" style="text-align: center">
    @forelse ($order_details as $orders)
    
   
    
    <center id="top">
    
        <div class="logo"> Taqnyati</div>
        <div class="info"></div>
        
        <tr>
            <td>رقم الطلب</td>
        <td>{{$orders->order_id}}</td>
    </tr>
      </center>
    </div>
    
    <div class="mid" style="text-align: center">
      <div class="info">
        <h2></h2>
        <h2>contact Us</h2>
        <p>
          address : afif
        </p>
        <p>email : hamad0912@gmail.com</p>
        <p>phone : +966534367472</p>
      </div>
    </div>
     
      @forelse ($order_customer as $customer)
      <div class="mid" style="text-align: center">
        --------------------
        <div class="info">
          <h2>العميل</h2>
          <p>
            address :{{$customer->name}}
          </p>
          
          <p>phone : +{{$customer->phone}}</p>
        </div>
      
  @empty
      
  @endforelse
    </div>
    <!-- End od Recipt Mid -->
    <div class="bot">
        <div id="table">
            <table>
                <tr class="tabletitle">
                    <td class="itme"><h2>العناصر</h2></td>
                    <td class="Hours"><h2>الكمية</h2></td>
                    <td class="Rate"><h2>السعر</h2></td>
                    <td class="Rate"><h2>الخصم</h2></td>
                    <td class="Rate"><h2>المجموع</h2></td>
                </tr> 
                
                    
                
                <tr class="service">
                    <td class="tableitem"><p class="itemtext">{{ $orders->product }}</p></td>
                <td class="tableitem"><p class="itemtext">{{ $orders->quantity_id}}</p></td>
                <td class="tableitem"><p class="itemtext">{{ number_format($orders->unitprice, 2)}}</p></td>
                <td class="tableitem"> <p class="itemtext">{{ $orders->discount ? ' ' : '0' }}</p> </td>
                <td class="tableitem"> <p class="itemtext">{{ number_format($orders->amount, 2)}}</p> </td>
                </tr>
                
                <tr class="tabletitle">
                    <td></td>
                    <td></td>
                    
                    <td class="Rate"><p class="itemtext"> {{ number_format($order_details->sum('amount') * 15 /100, 2)}}</p></td>
                    <td>الضريبة</td>
                    <td></td>
                </tr>

                <tr class="tabletitle">
                  <td></td>
                  <td></td>
                  
                  <td class="PAyment"> {{ number_format($order_details->sum('amount'), 2)}}  </td>
                  <td class="Rate">الاجمالي</td>
                  <td></td>
              </tr>
            </table>
            &nbsp; &nbsp;
            <div class="legalcopy" style="text-align: center">
                ________________
                <p class="legal"><strong> ** شكرا  **</strong><br>
                  السلع الخاضعة للضريبة  
              </p>
            </div>
            
            <div class="serial-number">
              Serial :  <span class="serial">
                    1235898633888
                </span>
               <br> <span> {{$orders->created_at}}</span>
            </div>
        </div>
        @empty
        
                    @endforelse
    </div>
</div>
</div>
</div>
<style>
  #invoice-POS{
      box-shadow: 0 0 1in -0.25in rgb(0, 0, 0.5);
      padding: 2mm;
      margin: 0 auto;
      width: 70mm;
      background: #fff;
  }

  #invoice-POS ::selection {
      background: #005b77;
      color: #fff;
  }
  
  #invoice-POS ::-moz-selection{
      background: #005b77;
      color: #fff;
  }

  #invoice-POS h1{
      font-size: 1.5em;
      color: #222;
  }
  #invoice-POS h2{
      font-size: 0.6em;
      
  }

  #invoice-POS h3{
      font-size: 1.2em;
      font-weight: 300;
      line-height: 2em;
  }
  
  #invoice-POS p{
      font-size: 0.8em;
      line-height: 1.2em;
      color: #666;
  }

  #invoice-POS #top, #invoice-POS #mid, #invoice-POS #bot{
      border-bottom: 1px solid #eee;
  } 

  #invoice-POS #top{
      min-height: 100px;
  }

   #invoice-POS #mind{
      min-height: 80px;
  }

  #invoice-POS #bot{
      min-height: 50px;
  }

  #invoice-POS #top .logo{
      height: 60px;
      width: 60px;
      background-image: url() no-repeat;
      background-size: 60px 60px;
      border-radius: 50px;
  }

  #invoice-POS .info{
      display: block;
      margin-left: 0;
      text-align: center;      
  }

  #invoice-POS .title{
      float: right;
  }
  #invoice-POS .title{
      text-align: right;
  }

  #invoice-POS table{
      width: 100%;
      border-collapse: collapse;
  }

  #invoice-POS .tabletitle{
      font-size: 0,5em;
      background: #eee;
  }

  #invoice-POS .service {
      border-bottom: 1px solid #eee;

  }
  
  #invoice-POS .item{
      width: 24mm;
  }
  #invoice-POS .itemtext{
      font-size: 0.6em;
  }

  #invoice-POS .legalcopy{
      margin-top: 5mm;
      text-align: center;
  }
  
  .serial-number{
      margin-top: 5mm;
      margin-bottom: 2mm;
      text-align: center;
      font-size: 12px;
  }

  .serial{
      font-size: 10px !important;
  }

  

</style>


 
   
   
</div>
