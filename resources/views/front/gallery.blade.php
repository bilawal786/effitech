@extends('layouts.front')
@section('content')

    <!-- content begin -->
    <div id="content" class="no-top no-bottom">
        <!-- section begin -->
        <section id="section-portfolio" aria-label="section-portfolio" class="no-top no-bottom">


            <div id="gallery" class="gallery full-gallery de-gallery pf_full_width pf_3_cols">

                <!-- gallery item -->
                @foreach($gallery as $gal)
                <div class="item residential">
                    <div class="picframe">
                        <a href="{{route('gallery.view', ['id' => $gal->id])}}">
                                <span class="overlay">
                                    <span class="pf_text">

                                    </span>
                                </span>
                        </a>
                        <img src="{{asset($gal->photo)}}" alt="" />
                    </div>
                </div>
                @endforeach
            </div>

        </section>
        <!-- section close -->



    </div>
@endsection
