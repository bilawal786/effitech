@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Services</div>
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
                                <h5 class="mb-0 text-danger">Services</h5>
                            </div>
                            <hr>
                            <br>
                            <br>
                            <form action="{{route('service.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="st1" class="form-control border-start-0" id="inputLastName1" value="{{$gs->st1}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="sd1" class="form-control" id="" cols="30" rows="5">{{$gs->sd1}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="st2" class="form-control border-start-0" id="inputLastName1" value="{{$gs->st2}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="sd2" class="form-control" id="" cols="30" rows="5">{{$gs->sd2}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="st3" class="form-control border-start-0" id="inputLastName1" value="{{$gs->st3}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="sd3" class="form-control" id="" cols="30" rows="5">{{$gs->sd3}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="st4" class="form-control border-start-0" id="inputLastName1" value="{{$gs->st4}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="sd4" class="form-control" id="" cols="30" rows="5">{{$gs->sd4}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="st5" class="form-control border-start-0" id="inputLastName1" value="{{$gs->st5}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="sd5" class="form-control" id="" cols="30" rows="5">{{$gs->sd5}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Titre</label>
                                        <div class="input-group">
                                            <input type="text" name="st6" class="form-control border-start-0" id="inputLastName1" value="{{$gs->st6}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Le Description</label>
                                        <div class="input-group">
                                            <textarea name="sd6" class="form-control" id="" cols="30" rows="5">{{$gs->sd6}}</textarea>
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
