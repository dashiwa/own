<?php


class SessionStorage
{
  function __construct($cookieName = 'PHP_SESS_ID')
  {
    session_name($cookieName);
    session_start();
  }

  function set($key, $value)
  {
    $_SESSION[$key] = $value;
  }

  function get($key)
  {
    return $_SESSION[$key];
  }

  // ...
}


class User
{
  protected $storage;

  function __construct()
  {
    $this->storage = new SessionStorage(STORAGE_SESSION_NAME);
  }

  function setLanguage($language)
  {
    $this->storage->set('language', $language);
  }

  function getLanguage()
  {
    return $this->storage->get('language');
  }

  // ...
}

define('STORAGE_SESSION_NAME', 'SESSION_ID');

$user = new User();
$user->setLanguage('fr');
$user_language = $user->getLanguage();