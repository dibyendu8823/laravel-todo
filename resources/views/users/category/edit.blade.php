<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Category')
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
                <h4 class="panel-title">Category Edit</h4>
            </div>                   
            
            <div class="panel-body">
                
            <form action="{{ route('category.update', $catEdit->id) }}" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="put">

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Category Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="category_name" class="form-control" value="{{ $catEdit->category_name }}" placeholder="Category Name" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Public Status</label>
                        <div class="col-sm-5">
                            <select name="public_status" class="form-control" required="required">
                            <option value="1"{{ ($catEdit->public_status=='1')?'selected="selected"':'' }}>Active</option>
                            <option value="0"{{ ($catEdit->public_status=='0')?'selected="selected"':'' }}>Inactive</option>
                        </select>
                        </div>
                    </div>

                    <div class="form-group" align="center">
                        <div class="col-sm-offset-2 col-sm-9">
                            <button type="submit" value="submit" class="btn btn-primary">Category Update</button>
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