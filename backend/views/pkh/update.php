<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PkhModel */

$this->title = Yii::t('app', 'Update Pkh Model: {name}', [
    'name' => $model->id_pkh,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Pkh Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pkh, 'url' => ['view', 'id' => $model->id_pkh]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="pkh-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
