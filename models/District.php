<?php
/**
 * Created by PhpStorm.
 * User: chobits
 * Date: 2018-12-12
 * Time: 23:03
 */

namespace app\models;


use yii\db\ActiveRecord;

class District extends ActiveRecord
{
    public static function tableName()
    {
        return "{{ district }}";
    }

}