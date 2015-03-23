<?php
/**
 * Created by PhpStorm.
 * User: AlexeyBaraboshkin
 * Date: 20.03.2015
 * Time: 13:42
 */

Yii::import('zii.widgets.CPortlet');

class TagCloud extends CPortlet
{
    public $title='Tags';
    public $maxTags=20;

    protected function renderContent()
    {
        $tags=Tag::model()->findTagWeights($this->maxTags);

        foreach($tags as $tag=>$weight)
        {
            $link=CHtml::link(CHtml::encode($tag), array('post/index','tag'=>$tag));
            echo CHtml::tag('span', array(
                    'class'=>'tag',
                    'style'=>"font-size:{$weight}pt",
                ), $link)."\n";
        }
        echo "It's written by protected/components/TagCloud.php";
    }
}