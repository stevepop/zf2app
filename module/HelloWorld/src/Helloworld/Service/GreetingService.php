<?php
namespace Helloworld\Service;


class GreetingService {
    public function getGreeting()
    {
        if(date("H") > 9)
            return "Good Morning, World!";
        else if(date("H") > 11 && date("H") < 17)
            return "Hello world!";
        else
            return "Good evening, world!";
    }
}