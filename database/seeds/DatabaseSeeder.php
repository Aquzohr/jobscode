<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      // Role comes before User seeder here.
      $this->call(RoleTableSeeder::class);
      // User seeder will use the roles above created.
      $this->call(UserTableSeeder::class);

      $faker = Faker\Factory::create();
      $job = array("คอมพิวเตอร์", "บัญชี/การเงิน", "ส่งเอกสาร/ขับรถ/ส่งของ");
    	foreach (range(1,30) as $index) {
            DB::table('job_positions')->insert([
                'jobname' => $faker->jobTitle,
                'job' => $job[$index%3],
                'company_id' => 1,
        ]);
      }

      foreach (range(1,30) as $index) {
          DB::table('users')->insert([
              'name' => $faker->name,
              'email' => $faker->email,
              'password' => bcrypt('password'),
        ]);
      }
      
      foreach (range(1,30) as $index) {
          DB::table('member_profiles')->insert([
              'fullname' => $faker->name,
              'interested_job' => $job[$index%3],
              'user_id' => $index+3,
        ]);
      }

      foreach (range(1,30) as $index) {
        DB::table('role_user')->insert([
            'role_id' => 1,
            'user_id' => $index+3,
        ]);
      }

    
  }
}
