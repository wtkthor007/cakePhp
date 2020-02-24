<?php
declare(strict_types=1);

use Migrations\AbstractSeed;
use Cake\Auth\DefaultPasswordHasher;

/**
 * Amind seed.
 */
class AmindSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $hasher = new DefaultPasswordHasher();
        $password = $hasher->hash('secret');
        $data = [
            'first_name'=>'Hector',
            'email'=>'ed@edsonmm.com',
            'password'=>$password,
            'role'=>'admin',
            'active'=>1,
            'created'=>date("Y-m-d H:i:s"),
            'modified'=>date("Y-m-d H:i:s")
        ];

        $table = $this->table('users');
        $table->insert($data)->save();

    }
}