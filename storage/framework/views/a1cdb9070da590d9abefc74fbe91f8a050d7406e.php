<?php $__env->startSection('content'); ?>
<div class="pricing1 py-5 bg-light">
    <div class="container">
  
        
  
  <div id="price">
    <!--price tab-->
    <div class="plan">
      <div class="plan-inner">
        <div class="entry-title">
          <?php $__currentLoopData = $plans; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $plan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <?php if($plan->id == 1): ?> 
          <h3><?php echo e($plan->name); ?></h3>
          <div class="price"><?php echo e($plan->cost); ?><span>/SAR</span>
          </div>
        </div>
        <div class="entry-content">
          <ul>
            <li>عدد منتجات <strong style="color: #dc3545">محدود</strong></li>
            <li> قاعدة بيانات  <strong style="color: #dc3545">محدودة</strong></li>
            <li> عدد موظفين <strong style="color: #dc3545">محدود</strong></li>
            
          </ul>
        </div>
        <div class="btn" id="hamad">
          <a href="<?php echo e(route('plans.show', $plan->slug)); ?>">اشترك الان</a>
        </div>
      </div>
    </div>
    <!-- end of price tab-->
    <!--price tab-->
   
    <div class="plan basic">
      <div class="plan-inner">
        <div class="hot">hot</div>
        <div class="entry-title">
          <?php elseif($plan->id == 2): ?>
          <h3><?php echo e($plan->name); ?></h3>
          <div class="price"><?php echo e($plan->cost); ?><span>/SAR</span>
          </div>
        </div>
        <div class="entry-content">
          <ul>
            <li> عدد منتجات <strong style="color: #198754">لامحدود</strong></li>
            <li>قاعدة بيانات <strong style="color: #198754">لامحدودة</strong> </li>
            <li>عدد الموظفين <strong style="color: #116df6" id="empl"> (5)</strong></li>
            <li> رسائل نصية <strong style="color: #dc3545">محدودة</strong> </li>
            <li> اضافة المنتجات بواسطة ملف إكسل <strong style="color: #198754">متاح</strong> </li>
          </ul>
        </div>
        <div class="btn" id="ahmed">
          <a href="<?php echo e(route('plans.show', $plan->slug)); ?>">اشترك الان</a>
        </div>
      </div>
    </div>
    <!-- end of price tab-->
    <!--price tab-->
    
    <div class="plan standard">
      <div class="plan-inner">
        <div class="entry-title">
          <?php else: ?> 
          <h3><?php echo e($plan->name); ?></h3>
          
          <div class="price"><?php echo e($plan->cost); ?><span>/SAR</span>
          </div>
        </div>
        <div class="entry-content">
          <ul>
            <li> عدد منتجات <strong style="color: #198754">لامحدود</strong></li>
            <li>قاعدة بيانات <strong style="color: #198754">لامحدودة</strong> </li>
            <li>عدد الموظفين <strong style="color: #198754"> لامحدود</strong></li>
            <li> رسائل نصية <strong style="color: #198754">لامحدودة</strong></li>
            <li> دعم فني <strong style="color: #198754">24/7</strong></li>
            <li> اضافة المنتجات بواسطتنا <strong style="color: #198754">مجانا</strong></li>
            
          </ul>
        </div>
        <div class="btn" id="sul">
          <a href="<?php echo e(route('plans.show', $plan->slug)); ?>">اشترك الان</a>
        </div>
      </div>
      <?php endif; ?>

      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
   
  </div>
      
    </div>
    
  </div>
  
  <style>
  
@import  url(https://fonts.googleapis.com/css?family=Lato:400,700);

body {
  background: #F2F2F2;
  padding: 0;
  maring: 0;
}

#price {
  text-align: center;
}

.plan {
  display: inline-block;
  margin: 10px 1%;
  font-family: 'Lato', Arial, sans-serif;
}

.plan-inner {
  background: #fff;
  margin: 0 auto;
  min-width: 280px;
  max-width: 100%;
  position:relative;
}

.entry-title {
  background: #53CFE9;
  height: 140px;
  position: relative;
  text-align: center;
  color: #fff;
  margin-bottom: 30px;
}

.entry-title>h3 {
  background: #20BADA;
  font-size: 20px;
  padding: 5px 0;
  text-transform: uppercase;
  font-weight: 700;
  margin: 0;
}

.entry-title .price {
  position: absolute;
  bottom: -25px;
  background: #20BADA;
  height: 95px;
  width: 95px;
  margin: 0 auto;
  left: 0;
  right: 0;
  overflow: hidden;
  border-radius: 50px;
  border: 5px solid #fff;
  line-height: 80px;
  font-size: 28px;
  font-weight: 700;
}

.price span {
  position: absolute;
  font-size: 9px;
  bottom: -10px;
  left: 30px;
  font-weight: 400;
}

.entry-content {
  color: #323232;
}

.entry-content ul {
  margin: 0;
  padding: 0;
  list-style: none;
  text-align: center;
}

.entry-content li {
  border-bottom: 1px solid #E5E5E5;
  padding: 10px 0;
}

.entry-content li:last-child {
  border: none;
}


a {
  color: #fff
}
#hamad  {
  background: #53CFE9;
  padding: 10px 30px;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  text-align: center;
}

#sul {
  background: #4484c1;
  padding: 10px 30px;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  text-align: center;
}

#ahmed {
  background: #75DDD9;
  padding: 10px 30px;
  color: #fff;
  text-transform: uppercase;
  text-decoration: none;
  text-align: center;
}
.hot {
    position: absolute;
    top: -7px;
    background: #F80;
    color: #fff;
    text-transform: uppercase;
    z-index: 2;
    padding: 2px 5px;
    font-size: 9px;
    border-radius: 2px;
    left: 10px;
    font-weight: 700;
}
.basic .entry-title {
  background: #75DDD9;
}

.basic .entry-title > h3 {
  background: #44CBC6;
}

.basic .price {
  background: #44CBC6;
}

.standard .entry-title {
  background: #4484c1;
}

.standard .entry-title > h3 {
  background: #3772aa;
}

.standard .price {
  background: #3772aa;
}

.ultimite .entry-title > h3 {
  background: #DD4B5E;
}

.ultimite .entry-title {
  background: #F75C70;
}

.ultimite .price {
  background: #DD4B5E;
}

  </style>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/plans/index.blade.php ENDPATH**/ ?>