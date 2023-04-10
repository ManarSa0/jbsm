@extends('layouts.appAdmin')
@section('content')

<div class="content-body">
    <div class="container-fluid">
        <div class="row page-titles">
            <div class="col p-md-0">
                <h4>News</h4>
            </div>
            <div class="col p-md-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('news-data.index') }}">news</a>
                    </li>

                    <li class="breadcrumb-item active">Edit 
                    </li>
                </ol>
            </div>
        </div>

        <div class="row">

            <div class="col-xl-12">


                <div class="card forms-card">
                    <div class="card-body">
                        <h4 class="card-title mb-4">Edit Item</h4>
                        <div class="basic-form">
                            <form role="form" enctype="multipart/form-data" method="post" 
                            action="{{ route('news-data.update' , $editData->id) }}">
                                {{ csrf_field() }}
                                {{ method_field('PATCH') }}

                                <!--ul>
                                    @foreach ($errors->all() as $error)
                                    <div class="alert alert-danger"> {{ $error }}</div>
                                    @endforeach

                           
                                </ul-->

                    


                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label"> Name (Ar)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name_ar" id="validationDefaultUsername1" aria-describedby="validationDefaultUsername1"  value="{{ $editData->name_ar}}">
                                        </div>
                                        @if($errors->has('name_ar'))
                                        <div class="error">{{ $errors->first('name_ar') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label"> Name (En)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="name_en" id="validationDefaultUsername1" aria-describedby="validationDefaultUsername1"  value="{{ $editData->name_en}}">
                                        </div>
                                        @if($errors->has('name_en'))
                                        <div class="error">{{ $errors->first('name_en') }}</div>
                                        @endif
                                    </div>
                                </div>

                               
                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Title (Ar)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="title_ar" onkeyup="myFunction()" id="fname" id="validationDefaultUsername1" aria-describedby="validationDefaultUsername1"  value="{{ $editData->title_ar}}">
                                        </div>
                                        @if($errors->has('title_ar'))
                                        <div class="error">{{ $errors->first('title_ar') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Title (En)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="title_en" id="validationDefaultUsername1" aria-describedby="validationDefaultUsername1"  value="{{ $editData->title_en}}">
                                        </div>
                                        @if($errors->has('title_en'))
                                        <div class="error">{{ $errors->first('title_en') }}</div>
                                        @endif
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-label">Description (Ar)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <textarea  class="form-control" id="ck_editor" name="description_ar"  value="{{ $editData->description_ar}}" rows="6"></textarea>
                                        </div>
                                        @if($errors->has('desc_ar'))
                                        <div class="error">{{ $errors->first('desc_ar') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label class="col-sm-3 col-form-label text-label">Description (En)</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <textarea  class="form-control"  id="ck_editor" name="description_en"  value="{{ $editData->description_en}}" rows="6"></textarea>
                                        </div>
                                        @if($errors->has('desc_en'))
                                        <div class="error">{{ $errors->first('desc_en') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">Upload Image</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="file" class="form-control" name="images" id="validationDefaultUsername9" aria-describedby="inputGroupPrepend2"  value="{{ $editData->images}}">
                                        </div>
                                        @if($errors->has('image'))
                                        <div class="error">{{ $errors->first('image') }}</div>
                                        @endif

                                    </div>
                                </div>
                                
                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">link</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="text" class="form-control" name="link" id="validationDefaultUsername9" aria-describedby="inputGroupPrepend2"  value="{{ $editData->link}}">
                                        </div>
                                        @if($errors->has('image'))
                                        <div class="error">{{ $errors->first('image') }}</div>
                                        @endif

                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <label class="col-sm-3 col-form-label text-label">news_date</label>
                                    <div class="col-sm-9">
                                        <div class="input-group">
                                            <input type="date" class="form-control" name="news_date" id="validationDefaultUsername9" aria-describedby="inputGroupPrepend2"  value="{{ $editData->news_date}}">
                                        </div>
                                        @if($errors->has('image'))
                                        <div class="error">{{ $errors->first('image') }}</div>
                                        @endif

                                    </div>
                                </div>

                                <div style="float: right;">
                                    <button type="submit" class="btn btn-primary btn-form">Submit</button>
                                    <button type="reset" class="btn btn-light btn-form">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        </div>
    </div>
    <!-- #/ container -->
</div>

@endsection