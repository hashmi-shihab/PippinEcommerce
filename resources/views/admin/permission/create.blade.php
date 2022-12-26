@extends('admin.layouts.app')

@section('content')
            <div class="page-heading ml-5 mt-5">
                <h1 class="page-title ml-3">Permission</h1>
            </div>
            <div class="page-content fade-in-up">
                <div class="row ml-5" >
                    <div class="col-md-8">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Create Permission</div>
                                <span>
                                    @if($message = Session::get('success'))
                                        <br>
                                        <div class="alert alert-success alert-dismissible">{{ $message }}</div>
                                    @endif
                                </span>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form action="{{ route('permission.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-8">
                                            <input class="form-control" name="name" type="text">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Permission For</label>
                                        <div class="col-sm-8">
                                           <select name="for" id="for" class="form-control">
                                                <option selected disable>Select Permission for</option>
                                                <option value="user">User</option>
                                                <option value="product">Product</option>
                                                <option value="category">Category</option>
                                                <option value="order">Order</option>
                                                <option value="role">Role</option>
                                                <option value="permission">Permission</option>
	                                     	</select>
                                        </div>
                                        @if ($errors->has('for'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('for') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                           <input type="submit" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
