<?php
/* @var $this ShowcaseController */

$this->breadcrumbs=array(
	'Products',
);
?>
<?php 
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $products,
    'itemsCssClass' => 'table table-hover',
    'htmlOptions' => array('class' => 'example')
    //'itemView' => '_view',
 //   'template' => "{items}\n{pager}",
));
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
	You may change the content of this page by modifying
	the file <tt><?php echo __FILE__; ?></tt>.
</p>
