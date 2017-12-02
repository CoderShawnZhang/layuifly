<?php
/**
 * Created by PhpStorm.
 * User: anlewo0208
 * Date: 2017/12/2
 * Time: 上午11:21
 */

namespace backend\controllers;


class IndexController extends BaseController
{
    public function actionIndex(){
        return $this->render('index');
    }
}