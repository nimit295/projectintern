<?php

use yii\grid\GridView;
use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $searchModel app\models\MusicSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Musics';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="music-index">

    <h1><?=Html::encode($this->title)?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?=Html::a('Create Music', ['create'], ['class' => 'btn btn-success'])?>
    </p>


<?php echo $name;?>



    <?=GridView::widget([
	'dataProvider' => $dataProvider,
	'filterModel' => $searchModel,
	'columns' => [
		['class' => 'yii\grid\SerialColumn'],
		'name',
		'authoor',
		'price',
		'date',
		// 'producer',

		['class' => 'yii\grid\ActionColumn'],
	],
]);?>

</div>
