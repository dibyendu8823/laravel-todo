<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','User')

<!-- Page body content -->
@section('body-content')

<!-- Title bar starts -->
<div class="title-bar">
    <ol class="breadcrumb">
        <li><a href="#">Home</a></li>
        <li class="active">@yield('page-title') Management</li>
    </ol>
</div>
<!-- Title bar ends -->

<!-- Top Bar Starts -->
<div class="top-bar clearfix">
        <div class="page-title">
            <h4>@yield('page-title') Show</h4>
        </div>
    </div>
    <!-- Top Bar Ends -->


<hr class="stylish">

<!-- Container fluid Starts -->
<div class="container-fluid">

    <!-- Spacer Starts -->
    <div class="spacer">
        <!-- Row start -->
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

                <div class="panel">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">@yield('page-title') Show</h4>
                    </div>                   
                    
                    <div class="panel-body">
                        
                        <h3>Hello ! You are logged in!</h3>

                    </div>
                </div>
            </div>
        </div>
        <!-- Row end -->
        

    </div>
    <!-- Spacer Ends -->

</div>
<!-- Container fluid ends -->

@endsection