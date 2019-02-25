<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Permission')
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
        <div class="panel">

            <div class="panel-heading">
                    <h4 class="panel-title">@yield('body-title')</h4>
            </div>

            <div class="panel-body">
                <div id="dt_example" class="example_alt_pagination clearfix datatable-index table-responsive">
                        
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th style="width:90%; text-align: center;">PERMISSION</th>
                                <th style="width:10%; text-align: center;">ACTION</th>
                            </tr>
                        </thead>
                        
                        <tbody>
                            @foreach ($permissions as $permission)
                            <tr>
                                    <td align="center">{{ $permission->name }}</td> 

                                    <td align="center">
                                    
                                            <form action="{{ route('permission.destroy', $permission->id) }}" method="post">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="DELETE">
                                                    <a href="{{ route('permission.edit', $permission->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                                    <button type="submit" value="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this category?');"><i class="fa fa-trash-o"></i></button>
                                            </form>
                                            
                                    </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->

@endsection