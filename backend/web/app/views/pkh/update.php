<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PkhModel */

$this->title = 'Update Pkh Model: ' . $model->id_pkh;
$this->params['breadcrumbs'][] = ['label' => 'Pkh Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id_pkh, 'url' => ['view', 'id' => $model->id_pkh]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="pkh-model-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
