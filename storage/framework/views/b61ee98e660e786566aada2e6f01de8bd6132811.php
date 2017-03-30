<?php $__env->startSection('content'); ?>
<section>
   <div id="head">
            <div class="line">
                  <h1>House List</h1>
                  <table class="table">
                        <tr>
                           <td>Sl</td>
                           <td>House Type</td>
                           <td>House Status</td>
                           <td>Address</td>
                           <td>City</td>
                           <td>Area</td>
                           <td>Cost(Monthly)</td>
                           <td>Flat Number</td>
                           <td>Action</td>

                        </tr>
                        <?php $i=1; ?>
                        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $row): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                           <tr>
                              <td><?php echo e($i); ?></td>
                              <td><?php echo e($row->house_type); ?></td>
                              <td><?php echo e($row->house_status); ?></td>
                              <td><?php echo e($row->address); ?></td>
                              <td><?php echo e($row->city); ?></td>
                              <td><?php echo e($row->area); ?></td>
                              <td><?php echo e($row->cost); ?></td>
                              <td><?php echo e($row->flat_number); ?></td>
                              <td>
                                 
                                 

                                 <a href="" class="btn btn-primary">Reserve</a>

                                 <a href="" class="btn btn-success">Rent</a>
                                 
                                 
                              </td>
                        <?php $i+=1; ?>      

                           </tr>
                       <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
               </table>
            </div>
         </div>
</section>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('master_for_user', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>