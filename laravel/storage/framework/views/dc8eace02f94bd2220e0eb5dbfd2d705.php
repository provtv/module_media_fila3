<!-- Example DataTable for Dashboard Demo-->
<div class="card mb-4">
    <div class="card-header">Personnel Management</div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID<br />Handle</th>
                    <th>First Name<br />LastName</th>
                    <th>last </th>
                    
                </tr>
            </thead>
            <tbody>
                <?php $__currentLoopData = $_theme->lastLoggedUsers(10); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($user->id); ?><br /><?php echo e($user->handle); ?></td>
                        <td><?php echo e($user->first_name); ?><br /><?php echo e($user->last_name); ?></td>
                        <td><?php echo e($user->last_login_at); ?><br />
                            <?php echo e($user->last_login_ip); ?>

                        </td>
                    </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </tbody>
        </table>
    </div>
</div>
<?php /**PATH /var/www/html/_bases/base_fixcity_fila3/laravel/Modules/AI/resources/views/admin/dashboard/item.blade.php ENDPATH**/ ?>