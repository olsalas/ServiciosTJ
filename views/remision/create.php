<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Remision */

$this->title = 'Create Remision';
$this->params['breadcrumbs'][] = ['label' => 'Remisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remision-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
