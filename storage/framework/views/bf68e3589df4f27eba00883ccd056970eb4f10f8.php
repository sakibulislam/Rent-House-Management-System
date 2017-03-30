<?php $__env->startSection('content'); ?>
<section>
   <div id="head">
            <div class="line">

                  <!-- Form for updating house table -->
                  <form action="<?php echo e(route('storehouse')); ?>" method="POST" class="form-inline">

                       <?php echo e(csrf_field()); ?>


                        
                        <input type="text" name="house_type" class="form-control"
                        placeholder="Please enter house type" >

                        <input type="text" name="address"  class="form-control" placeholder="Please enter house address" >

                        <input type="text" name="city"  class="form-control" placeholder="Please enter city">

                        <input type="text" name="area" class="form-control" placeholder="Please enter area">

                        <input type="text" name="cost"  class="form-control" placeholder="Please enter house cost">

                        <input type="text" name="flat_number"  class="form-control" placeholder="Please enter flat number"> 
                
                        

                        
                         
                        <input type="submit"  class="btn btn-primary" value="Update"> 

                     </form>

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
                                 
                                 

                                 <a href="<?php echo e(route('getedithouse', $row->id)); ?>" class="btn btn-warning">Edit</a>

                                 <form action="<?php echo e(route('deletehouse', $row->id)); ?>" method="POST" style="display: inline;" onsubmit="
                                 if(confirm('Delete? Are you sure?'))
                                 {
                                    return true
                                 }
                                 else
                                 {
                                    return false
                                 }; ">

                                 

                                 <?php echo e(csrf_field()); ?>


                                 <button type="submit" class="btn btn-danger">Delete</button>
                     
                                    
                                 </form>
                        <!-- <a href="<?php echo e(route('deletehouse')); ?>" class="btn btn-danger">Delete</a> -->
                                 
                                 
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