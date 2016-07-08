<?php

/**
 * Created by PhpStorm.
 * User: Aleksey.Kolupaev
 * Date: 08.07.2016
 * Time: 10:04
 */
class DemoController extends Controller
{
    public function actionIndex()
    {
        $this->render("index");
    }
}