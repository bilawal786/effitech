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
            'photo' => 'allimages/1634472272allimages.jpg',
            'description' => 'Réalisation faux plafond'
        ]);
        Gallery::create([
            'photo' => 'allimages/1634472293allimages.jpg',
            'description' => 'Réalisation faux plafond'
        ]);
        Gallery::create([
            'photo' => 'allimages/1634472597allimages.jpg',
            'description' => 'Mise aux norme dun système dépuration- PETIT CANAL'
        ]);
        Gallery::create([
            'photo' => 'allimages/1634473160allimages.jpg',
            'description' => 'Habillage plafond, poutres, poteaux, murs.'
        ]);
        Gallery::create([
            'photo' => 'allimages/1634473333allimages.jpg',
            'description' => 'Aménagement intérieur- pose de placo anti feu'
        ]);
        Gallery::create([
            'photo' => 'allimages/1634474348allimages.jpg',
            'description' => '10 sur 152
Aménagement intérieur locale commercial Ste Rose'
        ]);
        Offers::create([
            'title' => 'Noëline',
            'photo' => 'allimages/1634442160allimages.jpg',
            'gallery' => '["1634442192photos.DESSIN.jpg"]',
            'nom' => '["S\u00e9jour","Wc","Salle de bain","Chambre"]',
            'surface' => '["12 m2","4 m2","6 m2","10 m2"]',
            'diagram' => 'allimages/1634442113allimages.jpg',
            'price' => 'à partir de 38000',
            'total' => '100',
            'details' => 'Votre villa Noëline et son espace nuit, une magnifique suite parentale ouverte sur la piscine avec dressing et sa salle deau complète avec wc. Une deuxième chambre utilisée comme bureau avec une salle deau attenante et wc. La mezzanine abrite un troisième espace nuit avec une chambre, un salon et sa salle deau complète et wc . Vous pourrez aménager une quatrième chambre et espace de jeux pour les enfants ou recevoir la famille.'
        ]);
        Offers::create([
            'title' => 'Kendlyne',
            'photo' => 'allimages/1634442471allimages.jpg',
            'gallery' => '["1634442429photos.DESSIN.jpg","1634442429photos.PLAN.jpg","1634442429photos.PRINCIPALE.jpg","1634442429photos.PRINCIPALEO2.jpg","1634442429photos.PRINCIPALEO3.jpg"]',
            'nom' => '["Sejour","Cuisine","Wc","Salle de bain","Chambre principale","Chambre enfant","V\u00e9randa","TOTAL"]',
            'surface' => '["13 m2","9 m2","4 m2","6 m2","14 m2","10 m2","18 m2","60 m2"]',
            'diagram' => 'allimages/1634442351allimages.jpg',
            'price' => 'à partir de 38000',
            'total' => '100',
            'details' => 'Votre villa Kendlyne et son espace nuit, une magnifique suite parentale ouverte sur la piscine avec dressing et sa salle deau complète avec wc. Une deuxième chambre utilisée comme bureau avec une salle deau attenante et wc.
La mezzanine abrite un troisième espace nuit avec une chambre, un salon et sa salle deau complète et wc . Vous pourrez aménager une quatrième chambre et espace de jeux pour les enfants ou recevoir la famille.'
        ]);
        Offers::create([
            'title' => 'Kannel',
            'photo' => 'allimages/1634471175allimages.jpg',
            'gallery' => '["1634471211photos.DESSIN.jpg","1634471211photos.PLAN.jpg","1634471211photos.PRINCIPALE.jpg","1634471211photos.PRINCIPALE02.jpg","1634471211photos.PRINCIPALE03.jpg"]',
            'nom' => '["S\u00e9jour","Cuisine","Salle de bain","Wc","Chambre principal","Chambre enfant","v\u00e9renda"]',
            'surface' => '["S\u00e9jour","Cuisine","Salle de bain","Wc","Chambre principal","Chambre enfant","v\u00e9renda"]',
            'diagram' => 'allimages/1634471110allimages.jpg',
            'price' => 'à partir de 38000',
            'total' => '100',
            'details' => 'Votre villa Kannel et son espace nuit, une magnifique suite parentale ouverte sur la piscine avec dressing et sa salle deau complète avec wc. Une deuxième chambre utilisée comme bureau avec une salle deau attenante et wc. La mezzanine abrite un troisième espace nuit avec une chambre, un salon et sa salle deau complète et wc . Vous pourrez aménager une quatrième chambre et espace de jeux pour les enfants ou recevoir la famille.'
        ]);
    }
}
