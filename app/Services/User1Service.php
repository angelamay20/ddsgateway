<?php

namespace App\Services;
use App\Traits\ConsumesExternalService;

class User1Service{

    use ConsumesExternalService;
    
    /**
     * The base uri to consume the User1 Service
     * @var string
     */
 
    public $baseUri;

    /**
     * The secret to consume the User1 Service
     * @var string
     */
    // public $secret;


    public function __construct()
    {
        $this->baseUri = config('services.users1.base_uri');
       // $this->secret = config('services.users1.secret');
    }

    public function obtainUsers1()
    {
        return $this->performRequest('GET','/users');
    }

    /**
    * Create one user using the User1 service
    * @return string
    */
    public function createUser1($data)
    {
        return $this->performRequest('POST', '/users',$data);
    }

    /**
     * Obtain one single user from the User1 service
     * @return string
     */

    public function obtainUser1($id)
    {
        return $this->performRequest('GET', "/users/{$id}");
    }

    /**
    * Update an instance of user1 using the User1 service
    * @return string
    */
    public function editUser1($data, $id)
    {
        return $this->performRequest('PUT',"/users/{$id}", $data);
    }

    /**
     * Remove an existing user
     * @return Illuminate\Http\Response
     */
    public function deleteUser1($id)
    {
        return $this->performRequest('DELETE', "/users/{$id}");
    }
    
}