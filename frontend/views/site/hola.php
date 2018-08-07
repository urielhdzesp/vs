<?php
use yii\helpers\Html;

$this->params['breadcrumbs'][] = 'Holi :)';
$this->title = "Say Hola";
?>
<?= Html::encode($message) ?>
<? echo"<pre>",print_r($this->params),"</pre>"; ?>