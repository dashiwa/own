<?php


namespace Simplex;

class Subject
{

    protected $observers = [];

    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function doSomething()
    {
        // Сделать что-нибудь.
        // ...

        // Уведомить наблюдателей, что мы что-то сделали.
        $this->notify('something');
    }

    public function doSomethingBad()
    {
        foreach ($this->observers as $observer) {
            $observer->reportError(42, 'Произошло что-то плохое', $this);
        }
    }

    protected function notify($argument)
    {
        foreach ($this->observers as $observer) {
            $observer->update($argument);
        }
    }

    // Другие методы.
}

class Observer
{

    public function update($argument)
    {
        // Сделать что-нибудь.
    }

    public function reportError($errorCode, $errorMessage, Subject $subject)
    {
        // Сделать что-нибудь
    }

    // Другие методы.
}
