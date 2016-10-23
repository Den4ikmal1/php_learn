<?php

namespace app\models;

use Yii;
use yii\base\Model;

class Calculator extends Model
{
    public $valueA;
    public $valueB;
    public $operation;

    public $error = false;

    private $param1 = null;
    private $param2 = null;
    private $operations = null;

    public function rules()
    {
        return [
            [ 'valueA', 'required' ]
        ];
    }


    public function calculate()
    {
        switch ( $this -> operation ) {
            case '+':
                return ( $this -> valueA + $this -> valueB );
            case '-':
                return ( $this -> valueA - $this -> valueB );
            case '*':
                return ( $this -> valueA * $this -> valueB );
            case '/':
                return ( $this -> valueA / $this -> valueB );
            default:
                return 0;
        }
    }

}