@extends('admin.layouts.app')


@section('content')

<div class=col-md-12>
    
    <form class="mt-5">
            <legend>List of Category</legend>
  
    <table class="table table-bordered table-condensed table-hover mt-5">
        <thead>
            <tr>
                <td>Name</td>
                <th>Actions</th>
            </tr>
                
        </thead>
        <tbody id="form-list-client-body">
            <tr>
                <td>Eduardo</td>
                <td>
                    <a title="view this user" class="btn btn-default btn-sm "> <i class="fa fa-eye text-info"></i> </a>
                    <a title="edit this user" class="btn btn-default btn-sm "> <i class="fa fa-edit text-success"></i> </a>
                    <a title="delete this user" class="btn btn-default btn-sm "> <i class="fa fa-trash-o text-danger"></i> </a>
                    
              
                   
                </td>
            </tr>
        </tbody>
    </table>
    </form>

    
</div>
    
@endsection