@extends('layouts.admin')
@section('content')
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Offresr</div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                            <thead>
                            <tr>
                                <th>Id</th>
                                <th>Titre</th>
                                <th>Photo</th>
                                <th>Prix</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($offers as $off)
                                <tr>
                                    <td>{{$off->id}}</td>
                                    <td>{{$off->title}}</td>
                                    <td>
                                        <img src="{{asset($off->photo)}}" style="height: 40px" alt="">
                                    </td>
                                    <td>{{$off->price}} €</td>
                                    <td>
                                        <a href="{{route('offer.edit', ['id' => $off->id])}}"><button type="button" class="btn btn-primary btn-sm"><i class="lni lni-pencil me-0"></i>
                                        </button></a>
<!--                                        <button type="button" class="btn btn-danger btn-sm"><i class="bx bx-box me-0"></i>
                                        </button>-->
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
