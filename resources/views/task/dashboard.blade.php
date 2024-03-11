@extends('layouts.app')
@section('main')
@stack('scripts')
  
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
            <h3 class="ml-lg-2"><span class="welcome">Welcome! {{$data->name}}</span></h3>
          </div>
        <!-- End col => Page Header -->      
      </div>
      
      <div class="table-wrapper">

          <!-- Start Col Add Project -->
            <div class="col-sm-12 p-0 d-flex justify-content-lg-end justify-content-center">
              {{-- <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal">
                <i class="material-icons">&#xE147;</i><span>Add New Project</span></a>
            </div> --}}
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
                    @foreach ($tasks as $task)
                      @php
                        $index = ($tasks->currentPage() - 1) * $tasks->perPage() + $loop->iteration;
                        $wordCount = str_word_count($task->description);

                      @endphp
                      <tr>
                        <td>{{$index}}</td>
                        <td>
                          <a>{{$task->project_name}}</a><br>
                          <small>Due On: {{$task->end_date}}</small>
                        <td>
                            @if($wordCount < 20)
                                {{ $task->description }}
                            @else
                                {{ Str::limit($task->description, 40) }}

                            @endif
                        </td>
                        <td>{{$task->status}}</td>
                        <td>
                          <a href="/tasks/{{$task->id}}/view" class="view"><i class="material-icons">visibility</i></a>
                        </td>
                      </tr>
                    @endforeach
                    </tbody>
                  </table>
                  {{ $tasks->links() }}

                  {{-- <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                      <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                      </ul>
                  </div>     --}}
            </div>
          </div>

      </div>		    
    </div>




    

@endsection








       