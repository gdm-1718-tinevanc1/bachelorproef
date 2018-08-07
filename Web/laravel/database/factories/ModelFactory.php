<?php

use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/
$factory->define(EDS_site\Models\Country::class, function (Faker $faker) {
    return [
        'name' => $faker->country,
        'code' => $faker->countryCode
    ];
});

$factory->define(EDS_site\Models\TypeAgency::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'country_id' => EDS_site\Models\Country::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Disease::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'description' => $faker->text(),
    ];
});

$factory->define(EDS_site\Models\TypePractitioner::class, function (Faker $faker) {
    return [
        'name' => $faker->Word,
        'description' => $faker->Text()
    ];
});

$factory->define(EDS_site\Models\TypeDevice::class, function (Faker $faker) {
    return [
        'name' => $faker->word
    ];
});

$factory->define(EDS_site\Models\Device::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'intention' => $faker->text(),
        'procedure' => $faker->text(),
        'type_agency_id' => EDS_site\Models\TypeAgency::all()->random()->id,
        'type_practitioner_id' => EDS_site\Models\TypePractitioner::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Treatment::class, function (Faker $faker) {
    return [
        'info' => $faker->Text(),
        'problem' => $faker->Text(),
        'country_id' => EDS_site\Models\Country::all()->random()->id,
        'type_practitioner_id' => EDS_site\Models\TypePractitioner::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Symptom::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'info' => $faker->text()
    ];
});

$factory->define(EDS_site\Models\TypeDisease::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'info' => $faker->text(),
        'criteria' => $faker->text(),
        'diagnose' => $faker->text(),
        'disease_id' => EDS_site\Models\Disease::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Image::class, function (Faker $faker) {
    return [
        'url' => $faker->imageUrl(),
        'symptom_id' => EDS_site\Models\Symptom::all()->random()->id,
        'device_id' => EDS_site\Models\Device::all()->random()->id,
        'type_disease_id' => EDS_site\Models\TypeDisease::all()->random()->id,
        'exercisetherapy_id' => EDS_site\Models\Exercisetherapy::all()->random()->id,
        'exercisesexample_id' => EDS_site\Models\Exercisesexample::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Source::class, function (Faker $faker) {
    return [
        'link' => $faker->Url(),
        'symptom_id' => EDS_site\Models\Symptom::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Right::class, function (Faker $faker) {
    return [
        'name' => $faker->Word,
        'description' => $faker->Text(),
        'procedure' => $faker->Text(),
        'type_agency_id' => EDS_site\Models\TypeAgency::all()->random()->id,
        'country_id' => EDS_site\Models\Country::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Faq::class, function (Faker $faker) {
    return [
        'subject' => $faker->Word,
        'question' => $faker->Text(),
        'answer' => $faker->Text(),
        'country_id' => EDS_site\Models\Country::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\News::class, function (Faker $faker) {
    return [
        'title' => $faker->Word,
        'subtitle' => $faker->Sentence,
        'date' => $faker->date(),
        'source' => $faker->Word,
        'place' => $faker->city,
        'text' => $faker->Text()
    ];
});

$factory->define(EDS_site\Models\TypeNew::class, function (Faker $faker) {
    return [
        'name' => $faker->Word,
        'description' => $faker->Text()
    ];
});

$factory->define(EDS_site\Models\Location::class, function (Faker $faker) {
    return [
        'street' => $faker->streetName,
        'housenumber' => $faker->buildingNumber,
        'city' => $faker->city,
        'zipcode' => $faker->postcode,
        'country_id' => EDS_site\Models\Country::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Practitioner::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'clientele' => $faker->name,
        'phonenumber' => $faker->phoneNumber,
        'email' => $faker->safeEmail,
        'rizivnumber' => $faker->creditCardNumber,
        'location_id' => function(){
            return factory(EDS_site\Models\Location::class)->create()->id;
        },
        'type_practitioner_id' => EDS_site\Models\TypePractitioner::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Profile::class, function (Faker $faker) {
    return [
        'firstname' => $faker->firstName,
        'lastname' => $faker->lastName,
        'phonenumber' => $faker->phoneNumber,
        'rizivnumber' => $faker->creditCardNumber,
        'function' => $faker->word,
        'location_id' => function(){
            return factory(EDS_site\Models\Location::class)->create()->id;
        }
    ];
});

$factory->define(EDS_site\Models\Manualtherapy::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'text' => $faker->Text()
    ];
});

$factory->define(EDS_site\Models\Exercisetherapy::class, function (Faker $faker) {
    return [
        'text' => $faker->Text(),
        'right' => $faker->numberBetween(1,2),
        'type_exercisetherapy_id' =>  EDS_site\Models\TypeExercisetherapy::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Exercisesexample::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->Sentence(),
        'type_exercisesexample_id' =>  EDS_site\Models\TypeExercisesexample::all()->random()->id
    ];
});

$factory->define(EDS_site\Models\Manualtherapy::class, function (Faker $faker) {
    return [
        'title' => $faker->word,
        'text' => $faker->Text()
    ];
});

$factory->define(EDS_site\Models\Role::class, function (Faker $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->Text()
    ];
});

$factory->define(EDS_site\User::class, function (Faker $faker) {
    static $password;
    return [
        'username' => $faker->userName,
        'email' => $faker->unique()->safeEmail,
        'password' =>  $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
        'profile_id' => function(){
            return factory(EDS_site\Models\Profile::class)->create()->id;
        }
    ];
});

