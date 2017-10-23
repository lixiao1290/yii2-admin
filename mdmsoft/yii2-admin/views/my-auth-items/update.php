<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\MyAuthItem */

$this->title = Yii::t('app', '修改 操作: ', [
    'modelClass' => 'My Auth Item',
]) . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'My Auth Items'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->name]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="my-auth-item-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
