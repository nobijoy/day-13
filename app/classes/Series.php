<?php
namespace App\classes;


class Series
{
    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;
    protected $user;

    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];
        $this->oddEven = $post['odd_even'];

    }

    public function index(){
        header('Location: pages/index.php');
    }

    public function makeSeries(){
        if ($this->startingNumber > $this->endingNumber){
            return $this->bigToSmallSeries();
        }
        else{
            return $this->smallToBigSeries();
        }
    }

    protected function smallToBigSeries(){
        for ($this->i= $this->startingNumber; $this->i <=$this->endingNumber; $this->i++){
            $this->result .= $this->i.' ';
        }

        return $this->result;
    }

    protected function bigToSmallSeries(){
        for ($this->i= $this->startingNumber; $this->i >= $this->endingNumber; $this->i--){
            $this->result .= $this->i.' ';
        }
        return $this->result;
    }

}