<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;


class UsersController extends AppController
{

    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['register', 'logout']);
    }


    public function register()
    {
        $this->viewBuilder()->setLayout('login');

        if ($this->request->is('post')) {
            $username = $this->request->getData('username');

            if ($this->Users->checkNewUsername($username)) {

                $password = $this->request->getData('password');
                $cPassword = $this->request->getData('confirm_password');
                if ($password !== $cPassword) {
                    $this->Flash->error(__('Passwords do not match'));
                } else {
                    $user = $this->Users->newUser($this->request->getData());
                    if ($user) {
                        $this->Auth->setUser($user);
                        return $this->redirect($this->Auth->redirectUrl());
                    }
                    
                    $this->Flash->error(__('Sorry, cannot create a new user with name ' . $username));
                }

            } else {
                $this->Flash->error(__('Sorry, this username is already taken'));
            }
    
            $this->set('errorExist', true);
        }
    }


    public function login()
    {
        $this->viewBuilder()->setLayout('login');

        if ($this->request->is('post')) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            
            $this->Flash->error(__('Invalid username or password, try again'));
            $this->set('errorExist', true);
        }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}

