<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Tasks')
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
                
            <form action="{{ route('task.update', $taskEdit->id) }}" method="post" class="form-horizontal" role="form">
                {{ csrf_field() }}

                <input type="hidden" name="_method" value="put">
                
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Category</label>
                        <div class="col-sm-5">
                        <select name="category_id" class="form-control" required="required">
                            <option value="">Select Category</option>
                            @foreach($categoryList as $catList)
                                <option value="{{ $catList->id }}"{{ ($catList->id == $taskEdit->category_id)?'selected="selected"':''}}>{{ $catList->category_name }}</option>
                            @endforeach
                        </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Name</label>
                        <div class="col-sm-5">
                            <input type="text" name="name" value="{{ $taskEdit->name }}" class="form-control" placeholder="Name" required="required">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Description</label>
                        <div class="col-sm-5">
                            <textarea name="description" class="form-control" placeholder="Description" required="required">{{ $taskEdit->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputName" class="col-sm-3 control-label">Working Date</label>
                        <div class="col-sm-5">
                            <input type="date" name="working_date" value="{{ $taskEdit->working_date }}" class="form-control date" id="datetimepicker1" required="required">
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