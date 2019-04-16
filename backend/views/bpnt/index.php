<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\BpntSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Bpnt Models');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="bpnt-model-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Bpnt Model'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'id_bpnt',
            'nama',
            'nik',
            'alamat',
            'kecamatan',
            'kelurahan',
            'tahun',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); 
	var_dump($searchModel);die();
	
	?>
</div>
