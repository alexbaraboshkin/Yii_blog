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
        if (!empty($_GET['news_name']))
        {
            // если значение не пустое...
            // выводим содержимое переданного файла с расширением txt
//            echo file_get_contents($_GET['news_name'] . ".txt");
//            echo file_get_contents(dir(__FILE__)."/../../public/" . $_GET['news_name'] . ".txt");
        }
    }

}