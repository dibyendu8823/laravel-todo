<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Users')
<!-- Page title end -->

<!-- Page body title -->
@section('body-title')
    @yield('page-title') Show
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
                
                <form class="form-horizontal">
                
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Role Type :</label>
                        <div class="col-sm-5">
                            <b>{{ $showUser->role_type }}</b>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Name :</label>
                        <div class="col-sm-5">
                                <b>{{ $showUser->name }}</b>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Email :</label>
                        <div class="col-sm-5">
                                <b>{{ $showUser->email }}</b>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Phone Number :</label>
                        <div class="col-sm-5">
                                <b>{{ $showUser->phone_number }}</b>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Address :</label>
                        <div class="col-sm-5">
                                <b>{{ $showUser->address }}</b>
                        </div>
                    </div>

                    <div class="form-group" align="center">
                        <div class="col-sm-offset-2 col-sm-5">
                            <a href="{{ route('user.index') }}" class="btn btn-info">BACK</a>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- Row end -->

@endsection