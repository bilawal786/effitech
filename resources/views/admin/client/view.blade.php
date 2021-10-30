@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Détail de #{{$client->id}}</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                        </ol>
                    </nav>
                </div>
                <div class="ms-auto">
                    <button  data-bs-toggle="modal" data-bs-target="#exampleModal1" type="button" class="btn btn-success mr-2">Envoyer un devis</button>
                </div>
            </div>

            <hr class="border-top" />
            <div class="row">
                <div class="col-md-6">
                    <div class="col">
                        <div class="card">
                            <div class="card-body">
                                <div>
                                    <h5 class="card-title">Détails du client</h5>
                                    <hr>
                                </div>
                                <p class="card-text">
                                        <b>Prenom</b>: {{$client->fname}}<br>
                                        <b>Nom</b>: {{$client->lname}}<br>
                                        <b>Email</b>: {{$client->email}}<br>
                                        <b>Telephone</b>: {{$client->phone}}<br>
                                        <b>Client Taper</b>: {{$client->type}}<br>
                                        <b>Adresse</b>: {{$client->address}}<br>
                                        <b>Créé par</b>: {{$client->creater->fname}} {{$client->creater->lname}}<br>
                                        <b>Créé à</b>: {{$client->created_at->format('d-m-y')}}<br>
                                        <b>Catégorie</b>: {{empty($client->category->name) ? 'Supprimé' : $client->category->name}}<br>
                                        <b>Sous catégorie</b>: {{empty($client->subcategory->name) ? 'Supprimé' : $client->subcategory->name}}<br>
                                        <b>Description</b>: {{$client->notes}}<br>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="col">
                                <div class="card">
                                    <div class="card-body">
                                        <div>
                                            <h5 class="card-title">Toutes les citations</h5>
                                            <hr>
                                        </div>
                                        @foreach($client->quotes as $quote)
                                        <div class="card">
                                            <div class="card-body">
                                                <div>
                                                    <h6 class="card-title">{{$quote->title}}</h6>
                                                    <hr>
                                                </div>
                                                <p class="card-text">
                                                    <b>Titre</b>: {{$quote->title}}<br>
                                                    <b>Prix</b>: {{$quote->price}} €<br>
                                                    <b>Date de début</b>: {{$quote->start_date}}<br>
                                                    <b>Date de fin</b>: {{$quote->end_date}}<br>
                                                    <b>Statut</b>:
                                                    @if($quote->status == 0)
                                                        <span class="badge bg-primary">Client en attente</span>
                                                    @elseif($quote->status == 1)
                                                        <span class="badge bg-success">J'accepte</span>
                                                    @else
                                                        <span class="badge bg-warning">Rejeter</span>
                                                    @endif
                                                    <br>
                                                    <b>Details</b>: {{$quote->details}}<br>
                                                </p>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
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
                    <h5 class="modal-title" id="exampleModalLabel">Envoyer un devis</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('client.quote.store')}}" method="post" enctype="multipart/form-data" data-parsley-validate>
                        @csrf
                        <input type="hidden" name="client_id" value="{{$client->id}}">
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
                                <label for="title"><b>Prix</b><span class="text-danger">*</span></label>
                                <br>
                                <div class="mb-3">
                                    <input type="number" name="price" class="form-control" placeholder="Prix" required>
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
@section('script')
    <script>

        $(document).ready(function() {
            $(".single-select").select2({
                dropdownParent: $("#exampleModal1")
            });
        });
    </script>
@endsection

