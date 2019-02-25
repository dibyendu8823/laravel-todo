<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Users')
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

        <!-- Manager List Starts -->
        <div class="panel">
            <div class="panel-heading">
                <h4 class="panel-title">Manager List</h4>
                <a href="#collapse1" class="custom-icon" data-toggle="collapse" data-parent="#accordion" data-placement="top">
                    <i class="fa fa-plus"></i><i class="fa fa-minus"></i>
                </a>
            </div>
            <div class="panel-body panel-collapse collapse in" id="collapse1">
                <div id="dt_example" class="example_alt_pagination clearfix datatable-index table-responsive">
                    <!-- <table class="table" id="data-table">     -->
                    @if( count($users) > 0)
                    <table class="table table-bordered table-dark table-striped">
                        <thead>
                            <tr>
                                <th style="width:35%; text-align: center;">NAME</th>
                                <th style="width:35%; text-align: center;">EMAIL</th>
                                <th style="width:10%; text-align: center;">PHONE</th>
                                <th style="width:5%; text-align: center;">STATUS</th>
                                <th style="width:15%; text-align: center;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($users as $rowsList)
                            <tr class="gradeA">

                                <td align="center">{{ $rowsList->name }}</td>
                                
                                <td align="center">{{ $rowsList->email }}</td>
                                <td align="center">{{ $rowsList->phone_number }}</td>

                                <td align="center">
                                    <form action="{{ route('user.status', $rowsList->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="put">                                                    
                                        
                                        <select name="public_status" class="btn btn-warning btn-rounded btn-transparent" onchange="this.form.submit()">
                                            <option value="1"{{ ($rowsList->public_status == '1')?'selected="selected"':''}}>Active</option>
                                            <option value="2"{{ ($rowsList->public_status == '2')?'selected="selected"':''}}>Inactive</option>                                                        
                                        </select>
                                    </form>
                                </td>
                                
                                <td align="center">
                                
                                <form action="{{ route('user.destroy', $rowsList->id) }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="_method" value="DELETE">   
                                    
                                    <a href="{{ route('user.show', $rowsList->id) }}" class="btn btn-info"><i class="fa fa-info"></i></a>
                                    <a href="{{ route('user.edit', $rowsList->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                    <button type="submit" value="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this User?');"><i class="fa fa-trash-o"></i></button>
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
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->

@endsection