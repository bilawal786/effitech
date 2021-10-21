@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">À propos de nous</div>
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

                    <div class="card">
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase">À propos de nous</h6>
                            <hr/>
                            <form action="{{route('about.update')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" >
                                @csrf
                                <textarea name="about" id="mytextarea">{{$about->about}}</textarea>
                                <br>
                                <label for="">Notre catalogue </label>
                                <input type="file" name="pdf" class="form-control" accept="application/pdf">
                                <br>
                                <button class="btn btn-primary">Sauvegarder</button>
                            </form>
                        </div>
                    </div>
                </div>


            </div>

        </div>
    </div>
@endsection
