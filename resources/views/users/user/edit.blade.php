<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Users')
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
                
            <form action="{{ route('user.update', $userEdit->id) }}" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                
                    <div class="form-group{{ $errors->has('roles') ? ' has-error' : '' }}">
                        <label for="inputEmail3" class="col-sm-3 control-label">User Type</label>
                        <div class="col-sm-5 checkbox">
                        
                        @foreach ($roles as $role) 
                            <label><input type="checkbox" name="roles[]" value="{{ $role->id }}">{{ $role->name, ucfirst($role->name) }}</label><br>
                        @endforeach
                        @if ($errors->has('roles'))
                        <span class="help-block">
                            <strong>{{ $errors->first('roles') }}</strong>
                        </span>
                        @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label for="inputName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" value="{{ $userEdit->name }}" class="form-control" placeholder="Name" required="required">
                            @if ($errors->has('name'))
                            <span class="help-block">
                                <strong>{{ $errors->first('name') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="inputName" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-5">
                            <input type="text" name="email" value="{{ $userEdit->email }}" class="form-control" placeholder="Email Address" required="required">
                            @if ($errors->has('email'))
                            <span class="help-block">
                                <strong>{{ $errors->first('email') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                        <label for="inputName" class="col-sm-3 control-label">Phone Number</label>
                        <div class="col-sm-5">
                            <input type="text" name="phone_number" value="{{ $userEdit->phone_number }}" class="form-control" placeholder="Phone Number" required="required">
                            @if ($errors->has('phone_number'))
                            <span class="help-block">
                                <strong>{{ $errors->first('phone_number') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                        <label for="inputName" class="col-sm-3 control-label">Address</label>
                        <div class="col-sm-5">
                            <textarea name="address" class="form-control" placeholder="address" required="required">{{ $userEdit->address }}</textarea>
                            @if ($errors->has('address'))
                            <span class="help-block">
                                <strong>{{ $errors->first('address') }}</strong>
                            </span>
                            @endif
                        </div>
                    </div>

                    
                    <div class="form-group" align="center">
                        <div class="col-sm-offset-2 col-sm-10">                                    
                            <button type="submit" value="submit" class="btn btn-primary">Update</button>
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