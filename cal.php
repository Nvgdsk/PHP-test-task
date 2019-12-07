<?php


class Calc
{
    private $result = 0;
//    private function setResult($val){
//        $this->result=$val;
//    }
    public function getResult()
    {
        return $this->result;
    }

    public function add($var = 0)
    {
        $var = $this->checkVal($var);
        $this->result += $var;
        return $this->result;
    }

    public function subtract($var = 0)
    {
        $var = $this->checkVal($var);
        $this->result -= $var;
        return $this->result;
    }

    public function divide($var = 0)
    {
        $var = $this->checkVal($var);
        if ($var != 0) {
            $this->result /= $var;
            return $this->result;
        }
        return "Exception: divide by zero";

    }

    public function mult($var = 0)
    {
        $var = $this->checkVal($var);
        $this->result *= $var;
        return $this->result;
    }

    public function round($var, $accuracy = 0)
    {
        $var = $this->checkVal($var);
        $this->result = round($var, $accuracy);
        return $this->result;
    }
    private function checkVal($var)
    {
        if(is_numeric($var)){
            return $var;
        }
        else{
            return 0;
        }
    }
}

