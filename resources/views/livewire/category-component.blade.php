<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
            <div class="card">
                <div class="card-header">
                    <h4 style="float: left">اقسام المنتجات </h4> 
                    <a href="#addSection" class="btn btn-primary" style="float: right"  data-toggle="modal">
                        <i class="fa fa-plus-circle fa-lg"></i>  اضافة قسم 
                      </a>
                    <div class="row">
                        <div class="col-md-4">
                           
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    @include('categories.table')
                </div>

            </div>
        </div>
    </div>
    @include('categories.create')
</div>
