<?php

use yii\helpers\Html;
use kartik\editable\Editable;
use kartik\grid\GridView;
use yii\base\Widget;
use yii\helpers\Url;


/* @var $this yii\web\View */
/* @var $searchModel backend\models\MyAuthItemsSearchModel */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', '注释路由');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="my-auth-item-index">

    <h3><?= Html::encode($this->title) ?></h3>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?php /* = Html::a(Yii::t('app', 'Create My Auth Item'), ['create'], ['class' => 'btn btn-success'])  */?>
    </p>
    <?php 
//= GridView::widget([
//         'export' => false,
//         'dataProvider' => $dataProvider,
//         'filterModel' => $searchModel,
//         'columns' => [
            
             
             
           
//             'name',
             
//             ['class' => 'kartik\grid\EditableColumn',
//                 'attribute' => 'description',
//                 'editableOptions' => ['asPopover' => false,'formOptions'=>[
//                     'method'=>'post',
//                     'action'=> Url::toRoute('my-auth-items/updatea')
//                 ],],
                
                
//     ],
//             //             'rule_name',
//             /* 'data:ntext', */
//             // 'created_at',
//             // 'updated_at',

//             ['class' => 'yii\grid\ActionColumn'],
//         ],
//     ]); 
?>

<?php
$gridColumns = [
// the name column configuration
    [
         
        'attribute'=>'name',
         
        ],
        // the buy_amount column configuration
        [
            'class'=>'kartik\grid\EditableColumn',
            'attribute'=>'description',
            'editableOptions'=>[
                'header'=>'注释',
                'inputType'=>\kartik\editable\Editable::INPUT_TEXT,
                //'options'=>['pluginOptions'=>['min'=>0, 'max'=>20]]
            ],
            'hAlign'=>'left',
            'vAlign'=>'right',
//             'width'=>'300px',
            'format'=>['text', ],
            'pageSummary'=>true
        ],
        ['class' => 'yii\grid\ActionColumn'],
        ];

// the GridView widget (you must use kartik\grid\GridView)
echo \kartik\grid\GridView::widget([
    'dataProvider'=>$dataProvider,
    'filterModel'=>$searchModel,
    'columns'=>$gridColumns
]);
?>
</div>