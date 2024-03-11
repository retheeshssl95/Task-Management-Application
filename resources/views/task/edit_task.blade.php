@extends('layouts.app')
@section('main')
  
    <!--------main-content-------------> 
	<div class="main-content">
		<div class="row header"> 
        <!-- Start col => Page Header -->
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
            <h2 class="ml-lg-2">Edit Task</h2>
          </div>
        <!-- End col => Page Header -->      
      </div><hr> 
      
      <div class="table-wrapper">

           <div class="col-sm-12 ">       
            <form action="/tasks/{{$tasks->id}}/update" method="POST" enctype="multipart/form-data">
              @csrf
              @method('put')
                <div class="row">
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="project_name" class="form-label">Project Name</label>
                        <input type="text" name="project_name" id="project_name" value="{{old('project_name',$tasks->project_name)}}"
                        class="form-control @if($errors->has('project_name')) {{'is-invalid'}} @endif">
                        @if($errors->has('project_name'))
                          <div class='invalid-feedback '>{{$errors->first("project_name")}}</div> 
                        @endif   
                      </div>
                    </div> 
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="status" class="form-label">Status</label>
                        {{-- <input type="text" name="status" id="status" value="{{old('status',$tasks->status)}}"
                        class="form-control @if($errors->has('status')) {{'is-invalid'}} @endif">
                        @if($errors->has('status'))
                          <div class='invalid-feedback '>{{$errors->first("status")}}</div> 
                        @endif    --}}
                        <select id="status" name='status' class="form-control">
                          <option value="Pending">Pending</option>
                          <option value="In Progress">In Progress</option>
                          <option value="Completed">Completed</option>
                        </select>
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="start_date" class="form-label ">Start Date</label>
                        <input type="date" name="start_date" id="start_date" 
                        class="form-control " value="{{old('start_date',$tasks->start_date)}}">
                      </div>
                    </div>
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="end_date" class="form-label ">End Date</label>
                        <input type="date" name="end_date" id="end_date" 
                        class="form-control" value="{{old('end_date',$tasks->end_date)}}">
                      </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                      <div class='form-group'>
                        <label for="project_manager" class="form-label ">Project Manager</label>
                        <input type="text" name="project_manager" id="project_manager" value="{{old('project_manager',$tasks->project_manager)}}"
                        class="form-control @if($errors->has('project_manager')) {{'is-invalid'}} @endif">
                        @if($errors->has('project_manager'))
                          <div class='invalid-feedback '>{{$errors->first("project_manager")}}</div> 
                        @endif   
                      </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                          <label for="project_team_member" class="form-label ">Project Team Members</label>
                          <input type="text" name="project_team_member" id="project_team_member" 
                          value="{{old('project_team_member',$tasks->project_team_member)}}" 
                          class="form-control @if($errors->has('project_team_member')) {{'is-invalid'}} @endif">
                          @if($errors->has('project_team_member'))
                            <div class='invalid-feedback '>{{$errors->first("project_team_member")}}</div> 
                          @endif   
                        </div>
                    </div>
                </div>   

                <div class="row">
                    <div class="col-sm-12">
                      <div class='form-group'>
                      <label for="description" class="control-label">Description</label>
                      <textarea name="description" id="description" cols="30" rows="10" 
                      class="summernote form-control @if($errors->has('description')) {{'is-invalid'}} @endif">{{old('description', $tasks->description)}}</textarea>
                      @if($errors->has('description'))
                        <div class='invalid-feedback '>{{$errors->first("description")}}</div> 
                      @endif   
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
  

@endsection








        {{-- <div class="col-sm-8">
            <form action="#" method="post">
                <div class="row mb-3 ">
                    <div class="col-sm-12">
                        <label for="name" class="form-label ">Product Name</label>
                        <input type="text" name="name" id="name" class="form-control" placeholder ="Enter Product Name">
                    </div>                  
                </div>
                <div class="row mb-3 ">
                    <div class="col-sm-6">
                        <label for="mrp" class="form-label ">M.R.P</label>
                        <input type="text" name="mrp" id="mrp" class="form-control" placeholder ="Enter Maximum Retail Price">
                    </div>
                    <div class="col-sm-6">
                        <label for="price" class="form-label ">Selling Price</label>
                        <input type="text" name="price" id="price" class="form-control" placeholder ="Enter Selling Price">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="col-sm-12">
                        <label for="description" class="form-label ">Description</label>
                        <textarea name="description" id="description"  style="resize: none; height: 150px;" class="form-control" placeholder ="Enter Description"></textarea>
                    </div>                  
                </div>
                <div class="row mb-3 ">
                    <div class="col-sm-12">
                        <label for="image" class="form-label ">Product Image</label>
                        <input type="file" name="image" id="image" class="form-control">
                    </div>                  
                </div>
                <div>
                    <button type="submit" class="btn btn-outline-success ">Save Product</button>
                    <button type="reset" class="btn btn-outline-danger ">Clear All</button>                   
                </div>
            </form>
          </div>

        <div class="row">   --}}
        {{-- <!-- Start col => Page Header -->
          <div class="col-sm-12 p-0 d-flex justify-content-lg-start justify-content-center">
        
  
           <!-- Add Modal HTML -->
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
            
          </div>
          </div> --}}

         

     
  

