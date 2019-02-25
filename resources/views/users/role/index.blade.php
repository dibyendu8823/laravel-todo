<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Role')
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
                                <th style="width:30%; text-align: center;">ROLE</th>
                                <th style="width:60%; text-align: center;">PERMISSION</th>
                                <th style="width:10%; text-align: center;">ACTION</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($roles as $role)
                            <tr>

                                <td align="center">{{ $role->name }}</td>

                                <td align="center">{{ str_replace(array('[',']','"'),'', $role->permissions()->pluck('name')) }}</td>{{-- Retrieve array of permissions associated to a role and convert to string --}}
                                
                                <td align="center">
                                
                                    <form action="{{ route('role.destroy', $role->id) }}" method="post">
                                        {{ csrf_field() }}
                                        <input type="hidden" name="_method" value="DELETE">
                                        <a href="{{ route('role.edit', $role->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                        <button type="submit" value="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this role?');"><i class="fa fa-trash-o"></i></button>
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