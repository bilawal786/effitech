<?php

use App\Gallery;
use App\Offers;
use App\Page;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'fname' => 'Admin',
            'lname' => '',
            'email' => 'admin@gmail.com',
            'role' => '0',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg'
        ]);
        User::create([
            'fname' => 'Client',
            'lname' => '',
            'email' => 'client@gmail.com',
            'role' => '1',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg',
            'siret' => '12345678'
        ]);
        User::create([
            'fname' => 'Traitant',
            'lname' => '',
            'email' => 'traitant@gmail.com',
            'role' => '2',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg',
            'siret' => '12345678'
        ]);
        User::create([
            'fname' => 'Commercial',
            'lname' => '',
            'email' => 'commercial@gmail.com',
            'role' => '3',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg',
            'siret' => '12345678'
        ]);
        User::create([
            'fname' => 'Conducteur',
            'lname' => '',
            'email' => 'conducteur@gmail.com',
            'role' => '4',
            'phone' => '00000000',
            'address' => 'Guadeloupe',
            'password' => Hash::make('12345678'),
            'image' => 'local/avatar.jpg',
            'siret' => '12345678'
        ]);
        \App\Category::create([
            'name' => "Test Category"
        ]);
        \App\SubCategory::create([
            'category_id' => '1',
            'name' => "Test Sub Category"
        ]);
        \App\Content::create([
            'image1' => 'allimages/1634331441allimages.jpg',
            'image2' => 'allimages/1634331473allimages.jpg',
            'image3' => 'allimages/1634331344allimages.jpg',
            'h1' => 'Construction',
            'h2' => 'Rénovation',
            'h3' => 'Confiance',
            'h4' => 'Effitech BTP',
            'h5' => 'Qualité',

            'st1' => '1- La phase commerciale',
            'st2' => '2- La phase études',
            'st3' => '3- La phase réalisation',
            'st4' => 'Achèvement à temps',
            'st5' => 'Aucun coût caché',
            'st6' => 'Zéro réclamation',

            'sd1' => 'Repérer ou susciter la demande dun client, élabor...',
            'sd2' => 'le bureau détudes analyse les choix techniques décidés avec le client, et les moyens qui vont être mis en œuvre.',
            'sd3' => 'le bureau détudes analyse les choix techniques décidés avec le client, et les moyens qui vont être mis en œuvre.',
            'sd4' => 'Texte effitech BTP',
            'sd5' => 'Texte effitech BTP',
            'sd6' => 'Texte effitech BTP',

            'timage' => 'allimages/1634332331allimages.jpg',
            'review1' => 'Ils étaient très sympathiques et cétait un plaisir daccomplir mes travaux. Je suis très satisfait des services quils ont fournis. Je recommanderai cette entreprise à ma famille et mes amis. Leurs travaux sont professionnels et leur prix était compétitif',
            'review2' => 'Vraiment un grand merci à toute léquipe de Effitech Btp',
            'review3' => 'Vraiment un grand merci à toute léquipe de Effitech Btp',
            'review4' => 'Vraiment un grand merci à toute léquipe de Effitech Btp',

            'rg1' => 'Paul du Gosier',
            'rg2' => 'Céline de Petit Bourg',
            'rg3' => 'Céline de Petit Bourg',
            'rg4' => 'Céline de Petit Bourg',

            'address' => '34 Lot, artisanal zone of Petit-Pérou 97139 LES ABYMES',
            'phone' => '0690618825',
            'fax' => '0590310055',
            'email' => 'effitechbtp@gmail.com',
            'logo' => 'allimages/1634337266allimages.png',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
        ]);
        Page::create([
            'h1' => 'Notre vision',
            'h2' => 'Notre mission',
            'd1' => 'La qualité de notre travail est une source importante de fierté et nous travaillons sans relâche , afin de conserver notre statut dexcellence.',
            'd2' => 'Notre mission est de mener à terme des projets de ...',

            'video' => 'rwvmru5JmXk',
            'vimage' => 'allimages/1634334809allimages.jpg',

            'image1' => 'allimages/1634335801allimages.jpg',
            'title1' => 'Construire',
            'de1' => 'Nous offrons également à nos clients qui en manifestent le souhait des solutions « clés en main »',
            'image2' => 'allimages/1634335841allimages.jpg',
            'title2' => 'Nos solutions',
            'de2' => 'Nous trouvons des solutions créatives aux problèmes que nous rencontrons et nous les mettons rapidement en œuvre.',

            'rh1' => 'Pourquoi ?',
            'rh2' => 'Notre mission',
            'rd1' => 'Si vous êtes seul pour gérer un projet de rénovation important, touchant à de multiples aspects de votre logement (électricité, plomberie, clim, revêtements)',
            'rd2' => 'Nous nous  chargeons également de la coordination des différentes interventions sur le projet, dans le respect du budget et des délais.',

            'rvideo' => 'rwvmru5JmXk',
            'rvimage' => 'allimages/1634338199allimages.jpg',

            'rimage1' => 'allimages/1634339278allimages.jpg',
            'rtitle1' => 'Rénové',
            'rde1' => 'Faire une rénovation complète : lors de la rénovation d’un appartement ou d’une maison, l’entreprise générale de travaux peut gérer tout vos travaux.',
            'rimage2' => 'allimages/1634339291allimages.jpg',
            'rtitle2' => 'Pourquoi ?',
            'rde2' => 'Pour limiter le nombre d’interlocuteurs sur un chantier, l’entreprise générale de travaux, appelée aussi entreprise tous corps d’état, peut être une solution intéressante.',

        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(1).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(2).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(3).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(4).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(5).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(6).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(7).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(8).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Gallery::create([
            'photo' => 'web/images/portfolio/pf%20(9).jpg',
            'description' => 'In the modern industrialized world, construction usually involves the translation of designs into reality. A formal design team may be assembled to plan the physical proceedings, and to integrate those proceedings with the other parts. The design usually consists of drawings and specifications, usually prepared by a design team including Architect, civil engineers, mechanical engineers, electrical engineers, structural engineers, fire protection engineers, planning consultants, architectural consultants, and archaeological consultants. The design team is most commonly employed by (i.e. in contract with) the property owner. Under this system, once the design is completed by the design team, a number of construction companies or construction management companies may then be asked to make a bid for the work, either based directly on the design, or on the basis of drawings and a bill of quantities provided by a quantity surveyor. Following evaluation of bids, the owner typically awards a contract to the most cost efficient bidder.'
        ]);
        Offers::create([
            'title' => 'Demo Titre 1',
            'photo' => 'web/images/portfolio/pf%20(1).jpg',
            'gallery' => '["web/images/portfolio/pf%20(1).jpg","web/images/portfolio/pf%20(2).jpg","web/images/portfolio/pf%20(3).jpg"]',
            'nom' => '["1","2","3"]',
            'surface' => '["surface 1","surface 2"," surface3"]',
            'diagram' => 'web/images/portfolio/pf%20(1).jpg',
            'price' => '38000',
            'details' => 'Pour limiter le nombre d’interlocuteurs sur un chantier, l’entreprise générale de travaux, appelée aussi entreprise tous corps d’état, peut être une solution intéressante.'
        ]);
        Offers::create([
            'title' => 'Demo Titre 2',
            'photo' => 'web/images/portfolio/pf%20(2).jpg',
            'gallery' => '["web/images/portfolio/pf%20(1).jpg","web/images/portfolio/pf%20(2).jpg","web/images/portfolio/pf%20(3).jpg"]',
            'nom' => '["1","2","3"]',
            'surface' => '["surface 1","surface 2"," surface3"]',
            'diagram' => 'web/images/portfolio/pf%20(1).jpg',
            'price' => '38000',
            'details' => 'Pour limiter le nombre d’interlocuteurs sur un chantier, l’entreprise générale de travaux, appelée aussi entreprise tous corps d’état, peut être une solution intéressante.'
        ]);
        Offers::create([
            'title' => 'Demo Titre 2',
            'photo' => 'web/images/portfolio/pf%20(3).jpg',
            'gallery' => '["web/images/portfolio/pf%20(1).jpg","web/images/portfolio/pf%20(2).jpg","web/images/portfolio/pf%20(3).jpg"]',
            'nom' => '["1","2","3"]',
            'surface' => '["surface 1","surface 2"," surface3"]',
            'diagram' => 'web/images/portfolio/pf%20(1).jpg',
            'price' => '38000',
            'details' => 'Pour limiter le nombre d’interlocuteurs sur un chantier, l’entreprise générale de travaux, appelée aussi entreprise tous corps d’état, peut être une solution intéressante.'
        ]);
    }
}
