@extends('admin.layouts.app')

@section('content')




            <div class="page-heading">
                <h1 class="page-title">Category</h1>
                
            </div>
            <div class="page-content fade-in-up">
                <div class="row">
                   
                    <div class="col-md-10">
                        <div class="ibox">
                            <div class="ibox-head">
                                <div class="ibox-title">Create Category</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                               

                                       
                        <form action="{{ route('category.store')}}" method="post" enctype="multipart/form-data">
                                      @csrf
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" name="name" type="text" placeholder="Categoy  Name">
                                        </div class="">   
                                            @if ($errors->has('name'))
                                            <span class="text-danger error-text mt-1">{{ $errors->first('name') }}</span>
                                       @endif
                                    </div>

                                  
                                  
                                   
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                           <input type="submit" value="Save" class="btn btn-success">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             
                
                
            </div>

            
                         

    
@endsection