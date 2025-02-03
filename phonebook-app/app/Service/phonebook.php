<?php

namespace App\Service;

use Illuminate\Support\Str;

class phonebook 
{
    public static function searchByName(string $name):array
    {
        return self::searchBy( 'name',  $name);
    }

    public static function searchByCity(string $city):array
    {
        return self::searchBy( 'city',  $city);
    }

    public static function searchByEmail(string $email):array
    {
        return self::searchBy( 'email',  $email);
    }

    public static function searchBy(string $key, string $value):array
    {
        return collect(self::contacts())->filter(fn($contact) => Str::contains(strtolower($contact[$key]),strtolower($value)))->all();
    }



    public static function contacts(): array
    {
        return [
            ['name' => 'John Doe', 'email' => 'johndoe@example.com', 'phone' => '1234', 'city' => 'Quebec'],
            ['name' => 'Jane Smith', 'email' => 'janesmith@example.com', 'phone' => '5678', 'city' => 'Montreal'],
            ['name' => 'Alice Johnson', 'email' => 'alicejohnson@example.com', 'phone' => '9101', 'city' => 'Toronto'],
            ['name' => 'Robert Brown', 'email' => 'robertbrown@example.com', 'phone' => '1121', 'city' => 'Vancouver'],
            ['name' => 'Michael White', 'email' => 'michaelwhite@example.com', 'phone' => '3141', 'city' => 'Ottawa'],
            ['name' => 'Emily Davis', 'email' => 'emilydavis@example.com', 'phone' => '5161', 'city' => 'Calgary'],
            ['name' => 'Daniel Wilson', 'email' => 'danielwilson@example.com', 'phone' => '7181', 'city' => 'Edmonton'],
            ['name' => 'Emma Clark', 'email' => 'emmaclark@example.com', 'phone' => '9202', 'city' => 'Paris'],
            ['name' => 'William Lewis', 'email' => 'williamlewis@example.com', 'phone' => '1023', 'city' => 'Paris'],
            ['name' => 'Sophia Young', 'email' => 'sophiayoung@example.com', 'phone' => '4052', 'city' => 'Victoria'],
            ['name' => 'James Hall', 'email' => 'jameshall@example.com', 'phone' => '6072', 'city' => 'Saskatoon'],
            ['name' => 'Olivia King', 'email' => 'oliviaking@example.com', 'phone' => '8092', 'city' => 'Regina'],
            ['name' => 'Benjamin Scott', 'email' => 'benjaminscott@example.com', 'phone' => '1012', 'city' => 'Hamilton'],
            ['name' => 'Charlotte Green', 'email' => 'charlottegreen@example.com', 'phone' => '3032', 'city' => 'Kitchener'],
            ['name' => 'Lucas Baker', 'email' => 'lucasbaker@example.com', 'phone' => '5052', 'city' => 'London'],
    
        ];
    }
}
