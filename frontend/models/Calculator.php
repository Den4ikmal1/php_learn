<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Calculator extends Model
{
    public $valueA;
    public $valueB;
    public $operation;

    public function rules()
    {
        return [
            [[ 'valueA', 'valueB', 'operation'], 'required' ],
        ];
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_DEFAULT => ['valueA', 'valueB', 'operation']
        ];
    }



    public function calculate()
    {
        switch ($this->operation) {
            case '0':
                return (floatval($this->valueA) + floatval($this->valueB));
            case '1':
                return (floatval($this -> valueA) - floatval($this -> valueB));
            case '2':
                return (floatval($this -> valueA) * floatval($this -> valueB));
            case '3':
                return (floatval($this -> valueA) / floatval($this -> valueB));
            default:
                return 0;
        }
    }



}