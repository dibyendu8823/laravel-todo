<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Role')
<!-- Page title end -->

<!-- Page body title -->
@section('body-title')
    @yield('page-title') Edit
@endsection
<!-- Page body title end -->

<!-- Page body content -->
@section('body-content')

<!-- Row start -->
<div class="row">
    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

        <div class="panel">
            <div class="panel-heading clearfix">
                <h4 class="panel-title">@yield('body-title')</h4>
            </div>                   
            
            <div class="panel-body">
                
            <form action="{{ route('role.update', $role->id) }}" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Role Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" value="{{ $role->name }}" placeholder="Role Name" required="required">
                        </div>
                    </div>

                    <div class="form-group"> 
                        <label for="inputName" class="col-sm-3 control-label">Assign Permissions</label>
                        <div class="col-sm-5 checkbox">
                        
                        @foreach ($permissions as $permission) 
                            <label><input type="checkbox" name="permissions[]" value="{{ $permission->id }}">{{ $permission->name, ucfirst($permission->name) }}</label><br>
                        @endforeach
                        
                        </div>
                    </div>

                    <div class="form-group" align="center">
                        <div class="col-sm-offset-2 col-sm-9">
                            <button type="submit" value="submit" class="btn btn-primary">Role Update</button>
                            <button type="reset" value="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- Row end -->

@endsection