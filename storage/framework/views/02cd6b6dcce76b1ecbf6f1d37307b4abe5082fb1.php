<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="col-lg-12">
        <div class="row">
          <div class="col-md-9">
          <div class="card">
                <div class="card-header">
                    <h4 style="float: left">اضافة مستخدم </h4> 
                    <a href="#" style="float: right" class="btn btn-dark" 
                    data-toggle="modal" data-target="#addUser">
                    <i class="fa fa-plus"></i> اضافة مستخدم جديد </a></div>
                    <div class="card-body">
                        <table class="table table-bordered table-left">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>الاسم</th>
                                    <th>الايميل</th>
                                    <th>رقم الجوال</th>
                                    <th>الوظيفة</th>
                                    <th>الاجراءات</th>
                                </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key =>  $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr>
                                    <td><?php echo e($key+1); ?></td>
                                    <td><?php echo e($user->name); ?></td>
                                    <td><?php echo e($user->email); ?></td>
                                    <td><?php echo e($user->phone); ?></td>
                                    <td><?php if($user->is_admin == 1): ?> <h6 style="color: red">مدير</h6> 
                                      <?php else: ?> كاشير 
                                    <?php endif; ?></td>
                                    <td>
                                      <div class="btn-group">
                                        <a href="#"  class="btn btn-info btn-sm" data-toggle="modal" 
                                        data-target="#editUser<?php echo e($user->id); ?>"><i class="fas fa-ad">
                                        </i> تعديل</a>
                                        
                                        <a href="#" data-toggle="modal" 
                                        data-target="#deleteUser<?php echo e($user->id); ?>" class="btn btn-sm btn-danger"> <i class="fa fa-trash"></i> حذف </a>
                                      </div>
                                    </td>
                                </tr>

                                <!-- Modal of Edit User Detail -->

                            <div class="modal right fade" id="editUser<?php echo e($user->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="staticBackdropLabel">تعديل مستخدم</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                      
                                    </button>
                                    <?php echo e($user->id); ?>

                                  </div>
                                  <div class="modal-body">
                                    <form action="<?php echo e(route('users.update', $user->id)); ?>" method="post">
                                      <?php echo csrf_field(); ?> 
                                      <?php echo method_field('put'); ?>
                                      <div class="form-group">
                                        <label for="">الاسم</label>
                                        <input type="text" name="name" id="" value="<?php echo e($user->name); ?>" class="form-control">
                                      </div>
                                      <div class="form-group">
                                        <label for="">الايميل</label>
                                        <input type="email" name="email" id="" value="<?php echo e($user->email); ?>" class="form-control">
                                      </div>
                                      <!-- <div class="form-group">
                                        <label for="">رقم الجوال</label>
                                        <input type="text" name="phone" id="" value="<?php echo e($user->phone); ?>" class="form-control">
                                      </div> -->
                                      <div class="form-group">
                                        <label for="">كلمة السر</label>
                                        <input type="password" name="password" readonly value="<?php echo e($user->password); ?>" id="" class="form-control">
                                      </div>
                                      <!-- <div class="form-group">
                                        <label for="">تاكيد كلمة السر</label>
                                        <input type="password" name="confirm_password" id="" class="form-control">
                                      </div> -->
                                      <div class="form-group">
                                        <label for="">الوظيفة</label>
                                        <select name="is_admin" id="" class="form-control">
                                          <option value="1" <?php if($user->is_admin == 1): ?>
                                            selected
                                          <?php endif; ?>>مدير</option>
                                          <option value="2" <?php if($user->is_admin == 2): ?>
                                            selected
                                            <?php endif; ?>>كاشير</option>
                                        </select>
                                      </div>
                                      <div class="modal-footer">
                                        <button class="btn btn-warning btn-block">حفظ التغيرات</button>
                                      </div>
                                    </form>
                                  
                                  </div>
                                  
                                </div>
                              </div>
                            </div>


                            <div class="modal right fade" id="deleteUser<?php echo e($user->id); ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                              <div class="modal-dialog">
                                <div class="modal-content">
                                  <div class="modal-header">
                                    <h4 class="modal-title" id="staticBackdropLabel">حذف مستخدم</h5>
                                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close">
                                      
                                    </button>
                                    
                                  </div>
                                  <div class="modal-body">
                                    <form action="<?php echo e(route('users.destroy', $user->id)); ?>" method="post">
                                      <?php echo csrf_field(); ?> 
                                      <?php echo method_field('delete'); ?>
                                      <p> هل انت متاكد من حذف هذا المستخدم <?php echo e($user->name); ?> ؟</p>
                                   
                                      <div class="modal-footer">
                                        <button class="btn btn-default " data-dismiss="modal">إالغاء</button>
                                        <button type="submit" class="btn btn-danger">حذف</button>
                                      </div>
                                    </form>
                                  
                                  </div>
                                   
                                </div>
                              </div>
                            </div>


                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                        </table>
                    </div>
                
            </div>
          </div>
          <div class="col-md-3">
          <div class="card">
                <div class="card-header"><h4>بحث</h4></div>
                    <div class="card-body">
                       .......
                    </div>
                
            </div>
          </div>
        </div>
    </div>
</div>

<!-- model of adduser -->
<div class="modal right fade" id="addUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h4 class="modal-title" id="staticBackdropLabel">اضافة مستخدم</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?php echo e(route('users.store')); ?>" method="post">
          <?php echo csrf_field(); ?> 
          <div class="form-group">
            <label for="">الاسم</label>
            <input type="text" name="name" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">الايميل</label>
            <input type="email" name="email" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">رقم الجوال</label>
            <input type="text" name="phone" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">كلمة السر</label>
            <input type="password" name="password" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">تاكيد كلمة السر</label>
            <input type="password" name="confirm_password" id="" class="form-control">
          </div>
          <div class="form-group">
            <label for="">الوظيفة</label>
            <select name="is_admin" id="" class="form-control">
              <option value="1">مدير</option>
              <option value="2">كاشير</option>
            </select>
          </div>
          <div class="modal-footer">
            <button class="btn btn-primary btn-block">حفظ</button>
          </div>
        </form>
      
      </div>
       
    </div>
  </div>
</div>

    
  
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/hamadotb/Sites/new-invo/resources/views/users/index.blade.php ENDPATH**/ ?>