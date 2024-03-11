
<?php $__env->startSection('main'); ?>
  
    <!--------main-content-------------> 
	<div class="main-content">
		<div class="row search"> 
        <!-- Start col => Page Header -->
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
            <h2 class="ml-lg-2">Edit Task</h2>
          </div>
        <!-- End col => Page Header -->      
      </div><hr> 
      
      <div class="table-wrapper">

           <div class="col-sm-12 ">       
            <form action="/tasks/<?php echo e($tasks->id); ?>/update" method="POST" enctype="multipart/form-data">
              <?php echo csrf_field(); ?>
              <?php echo method_field('put'); ?>
                <div class="row">
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="project_name" class="form-label">Project Name</label>
                        <input type="text" name="project_name" id="project_name" value="<?php echo e(old('project_name',$tasks->project_name)); ?>"
                        class="form-control <?php if($errors->has('project_name')): ?> <?php echo e('is-invalid'); ?> <?php endif; ?>">
                        <?php if($errors->has('project_name')): ?>
                          <div class='invalid-feedback '><?php echo e($errors->first("project_name")); ?></div> 
                        <?php endif; ?>   
                      </div>
                    </div> 
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="status" class="form-label">Status</label>
                        <input type="text" name="status" id="status" value="<?php echo e(old('status',$tasks->status)); ?>"
                        class="form-control <?php if($errors->has('status')): ?> <?php echo e('is-invalid'); ?> <?php endif; ?>">
                        <?php if($errors->has('status')): ?>
                          <div class='invalid-feedback '><?php echo e($errors->first("status")); ?></div> 
                        <?php endif; ?>   
                        
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="start_date" class="form-label ">Start Date</label>
                        <input type="date" name="start_date" id="start_date" 
                        class="form-control " value="<?php echo e(old('start_date',$tasks->start_date)); ?>">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="end_date" class="form-label ">End Date</label>
                        <input type="date" name="end_date" id="end_date" 
                        class="form-control" value="<?php echo e(old('end_date',$tasks->end_date)); ?>">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="project_manager" class="form-label ">Project Manager</label>
                        <input type="text" name="project_manager" id="project_manager" value="<?php echo e(old('project_manager',$tasks->project_manager)); ?>"
                        class="form-control <?php if($errors->has('project_manager')): ?> <?php echo e('is-invalid'); ?> <?php endif; ?>">
                        <?php if($errors->has('project_manager')): ?>
                          <div class='invalid-feedback '><?php echo e($errors->first("project_manager")); ?></div> 
                        <?php endif; ?>   
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="project_team_member" class="form-label ">Project Team Members</label>
                          <input type="text" name="project_team_member" id="project_team_member" 
                          value="<?php echo e(old('project_team_member',$tasks->project_team_member)); ?>" 
                          class="form-control <?php if($errors->has('project_team_member')): ?> <?php echo e('is-invalid'); ?> <?php endif; ?>">
                          <?php if($errors->has('project_team_member')): ?>
                            <div class='invalid-feedback '><?php echo e($errors->first("project_team_member")); ?></div> 
                          <?php endif; ?>   
                        </div>
                    </div>
                </div>   

                <div class="row">
                    <div class="col-sm-12">
                      <div class='form-group'>
                      <label for="description" class="control-label">Description</label>
                      <textarea name="description" id="description" cols="30" rows="10" 
                      class="summernote form-control <?php if($errors->has('description')): ?> <?php echo e('is-invalid'); ?> <?php endif; ?>"><?php echo e(old('description', $tasks->description)); ?></textarea>
                      <?php if($errors->has('description')): ?>
                        <div class='invalid-feedback '><?php echo e($errors->first("description")); ?></div> 
                      <?php endif; ?>   
                      </div>
                    </div>                  
                </div><hr>

                <div>
                    <button type="submit" class="btn btn-outline-success ">Update Project</button>
                    <button type="reset" class="btn btn-outline-danger ">Clear All</button>                   
                </div>
            </form>
        </div>   

      </div>		    
    </div>
  

<?php $__env->stopSection(); ?>








        
        

         

     
  


<?php echo $__env->make('.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Task_Management_System\task_management\resources\views/Templates/edit_task.blade.php ENDPATH**/ ?>