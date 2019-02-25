<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Permission')
<!-- Page title end -->

<!-- Page body title -->
@section('body-title')
    @yield('page-title') Add
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
                
                <form action="{{ route('permission.store') }}" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Permission Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" placeholder="Permission Name" required="required">
                        </div>
                    </div>
                    
                    @if(!$roles->isEmpty()) <!--If no roles exist yet -->
                    <div class="form-group"> 
                        <label for="inputName" class="col-sm-3 control-label">Assign Permission to Roles</label>
                        <div class="col-sm-5 checkbox">
                        
                        @foreach ($roles as $role) 
                            <label><input type="checkbox" name="roles[]" value="{{ $role->id }}">{{ $role->name, ucfirst($role->name) }}</label><br>
                        @endforeach
                            
                        </div>
                    </div>
                    @endif

                    <div class="form-group" align="center">
                        <div class="col-sm-offset-2 col-sm-9">
                            <button type="submit" value="submit" class="btn btn-primary">Permission Add</button>                                    
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