@extends('layouts.front')
@section('content')

    <!-- content begin -->
    <div id="content">


        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="de_tab tab_style_2">
                        <ul class="de_nav">
                            <li class="active" data-wow-delay="0s"><span>Guadeloupe</span><div class="v-border"></div>
                            </li>
                        </ul>

                        <div class="de_tab_content tc_style-1">

                            <div id="tab1">

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="map-container">
                                            <iframe style="width:100%; height:500px; border:0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3830.305250613524!2d-61.514562985138994!3d16.256118488765715!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c1348a06117f067%3A0x4b7536893402ea4d!2s34%2C%2097139%20ZA%20de%20Petit%20P%C3%A9rou%2C%20Les%20Abymes%2C%20Guadeloupe!5e0!3m2!1sen!2s!4v1634375015611!5m2!1sen!2s" width="600" height="450"  allowfullscreen="" loading="lazy"></iframe>
{{--                                            <iframe style="width:100%; height:500px; border:0" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d19905.696399556287!2d-0.3007084089960577!3d51.417531259591925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s2334+Peterson+Street+Kingston+UK+London+H14D!5e0!3m2!1sen!2s!4v1546697086219" width="600" height="450" ></iframe>--}}
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <address class="address-style-2">
                                            <span><strong>Adresse:</strong>{{$gs->address}}</span>
                                            <span><strong>Telephone:</strong>{{$gs->phone}}</span>
                                            <span><strong>Bureau:</strong>{{$gs->fax}}</span>
                                            <span><strong>Email:</strong><a href="mailto:{{$gs->email}}">{{$gs->email}}</a></span>
                                        </address>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                </div>

                <div class="col-md-4">
                    <div class="padding30" data-bgcolor="#f5f5f5">

                        <h3>Envoyez-nous un message
                            <span class="tiny-border"></span>
                        </h3>
                        <form  name="contactForm"   method="post" action="{{route('query.submit')}}">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    @if(Session::has('message'))
                                    <div style="display: block" class='success'> {{ Session::get('message') }}</div>
                                    @endif
                                    <div>
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Nom">
                                    </div>
                                        <br>
                                    <div>
                                        <input type='text' name='email' id='email' class="form-control" placeholder="Email">
                                    </div>
                                        <br>
                                    <div>
                                        <input type='text' name='phone' id='phone' class="form-control" placeholder="Téléphone">
                                    </div>
                                    <br>
                                    <div>

                                        <select class="form-control" name="service">
                                            <option>Sélectionnez le service</option>
                                         @foreach($categories as $row)
                                                <option value="{{$row->name}}">{{$row->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <div id='message_error' class='error'>Veuillez saisir votre message.</div>
                                    <div>
                                        <textarea name='message' id='message' class="form-control" placeholder="Message"></textarea>
                                    </div>
                                        <br>
                                </div>

                                <div class="col-md-12">
                                    <div id='submit'>
                                        <input type='submit' value='Soumettre le formulaire' class="btn btn-primary">
                                    </div>
                                    <div id='mail_fail' class='error'>Sorry, error occured this time sending your message.</div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection

