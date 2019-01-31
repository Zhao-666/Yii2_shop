<?php
/**
 * Created by PhpStorm.
 * User: Next
 * Date: 2019/1/31
 * Time: 22:28
 */

namespace app\models;

use yii\db\ActiveRecord;

class Student extends ActiveRecord
{
    public static function tableName()
    {
        return 'student';
    }
}