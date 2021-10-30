@extends('layouts.provider-dashboard')
@section('content')
    <div class="page-content">
        <div class="main-wrapper">
            <div class="row">
                @if(Auth::user()->role == 2 || Auth::user()->role == 3)
                <div class="col-md-6">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Étapes Nouvelles</h5>
                            <h2>{{$sitenew->count()}}</h2>
                            <p>Étapes Nouvelles</p>
                            <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Étapes complètes</h5>
                            <h2>{{$sitecomplete->count()}}</h2>
                            <p>Étapes complètes</p>
                            <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @else
                <div class="col-md-6">
                    <div class="card stat-widget">
                        <div class="card-body">
                            <h5 class="card-title">Afficher les clients</h5>
                            <h2>{{$clients->count()}}</h2>
                            <p>Afficher les clients</p>
                            <div class="progress">
                                <div class="progress-bar bg-info progress-bar-striped" role="progressbar" style="width: 100%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>

    </div>
@endsection

