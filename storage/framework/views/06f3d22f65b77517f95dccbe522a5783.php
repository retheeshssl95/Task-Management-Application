
<?php $__env->startSection('main'); ?>  
    <!--------main-content-------------> 
		<div class="main-content">
			<div class="row search">  
        <!-- Start col => Page Header -->
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
            <h2 class="ml-lg-2">Task List</h2>
          </div>
        <!-- End col => Page Header -->

        <!-- Start col => Searchbar -->
          <div class="col-sm-6 p-0 d-flex justify-content-lg-end justify-content-center">
            <div class="xp-searchbar">
              <form>
                <div class="input-group">
                  <input type="search" class="form-control" placeholder="Search">
                  <div class="input-group-append">
                    <button class="btn" type="submit" id="button-addon2">GO</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        <!-- End col => Searchbar -->
      </div> 
        <div class="table-wrapper">
          <!-- Start 2nd row  -->
          <div class="row addproject">   
            <!-- Start Col Add Project -->
            <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
              <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                <i class="material-icons">&#xE147;</i><span>Add New Project</span></a>
            </div>
            <!-- End Col Add Project -->            
          </div> <hr>
          <!-- End 2nd row  -->
          <div class="table-title">    
            <div class="col-md-12">     
                <!-- Start Table -->
                  <table class="table">
                    <thead>
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
                    <?php $__currentLoopData = $tasks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $task): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php
                        $index = ($tasks->currentPage() - 1) * $tasks->perPage() + $loop->iteration;
                      ?>
                      <tr>
                        <td><?php echo e($index); ?></td>
                        <td><?php echo e($task->project_name); ?></td>
                        <td><?php echo e($task->description); ?></td>
                        <td><?php echo e($task->start_date); ?></td>
                        <td><?php echo e($task->end_date); ?></td>
                        <td><?php echo e($task->status); ?></td>
                        <td>
                        <a href="/tasks/<?php echo e($task->id); ?>/edit" class="btn btn-outline-primary"><b class="bi bi-eye"> </b></a>
                        <a href="/tasks/<?php echo e($task->id); ?>/delete" class="btn btn-outline-danger" onclick='return confirm ("Are you sure you want to Delete?")'><b class="bi bi-trash3-fill"> </b></a>
                          
                          
                        </td>
                      </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                  </table>
                 
                  <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                      <ul class="pagination">
                        <?php echo e($tasks->links()); ?>

                      </ul>
                  </div>
            </div>
            
          </div>
		  </div>		    
		</div>

    <!-- Add Employee Modal HTML -->
          <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
              <div class="modal-content">
                <form>
                  <div class="modal-header">
                    <h4 class="modal-title">Add Employee</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  </div>
                  <div class="modal-body">
                    <div class="form-group">
                      <label>Name</label>
                      <input type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Email</label>
                      <input type="email" class="form-control" required>
                    </div>
                    <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" required></textarea>
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-success" value="Add">
                  </div>
                </form>
              </div>
            </div>
          </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('.welcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel Project\Task_Management_System\task_management\resources\views/Templates/list_project.blade.php ENDPATH**/ ?>