<!-- Master Layout -->
@extends('users.master')

<!-- Page title -->
@section('page-title','Category')
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
                    @if( count($categoryData) > 0 )
                    <table class="table table-bordered table-striped">    
                        <thead>
                            <tr>
                                <th style="width:10%; text-align: center;">Sl.No</th>
                                <th style="width:75%; text-align: center;">CATEGORY NAME</th>
                                <th style="width:10%; text-align: center;">STATUS</th>
                                <th style="width:5%; text-align: center;">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i=0; ?>
                        @foreach($categoryData as $rowsCategory)
                            <tr class="gradeA">
                                <td align="center">{{ ++$i }}</td>

                                <td align="center">{{ $rowsCategory->category_name }}</td>
                                
                                @if($rowsCategory->public_status == '1')
                                <td align="center" class="btn btn-success">ACTIVE</td>
                                @else
                                <td align="center" class="btn btn-danger">INACTIVE</td>
                                @endif
                                <td align="center">
                                    <a href="{{ route('category.edit', $rowsCategory->id) }}" class="btn btn-primary"><i class="fa fa-pencil-square-o"></i></a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    @else
                        <h3 align="center" style="color:red;">No list Found !</h3>
                    @endif
                </div>
                <div>
                    <strong style="float: left;">
                    Showing {{ $categoryData->firstItem() }}
                    to {{ $categoryData->lastItem() }} 
                    of {{ $categoryData->total() }} entries
                    </strong>
                    <span style="float: right;">{{ $categoryData->links() }}</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Row Ends -->

@endsection