<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Articles */

$this->title = $model->title;
$this->params['breadcrumbs'][] = ['label' => 'Articles', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>
    <p>ID: <?echo $model->id;?></p>
    <p>Title: <?echo $model->title;?></p>
    <p>Primary Text: <?echo $model->primary_text;?></p>
    <p>Text: <?echo $model->text;?></p>
    <p>Author: <?echo $model->user->nickname;?></p>
    <p>Category: <?echo $model->category->article;?></p>

</div>
