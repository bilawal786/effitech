@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Modifier l'étape</div>
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
                        <div class="card-body">
                            <h6 class="mb-0 text-uppercase">Modifier l'étape</h6>
                            <hr>
                            <form method="POST" action="{{route('step.update', ['id' => $step->id])}}">
                                @csrf
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title"><b>Titre</b><span class="text-danger">*</span></label>
                                            <br>
                                            <div class="mb-3">
                                                <input type="text" name="title" value="{{$step->title}}" class="form-control" placeholder="Titre" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title"><b>Date de début</b><span class="text-danger">*</span></label>
                                            <br>
                                            <div class="mb-3">
                                                <input type="date" name="start_date" value="{{$step->start_date}}" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title"><b>Date de fin</b><span class="text-danger">*</span></label>
                                            <br>
                                            <div class="mb-3">
                                                <input type="date" name="end_date" value="{{$step->end_date}}" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title"><b>Sélectionnez le sous-traitant</b><span class="text-danger">*</span></label>
                                            <br>
                                            <div class="mb-3">
                                                <select name="contractor_id" class="single-select form-control" required>
                                                    <option value="">Sélectionnez le sous-traitant</option>
                                                    @foreach($subcontractor as $sub)
                                                        <option  value="{{$sub->id}}" {{$sub->id == $step->contractor_id ? "selected":""}}  >{{$sub->fname}} {{$sub->lname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title"><b>Sélectionnez le superviseur de travail</b><span class="text-danger">*</span></label>
                                            <br>
                                            <div class="mb-3">
                                                <select name="supervisor_id" class="single-select form-control" required>
                                                    <option value="">Sélectionnez le superviseur de travail</option>
                                                    @foreach($supervisor as $sup)
                                                        <option {{$sup->id == $step->supervisor_id ? "selected":""}} value="{{$sup->id}}">{{$sup->fname}} {{$sup->lname}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title"><b>Photos</b><span class="text-danger">*</span></label>
                                            <br>
                                            <div class="mb-3">
                                                <input type="file" name="gallery[]" multiple class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="title"><b>Details</b><span class="text-danger">*</span></label>
                                            <br>
                                            <div class="mb-3">
                                                <textarea name="details" class="form-control" required id="" cols="30" rows="5">{{$step->details}}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 pt-3">
                                        <button class="btn btn-primary">Sauvegarder</button>
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
