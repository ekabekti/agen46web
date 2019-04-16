<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\BpntModel */

$this->title = Yii::t('app', 'Update Bpnt Model: {name}', [
    'name' => $model->id_bpnt,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Bpnt Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_bpnt, 'url' => ['view', 'id' => $model->id_bpnt]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="bpnt-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
