<?php
namespace App\classes;
class Series
{

    protected $startingNumber;
    protected $endingNumber;
    protected $result;
    protected $i;
    protected $oddEven;

    public function __construct($post=null)
    {
        $this->startingNumber = $post['starting_number'];
        $this->endingNumber = $post['ending_number'];

        if(isset($post['odd_even'])){
            $this->oddEven = $post['odd_even'];
        }

    }

    public function index(){
        header('Location: pages/index.php');
    }

    public function makeSeries()
    {
        if($this->startingNumber>$this->endingNumber)
        {
            return $this->btosSeries();
        }
        else
        {
            if ($this->oddEven == 'odd')
            {
                return $this->stobOddSeries();
            }
            else if($this->oddEven == 'even')
            {
                return $this->stobEvenSeries();
            }
            else{
                return $this->stobSeries();
            }

        }
    }

    protected function stobSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {

            $this->result.= $this->i.' ';
        }
        return $this->result;
    }
    protected function btosSeries(){
        for ($this->i = $this->startingNumber; $this->i >= $this->endingNumber; $this->i--)
        {
            $this->result.= $this->i.' ';
        }
        return $this->result;
    }

    protected function stobOddSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if($this->i % 2 != 0){
                $this->result.= $this->i.' ';
            }

        }
        return $this->result;
    }
    protected function stobEvenSeries(){
        for ($this->i = $this->startingNumber; $this->i <= $this->endingNumber; $this->i++)
        {
            if($this->i % 2 == 0){
                $this->result.= $this->i.' ';
            }
        }
        return $this->result;
    }
}