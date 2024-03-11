<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
      <title>Task Management</title>
 	  
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

	    <!-- Bootstrap CSS -->
        
	    <!----css3---->    
      <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>"/>
      
		  <!--google fonts -->
	      <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	    <!--google material icon-->
        <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">
  </head>
  
  <body>
    <div class="wrapper">
      <div class="body-overlay"></div>>
        <!----- Sidebar -----> 
       <nav id="sidebar">
         <div class="sidebar-header">
            <h2 class="admin">ADMIN</h2>
          </div>      
          <ul class="list-unstyled component">
            <li class="active left"><a href="<?php echo e(url('/dashboard')); ?>" class="dashboard"><i class="material-icons">dashboard</i> <span>Dashboard</span></a></li>
            <li class="left"><a href="<?php echo e(url('/tasks/add')); ?>"><i class="material-icons">library_add</i><span>New Project</span></a></li>  
            <li class="left"><a href="<?php echo e(url('/tasks/list')); ?>"><i class="material-icons">format_list_bulleted</i><span>Project List</span></a></li>                      
            
            
            
            
          </ul>  
          <div class="logout">
          <span class="#"><a href="<?php echo e(url('/logout')); ?>"><i class="material-icons">logout</i><span>Logout</span></a></span>
          </div>         
        </nav>     
        <!----- Sidebar End ----->

			
        <!----- Page-content Top-navbar Design ----->
        <div id="content">	   
          <div class="top-navbar">
            <!-- Start XP-Topbar -->
              <div class="xp-topbar">
                <!-- Start XP Row -->
                  <div class="row"> 
                      <!-- Start XP Col -->
                        <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                          <div class="xp-menubar">
                            <span class="material-icons">signal_cellular_alt</span>
                          </div>
                        </div> 
                      <!-- End XP Col -->

                      <!-- Start XP Col -->
                        <div class="col-md-5 col-lg-3 order-3 order-md-2 d-flex justify-content-lg-start justify-content-center">
                          <div class="xp-task">
                            <h5>Task Management System</h5>
                          </div>
                        </div> 
                      <!-- End XP Col -->

                      <!-- Start XP Col -->
                      <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3 d-flex justify-content-lg-end justify-content-center">
                        <div class="xp-profilebar text-right">
                          <nav class="navbar p-0"> 
                            <ul class="nav navbar-nav flex-row ml-auto"> 
                              <li class="nav-item dropdown">
                                
                                <h6><?php echo e($data->name); ?></h6>
                              </li>
                              <!-- User Profile  -->
                              <li class="nav-item dropdown">
                                <a class="nav-link" href="#" data-toggle="dropdown">
                                  <img src="/img/logo.svg" style="width:40px; border-radius:50%;"/>
                                  <span class="xp-user-live"></span>
                                </a>
                                
                              </li>
                            </ul>
                          </nav>
                        </div>
                      </div>
                      <!-- End XP Col -->
                  </div> 
                <!-- End XP Row -->
              </div>
            <!-- End XP-Topbar -->
          </div>
          <!-- Start Alert Message -->  
            <?php if($message=Session::get('success')): ?>
              <div class="alert alert-success alert-dismissible fade show ">
                <strong>Success </strong><?php echo e($message); ?>

                <button type='button' class="btn-close" data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
            <?php endif; ?>
             <?php if($message=Session::get('fail')): ?>
              <div class="alert alert-danger alert-dismissible fade show ">
                <strong>Wrong </strong><?php echo e($message); ?>

                <button type='button' class="btn-close" data-bs-dismiss='alert' aria-label='Close'></button>
              </div>
            <?php endif; ?>
            <!-- End Alert Message -->  

            <?php echo $__env->yieldContent('main'); ?>
		      
            <!-- Footer -->       
            <section class="">
              <footer class="footer">
                <div class="container-fluid">
                  <div class="footer-in">
                    <p class="mb-0">Copyright &copy 2024 <a href="#">lasyldesigns</a> .All rights reserved.</p>
                  </div>
                </div>
              </footer>
            </section>
          <!----- Page-content Top-navbar Design End -----> 
        </div>
    </div>


    
  

  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <script type="text/javascript">     
		$(document).ready(function(){
		    $(".xp-menubar").on('click',function(){
        $('#sidebar').toggleClass('active');
        $('#content').toggleClass('active');
		  });
		  
		  $(".xp-menubar,.body-overlay").on('click',function(){
        $('#sidebar,.body-overlay').toggleClass('show-nav');
		  });  
		}); 
  </script>


    

 
  
  



  </body>
  
  </html>


<?php /**PATH D:\Laravel Project\Task_Management_System\task_management\resources\views/layouts/app.blade.php ENDPATH**/ ?>