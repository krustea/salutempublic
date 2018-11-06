<?php

function getAllDoctors(){
    $docteurs = [];

    $docteurs[] = [
        "firstname" => "Tony",
        "lastname" => "Starck",
        "photo" => "doctor-1.jpg",
        "skills" => ["Medecin", "Megalomane"],
        "university" => "Digital Campus",
        "phone_number" => "0203040506"
    ];
    $docteurs[] = [
        "firstname" => "Peter",
        "lastname" => "Parker",
        "photo" => "doctor-2.jpg",
        "skills" => ["Ostéopathe", "Arachnophile"],
        "university" => "Digital Campus",
        "phone_number" => "0203040506"
    ];
    $docteurs[] = [
        "firstname" => "Jessica",
        "lastname" => "Jones",
        "photo" => "doctor-3.jpg",
        "skills" => ["Addictologue", "Homéopathe"],
        "university" => "Digital Campus",
        "phone_number" => "0203040506"
    ];

    return $docteurs;
}