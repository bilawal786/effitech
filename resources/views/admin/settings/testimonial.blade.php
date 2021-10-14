@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Témoignage</div>
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
                                <h5 class="mb-0 text-danger">Témoignage</h5>
                            </div>
                            <hr>
                            <br>
                            <br>
                            <form action="{{route('testimonial.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <label for="inputLastName1" class="form-label">Image</label>
                                        <div class="input-group">
                                            <input type="file" name="timage" class="form-control border-start-0" />
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Review 1</label>
                                        <div class="input-group">
                                            <textarea name="review1" class="form-control" id="" cols="30" rows="5">{{$gs->review1}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">CLient Nom</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control" value="{{$gs->rg1}}" name="rg1">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <div class="row">
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Review 2</label>
                                        <div class="input-group">
                                            <textarea name="review2" class="form-control" id="" cols="30" rows="5">{{$gs->review2}}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">CLient Nom</label>
                                        <div class="input-group">
                                            <input type="text" value="{{$gs->rg2}}" class="form-control" name="rg2">
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
