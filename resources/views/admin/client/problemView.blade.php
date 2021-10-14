@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Des détails</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                        <button  data-bs-toggle="modal" data-bs-target="#exampleModal" type="button" class="btn btn-success mr-2">Envoyer un devis</button>
                        @if($problem->quote_status == 1)
                        <button  data-bs-toggle="modal" data-bs-target="#exampleModal1" type="button" class="btn btn-primary">Attribuer un problème</button>
                        @endif
                </div>
            </div>

            <hr class="border-top" />
            <div class="row row-cols-1 row-cols-md-3 row-cols-lg-3 row-cols-xl-3">
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Détails du client</h5>
                                <hr>
                            </div>
                            <p class="card-text">
                                @if($problem->client)
                                <b>Prenom</b>: {{$problem->client->fname}}<br>
                                <b>Nom</b>: {{$problem->client->lname}}<br>
                                <b>Email</b>: {{$problem->client->email}}<br>
                                <b>Telephone</b>: {{$problem->client->phone}}<br>
                                <b>Client Taper</b>: {{$problem->client->type}}<br>
                                <b>Address</b>: {{$problem->client->address}}<br>
                                @else
                                <b>Supreme</b>
                                @endif
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Détails du problème</h5>
                                <hr>
                            </div>
                            <b>Id</b>: {{$problem->id}}<br>
                            <b>Chantier</b>: {{$problem->site}}<br>
                            <b>Créé à</b>: {{$problem->created_at}}<br>
                            <b>Catégorie</b>: {{$problem->category->name}}<br>
                            <b>Sous-catégorie</b>: {{$problem->subcategory->name}}<br>
                            <b>Description</b>: {{$problem->description}}<br>

                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Chantier Photos</h5>
                                <hr>
                            </div>
                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                @if(!empty ( $problem->photos ))
                                <div class="carousel-inner">
                                        @foreach(json_decode($problem->photos, true) as $key => $images )
                                            @if($key == 0)
                                            <div class="carousel-item active">
                                                <img src="{{asset('photos/'.$images)}}" class="d-block w-100" alt="...">
                                            </div>
                                            @else
                                            <div class="carousel-item">
                                                <img src="{{asset('photos/'.$images)}}" class="d-block w-100" alt="...">
                                            </div>
                                        @endif
                                        @endforeach
                                </div>
                                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">	<span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </a>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                @if($problem->price)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Détails du devis</h5>
                                <hr>
                            </div>
                            <b>Prix</b>: {{$problem->price}} €<br>
                            <b>Date d'entretien</b>: {{$problem->service_date}} <br>
                            <b>Statut</b>:
                            @if($problem->quote_status == 3)
                                <span class="badge bg-primary">En attente de la réponse du client</span>
                            @elseif($problem->quote_status == 1)
                                <span class="badge bg-success">Devis Accepter</span>
                            @else
                                <span class="badge bg-danger">Devis Rejeter</span>
                            @endif
                               <br>

                        </div>
                    </div>
                </div>
                @endif
                @if($problem->contractor_id)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <div>
                                <h5 class="card-title">Travail Attribuer à</h5>
                                <hr>
                            </div>
                            <b>Sous-traitant</b>: {{$problem->subcontractor->fname}} {{$problem->subcontractor->lname}}<br>
                            <b>Superviseur de travail</b>: {{$problem->supervisor->fname}} {{$problem->supervisor->lname}}<br>
                            <b>Propriétaire d'entreprise</b>: {{$problem->owner->fname}} {{$problem->owner->lname}}<br>

                        </div>
                    </div>
                </div>
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">L'avancement des travaux</h5>
                                    <hr>
                                </div>
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
                                    <div class="col py-2">
                                        <div class="card border-primary shadow radius-15">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Sous-traitant: <br></h4>
                                                <h5 class="card-title text-primary">{{$problem->subcontractor->fname}} {{$problem->subcontractor->lname}}</h5>
                                                @if($problem->contractor_status == 0)
                                                    <span class="badge bg-warning">In Process</span>
                                                @elseif($problem->contractor_status == 1)
                                                    <span class="badge bg-success">Complete</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="col py-2">
                                        <div class="card border-primary shadow radius-15">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Superviseur de travail: <br></h4>
                                                <h5 class="card-title text-primary">{{$problem->supervisor->fname}} {{$problem->supervisor->lname}}</h5>
                                                @if($problem->supervisor_status == 0)
                                                    <span class="badge bg-warning">In Process</span>
                                                @elseif($problem->supervisor_status == 1)
                                                    <span class="badge bg-success">Complete</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                    <div class="col py-2">
                                        <div class="card border-primary shadow radius-15">
                                            <div class="card-body">
                                                <h4 class="card-title text-primary">Propriétaire d'entreprise: <br></h4>
                                                <h5 class="card-title text-primary">{{$problem->owner->fname}} {{$problem->owner->lname}}</h5>
                                                @if($problem->owner_status == 0)
                                                    <span class="badge bg-warning">In Process</span>
                                                @elseif($problem->owner_status == 1)
                                                    <span class="badge bg-success">Complete</span>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                        </div>
                    </div>
                @endif
            </div>
            <!--end row-->

        </div>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Envoyer un devis au client</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.problem.quote', ['id' => $problem->id])}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Entrer le prix</b><span class="text-danger">*</span></label>
                                <br>
                                <br>
                                <input type="number"  name="price" required placeholder="Entrer le prix" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Date d'entretien</b><span class="text-danger">*</span></label>
                                <br>
                                <br>
                                <input type="date"  name="service_date" required class="form-control">
                            </div>
                        </div>
                        <br>
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

    <div class="modal fade" id="exampleModal1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Attribuer un problèmet</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('admin.assign.problem', ['id' => $problem->id])}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Sélectionnez le sous-traitant</b><span class="text-danger">*</span></label>
                                <br>
                                <br>
                                <div class="mb-3">
                                    <select name="contractor_id" class="single-select form-control" required>
                                        <option value="">Sélectionnez le sous-traitant</option>
                                        @foreach($subcontractor as $sub)
                                            <option value="{{$sub->id}}">{{$sub->fname}} {{$sub->lname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Sélectionnez le superviseur de travail</b><span class="text-danger">*</span></label>
                                <br>
                                <br>
                                <div class="mb-3">
                                    <select name="supervisor_id" class="single-select form-control" required>
                                        <option value="">Sélectionnez le superviseur de travail</option>
                                        @foreach($supervisor as $sup)
                                            <option value="{{$sup->id}}">{{$sup->fname}} {{$sup->lname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="title"><b>Sélectionnez le propriétaire de l'entreprise</b><span class="text-danger">*</span></label>
                                <br>
                                <br>
                                <div class="mb-3">
                                    <select name="owner_id" class="single-select form-control" required>
                                        <option  value="">Sélectionnez le propriétaire de l'entreprise</option>
                                        @foreach($owner as $ow)
                                            <option value="{{$ow->id}}">{{$ow->fname}} {{$ow->lname}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
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
