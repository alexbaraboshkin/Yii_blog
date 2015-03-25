<?php
//class HelloController extends CController
//{
//    public function actionWorld()
//    {
//        echo 'Привет от HelloController->actionWorld()';
//    }
//}

class HelloController extends CController
{
    public function actionWorld()
    {
        echo 'Привет от HelloController->actionWorld()';
//        echo YiiBase::getPathOfAlias(system.web.CController);
    }
    public function actionStepan()
    {
        echo 'Привет Степан!';
    }
    public function actionDima()
    {
        echo 'Привет Дима!';
    }
    public function actionMaksim()
    {
        echo 'Привет Максим!';
    }
//    public function actionNews()
//    {
//        echo “Вы открыли новость: ” , $_GET['news_name'];
//    }
    public function actionNews()
    {
        echo "Вы открыли новость: ", $_GET['news_name'];
    }
}