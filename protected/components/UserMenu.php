<?php
/**
 * Created by PhpStorm.
 * User: AlexeyBaraboshkin
 * Date: 20.03.2015
 * Time: 12:02
 */

class UserMenu extends CPortlet
{
    public function init()
    {
        $this->title=CHtml::encode(Yii::app()->user->name);
        parent::init();
    }

    protected function renderContent()
    {
        $this->render('userMenu');
    }
}