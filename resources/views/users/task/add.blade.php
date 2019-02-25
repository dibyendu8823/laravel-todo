<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Tasks')
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
                
            <form action="{{ route('task.store') }}" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}
                
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-5">
                            <select name="category_id" class="form-control" required="required">
                            <option value="">Select Category</option>
                            @foreach($categoryList as $catList)
                                <option value="{{ $catList->id }}">{{ $catList->category_name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-sm-2">
                        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">Add Category</button>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" class="form-control" placeholder="Name" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-5">
                            <textarea name="description" class="form-control" placeholder="Description" required="required"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Working Date</label>
                        <div class="col-sm-5">
                            <input type="date" name="working_date" class="form-control date " id='datetimepicker1' required="required">
                        </div>
                    </div>

                    <div class="form-group" align="center">
                        <div class="col-sm-offset-2 col-sm-10">
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <input type="hidden" name="public_status" value="1">
                            <button type="submit" value="submit" class="btn btn-primary">Save</button>                                    
                            <button type="reset" value="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </div>

                </form>

            </div>
        </div>
    </div>
</div>
<!-- Row end -->

<!-- Modal -->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Category Add</h4>
        </div>
        <div class="modal-body">
        <form action="{{ route('category.modaladd') }}" method="post" class="form-horizontal" role="form">
            {{ csrf_field() }}

                <div class="form-group">
                    <label for="inputName" class="col-sm-3 control-label">Category Name</label>
                    <div class="col-sm-7">
                        <input type="text" name="category_name" class="form-control" placeholder="Category Name" required="required">
                    </div>
                </div>

                <div class="form-group" align="center">
                    <div class="col-sm-12">
                        <input type="hidden" name="public_status" value="1">
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <button type="submit" value="submit" class="btn btn-primary">Category Add</button>
                        <button type="reset" value="reset" class="btn btn-danger">Cancel</button>
                    </div>
                </div>

            </form>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
    </div>
</div>

@endsection