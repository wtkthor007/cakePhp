<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 */
class UsersController extends AppController
{

    public function index()
    {
        $user = $this->Users->find('all');
        $this->set('users', $user);
    }

}
