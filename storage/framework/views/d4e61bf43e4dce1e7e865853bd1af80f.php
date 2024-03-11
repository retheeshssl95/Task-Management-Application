
<?php $__env->startSection('main'); ?>  
    <!--------main-content-------------> 
		<div class="main-content">
			<div class="row header">  
        <!-- Start col => Page Header -->
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
            <h2 class="ml-lg-2">Task List</h2>
          </div>
        <!-- End col => Page Header -->
      </div> 
      <div class="table-wrapper">
          <!-- Start col => Searchbar -->
          <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
            <div class="xp-searchbar search">
              <form action="" method="get">
                <div class="input-group">
                  <input type="text" name="query" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn" type="submit" id="button-addon2">GO</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        <!-- End col => Searchbar -->
          <div class="table-title">    
            <div class="col-md-12">     
                <!-- Start Table -->
                  <table class="table">
                    <thead class="table-success">
                      <tr>
                        <th>Sl.No</th>
                        <th>Project Name</th>
                        <th>Description</th>
                        <th>Started</th>
                        <th>Due Date</th>
                        <th>Status</th>
                        <th>Actions</th>
                      </tr>
                    </thead>
                    <tbody class='table table-hover'> 
                    <?php if($tasks->isEmpty()): ?>
                      <p class='alert alert-danger'>No results found.</p>
                    <?php else: ?>
                      <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>  
                        <?php
                          $index = ($tasks->currentPage()- 1) * $tasks->perPage() + $loop->iteration;
                          $wordCount = str_word_count($task->description);
                        ?>
                        <tr>
                        <td><?php echo e($index); ?></td>
                          <td><a href="/tasks/<?php echo e($task->id); ?>/view"><?php echo e($task->project_name); ?></a></td>
                          <td>
                            <?php if($wordCount < 10): ?>
                                <?php echo e($task->description); ?>

                            <?php else: ?>
                                <?php echo e(Str::limit($task->description, 20)); ?>


                            <?php endif; ?>
                          </td>
                          <td><?php echo e($task->start_date); ?></td>
                          <td><?php echo e($task->end_date); ?></td>
                          <td><?php echo e($task->status); ?></td>
                          <td>
                            <a href="/tasks/<?php echo e($task->id); ?>/edit" class="edit"><i class="material-icons">&#xE254;</i></a>
                            <a href="/tasks/<?php echo e($task->id); ?>/delete" class="delete" onclick='return confirm ("Are you sure you want to Delete?")'><i class="material-icons">&#xE872;</i></a>
                          </td>
                        </tr>
                        
                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    <?php endif; ?>
                    </tbody>
                 
                  </table>
                 <?php echo e($tasks->links()); ?>


                  
            </div>
          </div>
		  </div>		    
		</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Task_Management_System\task_management\resources\views/task/list_project.blade.php ENDPATH**/ ?>