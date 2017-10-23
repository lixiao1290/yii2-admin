<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\MyAuthItem */

$this->title = Yii::t('app', '创建操作');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'My Auth Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-auth-item-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
