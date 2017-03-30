
<section>
   <div id="head">
            <div class="line">

               <!-- Form for updating house table -->
               <h3>House/Edit</h3>
                  <form action="<?php echo e(route('postedithouse', $data->id)); ?>" method="POST" class="form-inline">

                       <?php echo e(csrf_field()); ?>


                        
                        <input type="text" name="house_type" class="form-control"
                        value="<?php echo e($data->house_type); ?>" >

                        <input type="text" name="status"  class="form-control" value="<?php echo e($data->house_status); ?>" >

                        <input type="text" name="address"  class="form-control" value="<?php echo e($data->address); ?>" >

                        <input type="text" name="city"  class="form-control" value="<?php echo e($data->city); ?>">

                        <input type="text" name="area" class="form-control" value="<?php echo e($data->area); ?>">

                        <input type="text" name="cost"  class="form-control" value="<?php echo e($data->cost); ?>">

                        <input type="text" name="flat_number"  class="form-control" value="<?php echo e($data->flat_number); ?>"> 
                
                        

                        
                         
                        <input type="submit"  class="btn btn-primary" value="Update"> 

                     </form>

                 
            </div>
         </div>
</section>

