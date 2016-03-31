<?php

/**
 * User short summary.
 *
 * User description.
 *
 * @version 1.0
 * @author Abdullah
 */
class User
{
    private $_id;
    private $_name;
    private $_email;
    private $_password;
    public function getId()
    {
        return $this->_id;
    }
    public function setId($value)
    {
        $this->_id =$value;
    }
    public function getName()
    {
        return $this->_name;
    }
    public function setName($value)
    {
        $this->_name =$value;
    }
    public function getEmail()
    {
       return $this->_email;
    }
    public function setEmail($value)
    {
        $this->_email =$value;
    }
    public function getPassword()
    {
        return  $this->_password;
    }
    public function setPassword($value)
    {
        $this->_password =$value;
    }


}