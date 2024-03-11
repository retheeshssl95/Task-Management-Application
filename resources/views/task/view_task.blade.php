@extends('layouts.app')
@section('main')
  
    <!--------main-content-------------> 
	<div class="main-content">
		<div class="row header"> 
        <!-- Start col => Page Header -->
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
            <h2 class="ml-lg-2">View Task</h2>
          </div>
        <!-- End col => Page Header -->      
      </div><hr> 
      
      <div class="table-wrapper">
        <div class="row body">
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
            <div class="col-sm-12">
              <h5>Project Name</h5>
              <p>{{ $tasks->project_name }}</p>
              <h5>Description</h5>
              <p>{{ $tasks->description }}</p>
            </div>
          </div>
          
          <div class="col-sm-6 p-0 d-flex justify-content-lg-start justify-content-center">
          <div class="col-sm-12">
              <h5>Project Start Date</h5>
              <p>{{ $tasks->start_date }}</p>
              <h5>project End Date</h5>
              <p>{{ $tasks->end_date }}</p>
              <h5>Status</h5>
              <p>{{ $tasks->status }}</p>
              <h5>Project Manager</h5>
              <p>{{ $tasks->project_manager }}</p>
              <h5>Project Team Members</h5>
              <p>{{ $tasks->project_team_member }}</p>
            </div>
          </div>
          
        </div>
      </div>	

  </div>
  

@endsection








       