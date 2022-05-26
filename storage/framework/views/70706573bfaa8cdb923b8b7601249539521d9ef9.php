<?php $__env->startSection('content'); ?>

<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
       
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
          

            <div class="row" style="text-align: center">

                <!-- Earnings (Monthly) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-primary shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                        الارباح (الشهرية)</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-sack-dollar fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Earnings (Annual) Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border border-success shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-dark text-uppercase mb-1">
                                       الارباح </div>
                                   <div> 
                                      <span> رس (<?php echo e($pricec); ?> )  </span> 
                                   </div>
                                    
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tasks Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-danger shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">تنبية المنتجات
                                    </div>
                                    <div class="row no-gutters align-items-center">
                                        <div class="col-auto">
                                            <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">50%</div>
                                        </div>
                                        <div class="col">
                                            <div class="progress progress-sm mr-2">
                                                <div class="progress-bar bg-danger" role="progressbar"
                                                    style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                    aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-auto">
                                    <i class="fas fa-box fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pending Requests Card Example -->
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-info shadow h-100 py-2">
                        <div class="card-body">
                            <div class="row no-gutters align-items-center">
                                <div class="col mr-2">
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                        المبيعات</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo e($count); ?></div>
                                </div>
                                <div class="col-auto">
                                    <i class="fa fa-shopping-cart fa-2x text-gray-300"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
           
        <br> <br> <div class="container">
            <div class="row">

                <div class="col-xl-8 col-lg-7">

                    
                    <!-- Area Chart -->
                    

                    <!-- Bar Chart -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold" style="text-align: center">المبيعات </h6>
                        </div>
                        <div class="card-body">
                            <div class="chart-bar" style="text-align: right">
                                <div class="btn-group" role="group" aria-label="Basic example">
                                    <button type="button" data-group="day" class="btn btn-light">يوم</button>
                                    <button type="button" data-group="week" class="btn btn-light">اسبوع</button>
                                    <button type="button" data-group="month" class="btn btn-light">شهر</button>
                                    <button type="button" data-group="year" class="btn btn-light">سنة</button>
                                </div>
                                <canvas id="myChart" width="600" height="200"></canvas>

                            </div>
                            
                        </div>
                    </div>

                </div>

                <!-- Donut Chart -->
                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow mb-4">
                        <!-- Card Header - Dropdown -->
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold" style="text-align: center">الاكثر مبيعا</h6>
                        </div>
                        <!-- Card Body -->
                        <div class="card-body" style="text-align: center">
                            <?php $__currentLoopData = $topProducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $topProducts): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php
                             $topProducts['image'] = explode('|',$topProducts->image);
                             $images=$topProducts->image[0];   
                            ?>
                            <div class="product-img">
                            <img src="<?php echo e(asset('products/images/' .$topProducts->product_image)); ?>">
                            </div>
                            <h3 class="product-name"> <?php echo e($topProducts->product_name); ?></h3>
                            <h2 style="color: red">قسم</h2>
                            <h6 class="section-name"><?php echo e($topProducts->section->section_name); ?></h6>
                           <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           
                        </div>
                    </div>
                </div>
            </div>

          </div>

           
        </div>
    </div>


</div>

<?php $__env->startPush('js'); ?>
         
         <?php $__env->stopPush(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/invo/resources/views/home.blade.php ENDPATH**/ ?>