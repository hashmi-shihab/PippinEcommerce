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
                                <div class="ibox-title">Edit Category</div>
                                <div class="ibox-tools">
                                    <a class="ibox-collapse"><i class="fa fa-minus"></i></a>
                                    <a class="fullscreen-link"><i class="fa fa-expand"></i></a>
                                </div>
                            </div>
                            <div class="ibox-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input class="form-control" type="text" placeholder="Categoy  Name">
                                        </div>
                                    </div>
                                  
                                   
                                    <div class="form-group row">
                                        <div class="col-sm-10 ml-sm-auto">
                                            <button class="btn btn-info" type="submit">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
             
                
                
            </div>

            
                         

    
@endsection