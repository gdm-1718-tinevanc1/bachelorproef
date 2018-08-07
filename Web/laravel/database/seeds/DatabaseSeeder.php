<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CountryTableSeeder::class);
        $this->call(TypePractitionerTableSeeder::class);
        $this->call(TypeAgencyTableSeeder::class);
        $this->call(TypeDeviceTableSeeder::class);
        $this->call(DeviceTableSeeder::class);
        $this->call(FaqTableSeeder::class);
        $this->call(SymptomTableSeeder::class);
        $this->call(DiseaseTableSeeder::class);
        $this->call(CharacDiseaseTableSeeder::class);
        $this->call(TypeNewTableSeeder::class);
        $this->call(NewsTableSeeder::class);
        $this->call(PractitionerTableSeeder::class);
        $this->call(RightTableSeeder::class);
        $this->call(RoleTableSeeder::class);
        $this->call(SourceTableSeeder::class);
        $this->call(TypeDiseasesTableSeeder::class);
        $this->call(TreatmentTableSeeder::class);

        $this->call(TypeExercisesexampleTableSeeder::class);
        $this->call(TypeExercisetherapyTableSeeder::class);
        $this->call(ExercisesexampleTableSeeder::class);
        $this->call(ExercisetherapyTableSeeder::class);
        $this->call(ManualtherapyTableSeeder::class);

        $this->call(ImageTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }
}
