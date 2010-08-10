<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity
{
    
    private $_id;
    private $_name;
    /**
     * Authenticates a user.
     * The example implementation makes sure if the username and password
     * are both 'demo'.
     * In practical applications, this should be changed to authenticate
     * against some persistent user identity storage (e.g. database).
     * @return boolean whether authentication succeeds.
     */
    public function authenticate()
    {
        $user=User::model()->find('(username = LOWER(:username) 
            OR email = LOWER(:email)) AND password = :password 
            AND  status = :status',array(
            'username' => $this->username,
            'email' => $this->username,
            'password' => md5($this->password),
            'status' => User::ACTIVE
        ));
        
        if($user){
            $this->_id = $user->id;
            $this->_name = $user->username;
            return true;
        }
        return false; 
    }
}
