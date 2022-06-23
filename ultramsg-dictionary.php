<?php

class ultramsgDictionary
{
    public function generateRandomSentence($length = 25)
    {
        $quote = array(
            "I wish I had",
            "Why Can't I have",
            "Can I have",
            "Did you have",
            "Will you get",
            "When will I get"
        );
        
        $rand_quote = array_rand($quote, 1);
        $items = array(
            "Money",
            "Time",
            "Coffee",
            "A Better Job",
            "A Life",
            "Better Programming Skills",
            "Internet that was mine",
            "More Beer",
            "More Donuts",
            "Candy",
            "My Daughter",
            "Cable",
            "A Dining Room Table",
            "Better Couches",
            "A PS4",
            "A New Laptop",
            "A New Phone",
            "Water",
            "Rum",
            "Movies",
            "A Desktop Computer",
            "A Fish Tank",
            "My Socks",
            "My Jacket",
            "More Coffee",
            "More Koolaid",
            "More Power",
            "A Truck",
            "Toolbox",
            "More fish for Fish Tank",
            "A Screwdriver",
            "A Projector",
            "More Pants"
        );
        $rand_keys = array_rand($items, 1);
        $stmt = $quote[$rand_quote] . " " . $items[$rand_keys];

        return $stmt;
    }

    public function welcomeIntent()
    {
        $hiArray = ["hi", "hello", "hola", "مرحبا", "Selam", "Привет", "Oi", "नमस्ते"];

        return $hiArray;
    }

    public function welcomeResponses()
    {
        $welcomeArray = ["Hi", "welcome , how i can help you", "I'm pleased to talk to you"];

        return $welcomeArray[rand(0, count($welcomeArray) - 1)];
    }


    public function generateRandomJoke()
    {
        $myfile = file_get_contents("joke-db.json");
        $joks = json_decode($myfile, true);
        $random_number = rand(0, count($joks) - 1);

        return $joks[$random_number]["body"];
    }

    public function generateRandomImage()
    {
        $random_number = rand(1, 100); // This images for test , max : 300 
        $url = "https://ultramsg.s3.us-west-2.amazonaws.com/image-example/" . $random_number . ".jpg";
        return  $url;
    }
}
