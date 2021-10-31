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
                                <form action="{{route('owner.need.store')}}" method="post" accept-charset="UTF-8" enctype="multipart/form-data" class="row g-3">
                                    @csrf
                                    <div class="col-md-6">
                                        <label for="inputLastName1" class="form-label">Choisir Client</label>
                                        <div class="input-group">
                                            <select  name="client_id" class="form-control" id="">
                                                <option value="">Sélectionnez Client</option>
                                                @foreach($clients as $cli)
                                                    <option value="{{$cli->id}}">{{$cli->fname}} {{$cli->lname}}</option>
                                                @endforeach
                                            </select>
                                        </div>
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
