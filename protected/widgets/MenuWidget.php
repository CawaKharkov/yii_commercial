<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
Yii::import('zii.widgets.CMenu');
/**
 * Description of MenuWidget
 *
 * @author Cawa
 */
class MenuWidget extends CMenu
{
    //public $menuItems;
    public $section;

    public function run() 
    {
        $this->render($this->section, ['items' => Yii::app()->params[$this->section]]);
    }
}
