@extends('admin.layouts.app')

@section('content')

    <div class="page-heading">
        <h1 class="page-title">Product</h1>
    </div>

    <div class="page-content fade-in-up">
                <div class="row">
                    <div class="col-md-10">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Create Product</div>
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
                                <form action="{{ route('product.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('POST')
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="name" type="text">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                        @endif
                                    </div>
                                  

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Brand</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="brand" type="text">
                                        </div>
                                        @if ($errors->has('brand'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('brand') }}</span>
                                        @endif
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Price</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="price" type="text">
                                        </div>
                                        @if ($errors->has('price'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('price') }}</span>
                                        @endif
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Quantity</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="qty" type="text">
                                        </div>
                                        @if ($errors->has('qty'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('qty') }}</span>
                                        @endif
                                    </div>

                                

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Category</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="cat_id">
                                                @foreach ($categories as $key=>$category)
                                                   <option value="{{$category->id}}">{{ $category->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        @if ($errors->has('cat_id'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('cat_id') }}</span>
                                        @endif
                                    </div>

                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="image" type="file" >
                                        </div>
                                        @if ($errors->has('image'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                    
                                     <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Description</label>
                                        <div class="col-sm-10">
                                              <textarea class="form-control" name="description" rows="4" cols="50"></textarea>
                                        </div>
                                        @if ($errors->has('description'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('description') }}</span>
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