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

                                            <iframe style="width:100%; height:500px; border:0" src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d19905.696399556287!2d-0.3007084089960577!3d51.417531259591925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1s2334+Peterson+Street+Kingston+UK+London+H14D!5e0!3m2!1sen!2s!4v1546697086219" width="600" height="450" ></iframe>
                                        </div>
                                    </div>

                                    <div class="col-md-6">

                                        <address class="address-style-2">
                                            <span><strong>Adresse:</strong>Collins Street West, Victoria 8007 Australia</span>
                                            <span><strong>Telephone:</strong>(208) 333 9296</span>
                                            <span><strong>Fax:</strong>(208) 333 9298</span>
                                            <span><strong>Email:</strong><a href="mailto:info@example.com">info@example.com</a></span>
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
                        <form name="contactForm" id='contact_form' method="post" action='email.php'>
                            <div class="row">
                                <div class="col-md-12">
                                    <div id='name_error' class='error'>S'il vous plaît entrez votre nom.</div>
                                    <div>
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Votr Nom">
                                    </div>

                                    <div id='email_error' class='error'>Veuillez entrer votre identifiant e-mail valide.</div>
                                    <div>
                                        <input type='text' name='email' id='email' class="form-control" placeholder="Votre Email">
                                    </div>

                                    <div id='phone_error' class='error'>Veuillez entrer votre numéro de téléphone.</div>
                                    <div>
                                        <input type='text' name='phone' id='phone' class="form-control" placeholder="Votre Telephone">
                                    </div>
                                    <br>

                                    <div id='phone_error' class='error'>Veuillez sélectionner les servicesv.</div>
                                    <div>

                                        <select class="form-control" name="select-service">
                                            <option value="Select Service">Sélectionnez le service</option>
                                            <option value="Building Construction">Building Construction</option>
                                            <option value="House Roomodel">House Roomodel</option>
                                            <option value="Interior Design">Interior Design</option>
                                            <option value="Renovation">Renovation</option>
                                            <option value="OutField Digging">OutField Digging</option>
                                            <option value="Road Construction">Road Construction</option>
                                            <option value="Floors &amp; Roofs">Floors &amp; Roofs</option>
                                            <option value="Plumbing">Plumbing</option>
                                            <option value="Electricity">Electricity</option>
                                        </select>
                                    </div>
                                    <br>
                                    <div id='message_error' class='error'>Veuillez saisir votre message.</div>
                                    <div>
                                        <textarea name='message' id='message' class="form-control" placeholder="Votre Un message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div id='submit'>
                                        <input type='submit' id='send_message' value='Soumettre le formulaire' class="btn btn-line">
                                    </div>
                                    <div id='mail_success' class='success'>Your message has been sent successfully.</div>
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

