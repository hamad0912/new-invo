
<div class="sidebar"  id="sidebar">
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
        <i class="fa fa-bars"></i>
      </button>
      <div class="offcanvas offcanvas-end" style="background-color: #e3f2fd; tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
        <div class="offcanvas-header" style="background-color: rgb(52, 73, 94);">
          <h5 class="offcanvas-title" id="offcanvasNavbarLabel" >اسم التطبيق</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body" style="background-color: #e3f2fd;">
            <ul class="navbar-nav ">
              <li> <a href="{{ route('users.index')}}" class="btn btn-outline rounded-pill"> <i class="fa fa-user"></i> Users</a></li> 
                <li><a href="{{ route('products.index') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-box"></i> المنتجات</a></li> 
                <li><a href="{{ route('orders.index')}}" class="btn btn-outline rounded-pill"> <i class="fa fa-desktop"></i> الكاشير</a></li> 
               <li> <a href="{{ route('report.index') }}" class="btn btn-outline rounded-pill"> <i class="fa fa-file"></i> التقارير</a></li> 
               <li> <a href="{{ route('tranc.index')}}" class="btn btn-outline rounded-pill"> <i class="fa fa-money-bill"></i> العمليات</a></li> 
              <li>  <a href="{{ route('suppliers.index') }}"class="btn btn-outline rounded-pill"> <i class="fa fa-luggage-cart"></i> الموردين</a></li> 
              <li> <a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-users"></i> العملاء</a></li> 
              <li> <a href="#" class="btn btn-outline rounded-pill"> <i class="fa fa-chart-line"></i> المداخيل</a></li> 
              <li> <a href="{{ route('products.barcode')}}" class="btn btn-outline rounded-pill"> <i class="fa fa-barcode"></i> الباركود</a></li> 
              <li> <a href="{{ route('sections.index')}}" class="btn btn-outline rounded-pill"> <i class="fa fa-list"></i> الاقسام</a></li> 
              
          
            </ul>
            

            
            <!-- Right Side Of Navbar -->
            
        </div>
      </div>

</div>


<style>
    #sidebar ul.lead{
        border-bottom: 1px solid #47748b;
        width: fit-content;
    }

    #sidebar ul li a{
        text-align: center;
        padding: 10px;
        font-size: 1.1em;
        
        width: 30vh;
        color: #008b8b
    }

    #sidebar ul li a:hover {
        
        color: #fff;
        background: #008B8B;
        text-decoration: none !important;
    }


    #sidebar{
        
        text-align: right
    }

    #sidebar ul li.active>a, a[aria-expanded="true"]{
        color:  #fff;
        background: #008B8B;
    }
    #offcanvasNavbar{
        width: 21%;
    }

    .navbar-toggler {
        font-size: 2.125rem;
    }

</style>
