@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Éditer</div>
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
                                <h5 class="mb-0 text-danger">Éditer</h5>
                            </div>
                            @error('email')
                            <strong>Le couriel a déja été pris en compte.</strong>
                            @enderror
                            <hr>
                            <form action="{{route('client.update', ['id' => $client->id])}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                @csrf
                                <div class="col-md-6">
                                    <label for="inputLastName1" class="form-label">Prénom</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                        <input type="text" value="{{$client->fname}}" name="fname" class="form-control border-start-0" required id="inputLastName1" placeholder="Prénom" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="inputLastName2" class="form-label">Nom</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                        <input type="text" value="{{$client->lname}}" name="lname" class="form-control border-start-0" required id="inputLastName2" placeholder="Nom" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputPhoneNo" class="form-label">Telephone</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
                                        <input type="text" value="{{$client->phone}}" name="phone" class="form-control border-start-0" required id="inputPhoneNo" placeholder="Telephone" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputEmailAddress" class="form-label">Email</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
                                        <input type="email" readonly value="{{$client->email}}" name="email" class="form-control border-start-0"  required id="inputEmailAddress" placeholder="Email" />
                                    </div>
                                </div>
                                <div class="col-6 mydiv">
                                    <label for="inputChoosePassword" class="form-label">Societe</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                                        <input type="text" value="{{$client->company}}"name="company" class="form-control border-start-0" id="inputChoosePassword" placeholder="Societe" />
                                    </div>
                                </div>
                                <div class="col-6 mydiv1">
                                    <label for="inputChoosePassword" class="form-label">Siret</label>
                                    <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                                        <input type="number" value="{{$client->siret}}" name="siret" class="form-control border-start-0" id="inputChoosePassword" placeholder="Siret" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="inputAddress3" class="form-label">Adresse</label>
                                    <textarea required name="address" class="form-control" id="inputAddress3" placeholder="Adresse" rows="3">{{$client->address}}</textarea>
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
