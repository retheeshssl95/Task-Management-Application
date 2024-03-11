
<?php $__env->startSection('main'); ?>
<?php echo $__env->yieldPushContent('scripts'); ?>
  
    <!--------main-content-------------> 
	<div class="main-content">
		<div class="row header"> 
        <!-- Start col => Page Header -->
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
            <h2 class="ml-lg-2">Home</h2>
          </div>
        <!-- End col => Page Header -->      
      </div><hr> 
      <div class="row greeting"> 
        <!-- Start col => Page Header -->
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
            <h3 class="ml-lg-2"><span class="welcome">Welcome! <?php echo e($data->name); ?></span></h3>
          </div>
        <!-- End col => Page Header -->      
      </div>
      
      <div class="table-wrapper">

          <!-- Start Col Add Project -->
            <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
              
            <!-- End Col Add Project -->            
          </div><hr>
          <!-- End 2nd row  -->
          <div class="table-title">    
            <div class="col-md-12">     
                <!-- Start Table -->
                  <table class="table">
                    <thead class="table-success">
                      <tr>
                        <th>Sl.No</th>
                        <th>Project</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class='table table-hover'> 
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php
                        $index = ($tasks->currentPage() - 1) * $tasks->perPage() + $loop->iteration;
                        $wordCount = str_word_count($task->description);

                      ?>
                      <tr>
                        <td><?php echo e($index); ?></td>
                        <td>
                          <a><?php echo e($task->project_name); ?></a><br>
                          <small>Due On: <?php echo e($task->end_date); ?></small>
                        <td>
                            <?php if($wordCount < 20): ?>
                                <?php echo e($task->description); ?>

                            <?php else: ?>
                                <?php echo e(Str::limit($task->description, 40)); ?>


                            <?php endif; ?>
                        </td>
                        <td><?php echo e($task->status); ?></td>
                        <td>
                          <a href="/tasks/<?php echo e($task->id); ?>/view" class="view"><i class="material-icons">visibility</i></a>
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                  <?php echo e($tasks->links()); ?>


                  
            </div>
          </div>

      </div>		    
    </div>




    

<?php $__env->stopSection(); ?>








       
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Task_Management_System\task_management\resources\views/task/dashboard.blade.php ENDPATH**/ ?>