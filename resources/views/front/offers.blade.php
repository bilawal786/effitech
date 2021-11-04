@extends('layouts.front')
@section('content')

    <!-- content begin -->
    <div id="content" class="no-bottom">
        <div class="container">
            <div class="row">
                @foreach($offers as $row)
                <div class="col-md-4 col-sm-6 mb30">
                    <figure class="pic-hover hover-scale mb20">
                            <span class="center-xy">
                                <a href="{{route('offer.details', ['id' => $row->id])}}">
                                    <i class="fa fa-plus btn-action btn-action-hide"></i></a>
                            </span>
                        <span class="bg-overlay"></span>
                        <img src="{{asset($row->photo)}}" class="img-responsive" alt="">
                    </figure>

                    <h3>{{$row->title}}</h3>
                    {!! $row->details !!}
                    <br>
                    <a href="{{route('offer.details', ['id' => $row->id])}}" class="read_more mt10">Lire la suite <i class="fa fa-chevron-right id-color"></i></a>

                </div>
                @endforeach

            </div>
        </div>

        <!-- section begin -->
        <section class="call-to-action bg-color dark mt80 pt20 pb20" data-speed="5" data-type="background">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <h3 class="mt10">Vous cherchez le meilleur partenaire pour vos prochains travaux de construction ou de rénovation ?</h3>
                    </div>

                    <div class="col-md-4 text-right">
                        <a href="{{route('front.contact')}}" class="btn btn-line-black btn-fx">Engagez-nous maintenant</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- logo carousel section close -->

    </div>

@endsection
