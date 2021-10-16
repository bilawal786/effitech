@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Renovation</div>
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
                                <h5 class="mb-0 text-danger">Renovation</h5>
                            </div>
                            <hr>
                            <br>
                            <br>
                            <form action="{{route('renovation.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre 1</label>
                                        <div class="input-group">
                                            <input type="text" name="rh1" class="form-control border-start-0" value="{{$page->rh1}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="rd1" class="form-control" id="" cols="30" rows="5">{{$page->rd1}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre 2</label>
                                        <div class="input-group">
                                            <input type="text" name="rh2" class="form-control border-start-0" value="{{$page->rh2}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="rd2" class="form-control" id="" cols="30" rows="5">{{$page->rd2}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Video</label>
                                        <div class="input-group">
                                            <input type="text" name="rvideo" class="form-control border-start-0" value="{{$page->rvideo}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Video Image (1200 * 480)</label>
                                        <div class="input-group">
                                            <input type="file" name="rvimage" class="form-control border-start-0" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="rtitle1" class="form-control border-start-0" value="{{$page->rtitle1}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Image (800 * 487)</label>
                                        <div class="input-group">
                                            <input type="file" name="rimage1" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="rde1" class="form-control" id="" cols="30" rows="5">{{$page->rde1}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="rtitle2" class="form-control border-start-0" value="{{$page->rtitle2}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Image (800 * 487)</label>
                                        <div class="input-group">
                                            <input type="file" name="rimage2" class="form-control" />
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <label class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="rde2" class="form-control" id="" cols="30" rows="5">{{$page->rde2}}</textarea>
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
