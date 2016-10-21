<?php
/**
 * Created by PhpStorm.
 * User: denis
 * Date: 21.10.16
 * Time: 15:30
 */

namespace common\models;
use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;
use yii\db\ActiveQuery;


class Item extends ActiveRecord
{
    public static function tableName()
    {
        return 'items';
    }

    public function scenarios()
    {
        return [
            self::SCENARIO_DEFAULT => ['name', 'cost', 'description']
        ];
    }

}