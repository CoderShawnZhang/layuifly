<?php
/**
 * Created by PhpStorm.
 * User: anlewo0208
 * Date: 2017/12/2
 * Time: 下午2:32
 */

namespace backend\controllers;


use app\models\Menu;

class MenuController extends BaseController
{
    public function actionList(){
        $MenuList = Menu::find()->asArray()->all();

        return $this->render('list',['menuList' => json_encode($MenuList)]);
    }

    public function actionAdd(){

        return $this->render('add');
    }

    public function actionEdit(){

    }

    public function actionDel(){

    }
}