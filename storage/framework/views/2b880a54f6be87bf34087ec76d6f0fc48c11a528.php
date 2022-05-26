

<?php if(auth()->guard()->guest()): ?>
<div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      تسجيل/ تسجيل الدخول
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        
        <?php if(Route::has('login')): ?>
        <li class="nav-item">
            <a class="nav-link" href="<?php echo e(route('login')); ?>"><?php echo e(__('Login')); ?></a>
        </li>
    <?php endif; ?>
       <?php if(Route::has('register')): ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('register')); ?>"><?php echo e(__('Register')); ?></a>
                </li>
            <?php endif; ?>

            <?php else: ?>
           
        
    </div>
    <?php endif; ?>
    <div class="dropdown">
    <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            
            <a href="<?php echo e(route('logout')); ?>"
               onclick="event.preventDefault();
                             document.getElementById('logout-form').submit();">
                <?php echo e(__('Logout')); ?>

            </a>

            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
                <?php echo csrf_field(); ?>
            </form>
        
      </div>
    </div>
  </div>



  


<?php /**PATH /Users/hamadotb/Sites/invo/resources/views/layouts/includes/navBar.blade.php ENDPATH**/ ?>