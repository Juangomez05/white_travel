<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\Recommendation;
use App\Models\Restaurant;
use App\Models\Touristic_place;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * 
     * @return void
     */
    public function run()
    {
        
        // \App\Models\User::factory(10)->create();
        $usuario = new User();
        $usuario-> id = 1234;
        $usuario-> name_user = "camilo";
        $usuario-> email_user= "camilo@gmail.com";
        $usuario-> password_user = "12121";
        $usuario-> phone_user = 32323233;

        //$usuario->save();
        
        
        $hotel = new Hotel();
        $hotel-> id = 1234;
        $hotel-> name_hotel = "Glamping el viajero";
        $hotel-> address_hotel= "en la esquina";
        $hotel-> phone_hotel = 32323233;
        $hotel-> email_hotel = "viajero@gmail.com";
        $hotel-> website_hotel= "Elviajero.com";
        $hotel-> category_hotel = "Naturaleza";
        $hotel-> description_hotel = "Glamping";
        $hotel-> punctuation_hotel = 5;


        $restauran = new Restaurant();
        $restauran-> id = 13242;
        $restauran-> name_restaurant = "Don hidalgo";
        $restauran-> phone_restaurant = "3214442121";
        $restauran-> email_restaurant = "hidalgorestaurante@gmail.com";
        $restauran-> schedule_restaurant = "Lunes a viernes de 2 pm a 11 pm";
        $restauran-> description_restaurant = "Restaurante elegante para toda la familia";
        //Colocar integer $restauran-> punctuation_restaurant = "4.5 a 5 estrellas en google";
        $restauran-> category_restaurant = "Elegante";

        $restauran->save();

        $touristic = new Touristic_place();
        $touristic-> id = 13242;
        $touristic-> name_touristic_place = "El Morro de Tulcán";
        $touristic-> type_touristic_place = "sitio arqueológico";
        $touristic-> phone_touristic_place = "no cuenta";
        $touristic-> address_touristic_place = "Carrera 2 #18 Norte, Popayán, Cauca";
        $touristic-> schedule_touristic_place = "el principal sitio arqueológico de Popayán";
        $touristic-> description_touristic_place = "Este consiste en una pequeña loma no natural en forma de pirámide truncada, en la cual se encontraron elementos de la época precolombina, aproximadamente entre los años 500 1600 a. C, período que se conoce como de las Sociedades Cacicales Tardías. Pubenence, este monumento fue datado aproximadamente entre el año 800 d. C. y el Siglo xiii d. C";
        $touristic-> punctuation_touristic_place = "4,6 de 5 estrellas";
        $touristic-> category_touristic_place = "Arqueologia sitio";
        
        $touristic->save();


        $reco = new Recommendation();
        $reco-> id_userf = $usuario-> id = 1234;
        $reco-> id_hotelf = $hotel-> id = 1234;
        $reco -> category = "Naturaleza";

        //$reco->save();
    }
}
