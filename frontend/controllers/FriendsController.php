<?php

namespace frontend\controllers;

use frontend\models\Friends;
use yii\web\Controller;
use yii\data\Pagination;

class FriendsController extends Controller
{
    public function actionIndex()
    {
        $query = Friends::find();
        $pagination = new Pagination(['defaultPageSize' => 5, 'totalCount' => $query->count()]);
        $friends = $query->offset($pagination->offset)->limit($pagination->limit)->all();
        return $this->render('index', ['friends' => $friends, 'pagination' => $pagination]);
    }
}
