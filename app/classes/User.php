<?php
namespace App\classes;
class User
{
    protected $user = [];

    public function getAllUser(){
        $this->user = [
            0 => [
                'name' => 'Shahahbuddin',
                'mobile' => '12344',
                'location' => 'dhaka',
            ],
            1 => [
                'name' => 'rafa',
                'mobile' => '1234544',
                'location' => 'rampura',
            ]
        ];
        return $this->user;
    }

}