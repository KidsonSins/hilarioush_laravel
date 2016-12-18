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
        // $this->call(UsersTableSeeder::class);
        DB::table('schoolinfos')->insert([
            'name' => 'Hilarioush English Boarding School',
            'information' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et ducimus accusantium, vitae earum velit cum? Magni nesciunt, non doloribus harum similique quos earum aut excepturi ut id hic aspernatur, cumque obcaecati tempora quam. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ut ipsam itaque odio cupiditate vero commodi libero cum, dolore obcaecati enim nam at nobis voluptas doloremque, nihil impedit quam iste, totam? Quibusdam officiis eos, culpa tempore libero quidem quas. Rerum delectus explicabo iste ducimus inventore! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente cumque suscipit omnis dolor voluptate dolores beatae, dolorem eos enim',
            'photo_id' =>'1',
            'address' =>'Kathmandu, Nepal',
            'email' =>'info@gmail.com',
            'phone_no' =>'9841XXXXXX',
            'fax_no' =>'9841XXXXXX',
            'website' =>'www.hilarioush.edu.np',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('users')->insert([
            'name' => 'Sajan Sainju',
            'email' => 'tsajansainju@gmail.com',
            'photo_id'=> '0',
            'password'=> bcrypt('sasa1234'),
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('photos')->insert([
            'path' => 'myimg3.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);
        DB::table('photos')->insert([
            'path' => 'principal.jpg',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);

        DB::table('principal_messages')->insert([
            'photo_id' => '2',
            'name' =>'lorem ipsum',
            'message'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium obcaecati possimus laborum accusamus impedit, inventore, recusandae molestias rerum praesentium saepe dolore quo aut?',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ]);


        
    }
}
