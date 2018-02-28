<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\Select2;
use kartik\datecontrol\Module;
use kartik\datecontrol\DateControl;
/* @var $this yii\web\View */
/* @var $model app\models\Remision */
/* @var $form yii\widgets\ActiveForm */


//Preparar datos de clientes
$data_clientes = array();

foreach ($clientes as $cliente) {
	
	$data_clientes[$cliente->nit] = $cliente->nombre;
}

?>

<div class="remision-form">

    <?php $form = ActiveForm::begin(); ?>


    <div class="row">

    	<div class="col-md-6">

	   		 <?= $form->field($model, 'tipo')->dropDownList(['SA' => 'SALIDA', 
		                                                     'DV' => 'DEVOLUCIÓN'
		                                                    ]) ?>    		
    		

    	</div>

    	<div class="col-md-6">
    		
 
          <?= $form->field($model, 'fecha')->widget(DateControl::classname(), [
			 
        	 'autoWidget'=>true,
			  'displayFormat' => 'php:Y-m-d',
			  'saveFormat' => 'php:Y-m-d',
			  'type'=> DateControl::FORMAT_DATE,
 
           ]);?>

    	</div>



    </div>


    <div class="row">

    	<div class="col-md-6">

 		   <?= $form->field($model, 'Cliente_nit')->widget(Select2::classname(), [
		   
				   'data' => $data_clientes,
		
				  ])
			?>
    		

    	</div>

    	<div class="col-md-6">
    		
 		   <div class="form-group">
		        <?= Html::submitButton('Guardar', ['class' => 'btn btn-lg btn-success']) ?>
 		   </div>


    	</div>

    </div>

    <?php ActiveForm::end(); ?>

</div>
