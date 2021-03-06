<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\PkhModel */

$this->title = 'Create Pkh Model';
$this->params['breadcrumbs'][] = ['label' => 'Pkh Models', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pkh-model-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
