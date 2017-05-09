<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;


class UsersTable extends Table
{
    
    public function initialize(array $config) 
    {
        $this->addBehavior('Timestamp');
    }

    
    public function validationDefault(Validator $validator)
    {
        return $validator
            ->notEmpty('username', 'A username is required')
            ->notEmpty('password', 'A password is required');
    }


    public function checkNewUsername($username)
    {
        return $this->find()->where(['username' => $username])->count() === 0;     
    }
    

    public function newUser(array $data) // TODO: use general method?
    {
        $user = $this->newEntity($data);
        if ($this->save($user)) {
            return $user;
        }

        return false;
    }


    public function updateUser(array $data) // TODO: use general method?
    {
        $user = $this->get($data['id']);
        if ($user && $this->patchEntity($data)) {
            return $user;
        }

        return false;
    }


    public function isAdmin($userId)
    {
        return $this->get($userId)->role === "admin";
    }


}