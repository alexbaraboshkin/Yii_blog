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


        // если хотите, то $_GET['news_name'] можете обработать
        // предварительно всякими функциями для безопасноти
        $url = $_GET['news_name'];
        // проверяем есть ли новость с таким url
        if ($news = News::model()->findByAttributes(array('url' => $url)))
        {
            // получается мы нашли в базе запись
            // в которой значение url равняется переменной news_name
            echo $news->title ,  '<br>' , $news->body;
        }
        else
        {
            // нет такой новости, об этом и сообщаем:
            echo 'новость не существует!';
        }
//        $url = $_GET['news_name'];
//        // проверяем новость с таким же url
//        if ($news = News::model()->findByAttributes(array('url' => $url)))
//        {
//            echo $news->title , '<br>', $news->body;
//        } else {
//            // нет такой новости, об этом и сообщаем:
//            echo 'новости не существует!';
//        }
    }

}