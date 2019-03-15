<?php

// example.com/src/Calendar/Controller/LeapYearController.php
namespace Calendar\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Calendar\Model\LeapYear;

class LeapYearController
{
  public function index(Request $request, $year)
  {
    $leapYear = new LeapYear();
    if ($leapYear->isLeapYear($year)) {
      return new Response('Yep, this is a leap year!');
    }

    return new Response('Nope, this is not a leap year.');
  }
}