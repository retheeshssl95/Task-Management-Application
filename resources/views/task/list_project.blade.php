@extends('layouts.app')
@section('main')  
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
                    @if ($tasks->isEmpty())
                      <p class='alert alert-danger'>No results found.</p>
                    @else
                      @foreach ($tasks as $task)  
                        @php
                          $index = ($tasks->currentPage()- 1) * $tasks->perPage() + $loop->iteration;
                          $wordCount = str_word_count($task->description);
                        @endphp
                        <tr>
                        <td>{{$index}}</td>
                          <td><a href="/tasks/{{$task->id}}/view">{{$task->project_name}}</a></td>
                          <td>
                            @if ($wordCount < 10)
                                {{ $task->description }}
                            @else
                                {{ Str::limit($task->description, 20) }}

                            @endif
                          </td>
                          <td>{{$task->start_date}}</td>
                          <td>{{$task->end_date}}</td>
                          <td>{{$task->status}}</td>
                          <td>
                            <a href="/tasks/{{$task->id}}/edit" class="edit"><i class="material-icons">&#xE254;</i></a>
                            <a href="/tasks/{{$task->id}}/delete" class="delete" onclick='return confirm ("Are you sure you want to Delete?")'><i class="material-icons">&#xE872;</i></a>
                          </td>
                        </tr>
                        
                      @endforeach
                    @endif
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