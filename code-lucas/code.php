<?php

$users = [
    0 => ['name' => 'Lucas', 'email' => 'lucas@live.com', 'password' => base64_encode('123')],
    1 => ['name' => 'Cristiano dos Santos Fuck', 'email' => 'cristiano@live.com', 'password' => base64_encode('123')],
    2 => ['name' => 'Geovanne', 'email' => 'geovanne#hack!@#', 'password' => base64_encode('123')],
];

$utils = new Utils();

foreach ($users as $key => $user)
    $users[$key]['password'] = $utils->decodePassword($user['password']);

foreach ($users as $key => $user) {
    $users[$key]['name'] = $utils->checkExistsFuckWords($user['name']);
    $users[$key]['email'] = Email::checkEmail($user['email']);

    unset($users[$key]['password']);
}

var_dump($users);

class Utils
{
    private $words = [];

    //método mágico
    public function __construct()
    {
        if (!defined('EMAIL_DEFAULT'))
            define('EMAIL_DEFAULT', 'email@live.com');

        $this->words = ['fuck', 'fuck off', 'fuck you'];
    }
    
    /**
     * @param string $password
     * @return string
     **/
    public function decodePassword(string $password): string
    {
        return base64_decode($password);
    }
    
    /**
     * @return string
     **/
     public function getDefaultEmail(): string
    {
        return EMAIL_DEFAULT;
    }
    
    /**
     * This function find for 'fuck words' into text, if found, so remove it.
     * 
     * @param string 
     * @return string $text
     **/
    public function checkExistsFuckWords(string $text): string
    {
        foreach ($this->words as $word)
            $text = str_replace($word, '*%@#!', strtolower($text));
        
        return $text;
    }
}

abstract class Email
{
   /**
     * @param string $email
     * @return string
     **/
    public static function checkEmail(string $email): string
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL))
            $email = (new Utils())->getDefaultEmail();
            
        return $email;
    }
}