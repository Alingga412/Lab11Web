<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run()
    {
        $model = model('UserModel');
		$model->insert([
			'username' => 'alingga',
			'useremail' => 'alinggareandito6@gmail.com',
			'userpassword' => password_hash('admin123', PASSWORD_DEFAULT),
		]); 
    }
}
