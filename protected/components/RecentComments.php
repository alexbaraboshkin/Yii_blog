<?php
/**
 * Created by PhpStorm.
 * User: AlexeyBaraboshkin
 * Date: 20.03.2015
 * Time: 13:45
 */

Yii::import('zii.widgets.CPortlet');

class RecentComments extends CPortlet
{
    public $title='Recent Comments';
    public $maxComments=10;

    public function getRecentComments()
    {
        return Comment::model()->findRecentComments($this->maxComments);
    }

    protected function renderContent()
    {
        $this->render('recentComments');
    }
}