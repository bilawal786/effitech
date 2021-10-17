@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Détail de #{{$site->id}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <button  data-bs-toggle="modal" data-bs-target="#exampleModal1" type="button" class="btn btn-success mr-2">Ajouter une nouvelle étape</button>
                </div>
            </div>

            <hr class="border-top" />
            <div class="row">
                <div class="col-md-4">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Détails du client</h5>
                                    <hr>
                                </div>
                                <p class="card-text">
                                    @if($site->client_id)
                                        <b>Prenom</b>: {{$site->client->fname}}<br>
                                        <b>Nom</b>: {{$site->client->lname}}<br>
                                        <b>Email</b>: {{$site->client->email}}<br>
                                        <b>Telephone</b>: {{$site->client->phone}}<br>
                                        <b>Client Taper</b>: {{$site->client->type}}<br>
                                        <b>Address</b>: {{$site->client->address}}<br>
                                    @else
                                        <b>Supreme</b>
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Détails du Chantier</h5>
                                    <hr>
                                </div>
                                <p class="card-text">
                                    <b>Id</b>: {{$site->id}}<br>
                                   <b>Titre</b>: {{$site->title}}<br>
                                    <b>Créé à</b>: {{$site->created_at}}<br>
                                    <b>Catégorie</b>: {{$site->category->name}}<br>
                                    <b>Sous-catégorie</b>: {{$site->subcategory->name}}<br>
                                    <b>Description</b>: {{$site->details}}<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Toutes les étapes</h5>
                                    <hr>
                                </div>
                               @foreach($site->steps as $step)
                                <div class="row">
                                    <div class="col-auto text-center flex-column d-none d-sm-flex">
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                        <h5 class="m-2">
                                            <span class="badge rounded-pill bg-primary">&nbsp;</span>
                                        </h5>
                                        <div class="row h-50">
                                            <div class="col border-end">&nbsp;</div>
                                            <div class="col">&nbsp;</div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="card border-primary shadow radius-15">
                                            <div class="card-body">
                                                <div class="float-end text-primary">{{$step->created_at->format('d-m-y H:ma')}}</div>
                                                <h3 class="card-title text-primary">{{$step->title}}</h3>
                                                <p class="card-text">{{$step->details}}</p>
                                                <p class="card-text "><span class="badge bg-primary">Start Date: {{$step->start_date}}</span> <span class="badge bg-success">End Date: {{$step->end_date}}</span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--end row-->

        </div>
    </div>
    <div class="modal fade" id="exampleModal1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une nouvelle étape de ce site</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('site.steps.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Titre</b><span class="text-danger">*</span></label>
                                <br>
                                <div class="mb-3">
                                    <input type="text" name="title" class="form-control" placeholder="Titre" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Date de début</b><span class="text-danger">*</span></label>
                                <br>
                                <div class="mb-3">
                                    <input type="date" name="start_date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Date de fin</b><span class="text-danger">*</span></label>
                                <br>
                                <div class="mb-3">
                                    <input type="date" name="end_date" class="form-control" required>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Details</b><span class="text-danger">*</span></label>
                                <br>
                                <div class="mb-3">
                                    <textarea name="details" class="form-control" required id="" cols="30" rows="5"></textarea>
                                </div>
                            </div>
                        </div>
                        <input type="hidden" name="site_id" value="{{$site->id}}">
                        <div class="col-md-12 pull-right">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block">Sauvegarder</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Proche</button>
                </div>
            </div>
        </div>
    </div>

@endsection

