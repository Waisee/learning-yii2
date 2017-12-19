<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Book;
use frontend\models\Author;

class BookshopController extends \yii\web\Controller
{

    public function actionIndex()
    {
//        $conditions = ['publisher_id' => 1];
//        $bookList = Book::find()->where($conditions)->limit(2)->orderBy('date_published')->all();
        $bookList = Book::find()->limit(20)->orderBy('date_published')->all();
//        echo '<pre>';
//        print_r($result);
//        echo '</pre>';die;

        return $this->render('index', [
           'bookList' => $bookList, 
        ]);
    }

    public function actionCreate()
    {
        $book = new Book();

        if ($book->load(Yii:: $app->request->post()) && $book->save())
        {
            Yii::$app->session->setFlash('success', 'Saved!!');
            return $this->refresh();
        }

        return $this->render('create', compact('book'));
    }

}
