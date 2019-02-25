<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Tasks')
<!-- Page title end -->

<!-- Page body title -->
@section('body-title')
    @yield('page-title') List
@endsection
<!-- Page body title end -->

<!-- Page body content -->
@section('body-content')
            
<!-- Row Starts -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12">

        <!-- Pending List Starts -->
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Pending List</h4>
                <a href="#collapse1" class="custom-icon" data-toggle="collapse" data-parent="#accordion" data-placement="top">
                    <i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                </a>
            </div>
            <div class="panel-body panel-collapse collapse in" id="collapse1">
                <div id="dt_example" class="example_alt_pagination clearfix datatable-index table-responsive">
                    <!-- <table class="table" id="data-table">     -->
                    @if( count($taskPendingData) > 0)
                    <table class="table table-bordered table-dark table-striped">
                        <thead>
                            <tr>
                                <th style="width:20%; text-align: center;">CATEGORY</th>
                                <th style="width:40%; text-align: center;">NAME</th>
                                <th style="width:20%; text-align: center;">WORKING DATE</th>
                                <th style="width:5%; text-align: center;">STATUS</th>
                                <th style="width:15%; text-align: center;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($taskPendingData as $pendingkRows)
                            <tr class="gradeA">

                                <td align="center">{{ $pendingkRows->category->category_name }}</td>

                                <td align="center">{{ $pendingkRows->name }}</td>
                                
                                <td align="center">{{ $pendingkRows->working_date }}</td>

                                <td align="center">
                                    <form action="{{ route('task.status', $pendingkRows->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">                                                    
                                        
                                        <select name="public_status" class="btn btn-warning btn-rounded btn-transparent" onchange="this.form.submit()">
                                            <option value="1"{{ ($pendingkRows->public_status == '1')?'selected="selected"':''}}>Pending</option>
                                            <option value="2"{{ ($pendingkRows->public_status == '2')?'selected="selected"':''}}>Progress</option>                                                        
                                        </select>
                                    </form>
                                </td>
                                
                                <td align="center">
                                
                                <form action="{{ route('task.destroy', $pendingkRows->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">   
                                    
                                    <a href="{{ route('task.show', $pendingkRows->id) }}" class="btn btn-info"><i class="fa fa-info"></i></a>
                                    <a href="{{ route('task.edit', $pendingkRows->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                    <button type="submit" value="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Task?');"><i class="fa fa-trash-o"></i></button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3 align="center" style="color:red;">No list Found !</h3>
                    @endif
                </div>
                <div>
                    <strong style="float: left;">
                    Showing {{ $taskPendingData->firstItem() }}
                    to {{ $taskPendingData->lastItem() }} 
                    of {{ $taskPendingData->total() }} entries
                    </strong>
                    <span style="float: right;">{{ $taskPendingData->links() }}</span><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Pending List Ends -->
<!-- Progress List Starts -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12"> 
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Progress List</h4>
                <a href="#collapse2" class="custom-icon" data-toggle="collapse" data-parent="#accordion" data-placement="top">
                    <i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                </a>
            </div>
            <div class="panel-bodypanel-collapse collapse" id="collapse2">
                <div id="dt_example" class="example_alt_pagination clearfix datatable-index table-responsive">
                    <!-- <table class="table" id="data-table">     -->
                    @if( count($taskProgressData) > 0)
                    <table class="table table-bordered table-dark table-striped">
                        <thead>
                            <tr>
                                <th style="width:20%; text-align: center;">CATEGORY</th>
                                <th style="width:30%; text-align: center;">NAME</th>
                                <th style="width:20%; text-align: center;">WORKING DATE</th>
                                <th style="width:15%; text-align: center;">STATUS</th>
                                <th style="width:15%; text-align: center;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($taskProgressData as $progressRows)
                            <tr class="gradeA">

                                <td align="center">{{ $progressRows->category->category_name }}</td>

                                <td align="center">{{ $progressRows->name }}</td>
                                
                                <td align="center">{{ $progressRows->working_date }}</td>

                                <td align="center">
                                    <form action="{{ route('task.status', $progressRows->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put"> 

                                        <select name="public_status" class="btn btn-warning btn-rounded btn-transparent" onchange="this.form.submit()">
                                            <option value="1"{{ ($progressRows->public_status == '1')?'selected="selected"':''}}>Pending</option>
                                            <option value="2"{{ ($progressRows->public_status == '2')?'selected="selected"':''}}>Progress</option>
                                            <option value="0"{{ ($progressRows->public_status == '0')?'selected="selected"':''}}>Complete</option>                                                        
                                        </select>
                                    </form>
                                </td>
                                
                                <td align="center">
                                
                                <form action="{{ route('task.destroy', $progressRows->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">   
                                    
                                    <a href="{{ route('task.show', $progressRows->id) }}" class="btn btn-info"><i class="fa fa-info"></i></a>
                                    <a href="{{ route('task.edit', $progressRows->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                    <button type="submit" value="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this Task?');"><i class="fa fa-trash-o"></i></button>
                                </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3 align="center" style="color:red;">No list Found !</h3>
                    @endif
                </div>
                <div>
                    <strong style="float: left;">
                    Showing {{ $taskProgressData->firstItem() }}
                    to {{ $taskProgressData->lastItem() }} 
                    of {{ $taskProgressData->total() }} entries
                    </strong>
                    <span style="float: right;">{{ $taskProgressData->links() }}</span><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Progress List Ends -->
<!-- Complete List Starts -->
<div class="row">
    <div class="col-md-12 col-sm-12 col-xs-12"> 
        
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Complete List</h4>
                <a href="#collapse3" class="custom-icon" data-toggle="collapse" data-parent="#accordion" data-placement="top">
                    <i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                </a>                            
            </div>
            <div class="panel-body panel-collapse collapse" id="collapse3">
                <div id="dt_example" class="example_alt_pagination clearfix datatable-index table-responsive">
                    @if( count($taskCompleteData) > 0 )
                    <table class="table table-bordered table-dark table-striped">    
                        <thead>
                            <tr>
                                <th style="width:20%; text-align: center;">CATEGORY</th>
                                <th style="width:55%; text-align: center;">NAME</th>
                                <th style="width:20%; text-align: center;">WORKING DATE</th>
                                <th style="width:5%; text-align: center;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($taskCompleteData as $completeRows)
                            <tr class="gradeA">

                                <td align="center">{{ $completeRows->category->category_name }}</td>

                                <td align="center">{{ $completeRows->name }}</td>
                                
                                <td align="center">{{ $completeRows->working_date }}</td>
                                                                            
                                <td align="center"> 
                                    <a href="{{ route('task.show', $completeRows->id) }}" class="btn btn-primary"><i class="fa fa-info"></i></a> 
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3 align="center" style="color:red;">No list Found !</h3>
                    @endif
                </div>
                <div>
                    <strong style="float: left;">
                    Showing {{ $taskCompleteData->firstItem() }}
                    to {{ $taskCompleteData->lastItem() }} 
                    of {{ $taskCompleteData->total() }} entries
                    </strong>
                    <span style="float: right;">{{ $taskCompleteData->links() }}</span><br><br>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Complete Ends -->
<!-- Row Ends -->

@endsection