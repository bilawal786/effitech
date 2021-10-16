@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Construction</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
            <!--end breadcrumb-->
            <div class="row row-cols-1">


                <div class="col">

                    <div class="card border-top border-0 border-4 border-danger">
                        <div class="card-body p-5">
                            <div class="card-title d-flex align-items-center">
                                <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                </div>
                                <h5 class="mb-0 text-danger">Construction</h5>
                            </div>
                            <hr>
                            <br>
                            <br>
                            <form action="{{route('construction.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre 1</label>
                                        <div class="input-group">
                                            <input type="text" name="h1" class="form-control border-start-0" value="{{$page->h1}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="d1" class="form-control" id="" cols="30" rows="5">{{$page->d1}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre 2</label>
                                        <div class="input-group">
                                            <input type="text" name="h2" class="form-control border-start-0" value="{{$page->h2}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="d2" class="form-control" id="" cols="30" rows="5">{{$page->d2}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Video</label>
                                        <div class="input-group">
                                            <input type="text" name="video" class="form-control border-start-0" value="{{$page->video}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Video Image (1200 * 480)</label>
                                        <div class="input-group">
                                            <input type="file" name="vimage" class="form-control border-start-0" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="title1" class="form-control border-start-0" value="{{$page->title1}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Image (800 * 487)</label>
                                        <div class="input-group">
                                            <input type="file" name="image1" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="de1" class="form-control" id="" cols="30" rows="5">{{$page->de1}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="title2" class="form-control border-start-0" value="{{$page->title2}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Image (800 * 487)</label>
                                        <div class="input-group">
                                            <input type="file" name="image2" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="de2" class="form-control" id="" cols="30" rows="5">{{$page->de2}}</textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Sauvegarder</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
