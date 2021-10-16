@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Réglages</div>
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
                                <h5 class="mb-0 text-danger">Réglages</h5>
                            </div>
                            <hr>
                            <br>
                            <br>
                            <form action="{{route('settings.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Logo</label>
                                        <div class="input-group">
                                            <input type="file" name="logo" class="form-control border-start-0" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Address</label>
                                        <div class="input-group">
                                            <input type="text" name="address" class="form-control border-start-0" value="{{$gs->address}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Telephone</label>
                                        <div class="input-group">
                                            <input type="text" name="phone" class="form-control border-start-0" value="{{$gs->phone}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Email</label>
                                        <div class="input-group">
                                            <input type="email" name="email" class="form-control border-start-0" value="{{$gs->email}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Fax</label>
                                        <div class="input-group">
                                            <input type="text" name="fax" class="form-control border-start-0" value="{{$gs->fax}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Facebook</label>
                                        <div class="input-group">
                                            <input type="text" name="facebook" class="form-control border-start-0" value="{{$gs->facebook}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Instagram</label>
                                        <div class="input-group">
                                            <input type="text" name="instagram" class="form-control border-start-0" value="{{$gs->instagram}}" />
                                        </div>
                                    </div>


                                <div class="col-12">
                                    <button type="submit" class="btn btn-danger px-5">Sauvegarder</button>
                                </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
