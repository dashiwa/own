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

  function __construct($storage)
  {
    $this->storage = $storage;
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

$storage = new SessionStorage('SESSION_ID');
$user = new User($storage);

$user->setLanguage('fr');
$user_language = $user->getLanguage();