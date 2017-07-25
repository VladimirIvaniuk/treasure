<?php

namespace app\models;

use Yii;
use yii\base\Model;

class CommentForm extends Model
{
    public $comment;
    public function rules()//Валидация
    {
        return[
          [['comment'], 'required'],//required устанавливает поле формы обязательным для заполнения
           [['comment'],'string','length'=>[3,250]]//ограничим количество символов
        ];
    }

    public function saveComment($article_id)
    {
        $comment= new Comment;
        $comment->text = $this->comment;
        $comment->user_id=Yii::$app->user->id;
        $comment->article_id = $article_id;
        $comment->status=0;
        $comment->date= date('Y-m-d');
        return $comment->save();
    }
}