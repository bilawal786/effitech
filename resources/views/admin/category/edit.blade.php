@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Modifier la catégorie</div>
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
                                <h5 class="mb-0 text-danger">Modifier la catégorie</h5>
                            </div>

                            <form action="{{route('category.update', ['id' => $category->id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputLastName1" class="form-label">Catégorie</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                        <input type="text" name="name" class="form-control border-start-0" value="{{$category->name}}" required id="inputLastName1" />
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
