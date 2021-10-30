@extends('layouts.provider-dashboard')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                <div class="col-md-12">
                    @if(Session::has('message'))
                        <div class="alert alert-success alert-dismissible fade show">
                            <svg viewBox="0 0 24 24" width="24" height="24" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
                            {{ Session::get('message') }}
                            <button type="button" class="close h-100" data-dismiss="alert" aria-label="Close"><span><i class="mdi mdi-close"></i></span>
                            </button>
                        </div>
                    @endif

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Ajouter un nouveau client</h4>
                        </div>
                        <div class="card-body">
                            <div class="basic-form">
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    Le couriel a déja été pris en compte
                                </div>
                                @enderror
                                <form action="{{route('client.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Prénom</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                            <input type="text" name="fname" class="form-control border-start-0" required id="inputLastName1" placeholder="Prénom" />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName2" class="form-label">Nom</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-user'></i></span>
                                            <input type="text" name="lname" class="form-control border-start-0" required id="inputLastName2" placeholder="Nom" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputPhoneNo" class="form-label">Telephone</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-microphone' ></i></span>
                                            <input type="text" name="phone" class="form-control border-start-0" required id="inputPhoneNo" placeholder="Telephone" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputEmailAddress" class="form-label">Email</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-message' ></i></span>
                                            <input type="email" name="email" class="form-control border-start-0"  required id="inputEmailAddress" placeholder="Email" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Mot de passe</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                                            <input type="text" name="password" class="form-control border-start-0" required id="inputChoosePassword" value="12345678" />
                                        </div>
                                    </div>
                                    <input type="hidden" name="role" value="1">
                                    <div class="col-12">
                                        <label for="inputChoosePassword" class="form-label">Taper</label>
                                        <div class="input-group">
                                            <select name="type" class="form-control" id="selectclient" required>
                                                <option value="Particulier">Sélectionnez le type de client</option>
                                                <option class="pro" value="Professionnel">Professionnel</option>
                                                <option class="part" value="Particulier">Particulier</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-6 mydiv" style="display: none">
                                        <label for="inputChoosePassword" class="form-label">Societe</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                                            <input type="text" name="company" class="form-control border-start-0" id="inputChoosePassword" placeholder="Societe" />
                                        </div>
                                    </div>
                                    <div class="col-6 mydiv1" style="display: none">
                                        <label for="inputChoosePassword" class="form-label">Siret</label>
                                        <div class="input-group"> <span class="input-group-text bg-transparent"><i class='bx bxs-lock-open' ></i></span>
                                            <input type="number" name="siret" class="form-control border-start-0" id="inputChoosePassword" placeholder="Siret" />
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress3" class="form-label">Adresse</label>
                                        <textarea required name="address" class="form-control" id="inputAddress3" placeholder="Adresse" rows="3"></textarea>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Choisir une catégorie</label>
                                        <div class="input-group">
                                            <select onchange="categorychange(this)" name="category_id" class="form-control" id="">
                                                <option value="">Sélectionnez une catégorie</option>
                                                @foreach($categories as $cat)
                                                    <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Choisir une catégorie</label>
                                        <div class="input-group">
                                            <select  name="subcategory_id" class="form-control subcategory" id="">

                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Taper</label>
                                        <div class="input-group">
                                            <select  name="construction_type" class="form-control" id="">
                                                <option value="">Sélectionnez le Project</option>
                                                <option value="Construction">Construction</option>
                                                <option value="Rénovation">Rénovation</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <label for="inputAddress3" class="form-label">Description</label>
                                        <textarea required name="notes" class="form-control" id="inputAddress3" placeholder="Description" rows="5"></textarea>
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

    </div>
@endsection
@section('script')
    <script>
        $('#selectclient').on('change', function() {
            if(this.value == "Professionnel"){
                $( ".mydiv" ).show();
                $( ".mydiv1" ).show();
            }else{
                $( ".mydiv").hide();
                $( ".mydiv1").hide();
            }
        });
    </script>
@endsection
