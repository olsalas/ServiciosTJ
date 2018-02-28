<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Remision */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Remisions', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="remision-view">

    

<div class="row">

    <div class="col-md-4">
      <label>Tipo de Remisión</label>
      <input class="form-control" type="text" readonly="readonly" value="<?= $model->tipo ?>">  
      
    </div>

    <div class="col-md-4">
        
        <label>Fecha de Remisión</label>
        <input class="form-control" type="text" readonly="readonly" value="<?= $model->fecha ?>">  

    </div>

    <div class="col-md-4">
        
        <label>Cliente</label>
        <input class="form-control" type="text" readonly="readonly" value="<?= $model->cliente->nombre ?>">  

    </div>

</div>

<div class="col-md-12">

    <p>&nbsp;</p>
      <button type="button" id="btn-add-producto" class="btn btn-default btn-primary pull-right" aria-label="Left Align">
        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
      </button>


</div>  

 <div class="col-md-12">

    <table class="table table-responsive">
      
      <thead>
      
        <tr>
           
           
           <th>Material</th>
           <th>Cantidad</th>
           

        </tr>       
      
      </thead>
      
      <tbody id = "lastRow">
          
      
      </tbody>        
        

    </table>

 </div>

</div>
