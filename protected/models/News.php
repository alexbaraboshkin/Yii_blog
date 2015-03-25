<?php
/**
 * Created by PhpStorm.
 * User: AlexeyBaraboshkin
 * Date: 25.03.2015
 * Time: 17:33
 */

class News extends CActiveRecord
{
    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }
    public function tableName()
    {
        return 'news';
    }
}