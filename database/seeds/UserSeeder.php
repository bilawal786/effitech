<?php

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
            'image1' => 'web/images-slider/wide1.jpg',
            'image2' => 'web/images-slider/wide2.jpg',
            'image3' => 'web/images-slider/wide16.jpg',
            'h1' => 'Construction',
            'h2' => 'Planification',
            'h3' => 'Rénovation',
            'h4' => 'Ton rêve',
            'h5' => 'Partenaire',

            'st1' => 'Personnel professionnel',
            'st2' => '
Économisez du temps et de largent',
            'st3' => 'Estimé détaillé',
            'st4' => 'Achèvement à temps',
            'st5' => 'Aucun coût caché',
            'st6' => 'Zéro réclamation',

            'sd1' => ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. ',
            'sd2' => ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. ',
            'sd3' => ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. ',
            'sd4' => ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. ',
            'sd5' => ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. ',
            'sd6' => ' Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium. ',

            'timage' => 'web/images/background/bg-side-1.jpg',
            'review1' => 'Ils étaient très sympathiques et cétait un plaisir daccomplir mes tâches. Je suis très satisfait des services quils ont fournis. Je recommanderai cette entreprise à ma famille et mes amis. Leurs travaux sont professionnels et leur prix était compétiti',
            'review2' => 'Ils étaient très sympathiques et cétait un plaisir daccomplir mes tâches. Je suis très satisfait des services quils ont fournis. Je recommanderai cette entreprise à ma famille et mes amis. Leurs travaux sont professionnels et leur prix était compétiti',

            'rg1' => 'Paul Client',
            'rg2' => 'Rela CLient',

            'address' => 'Collins Street West, Victoria 8007 Australia',
            'phone' => '(208) 333 9296',
            'fax' => '(208) 333 9298',
            'email' => 'info@example.com',
            'logo' => 'local/logo.png',
            'facebook' => 'www.facebook.com',
            'instagram' => 'www.instagram.com',
        ]);
    }
}
