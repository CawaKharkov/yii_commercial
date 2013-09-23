<?php
/* @var $this ShowcaseController */

$this->breadcrumbs = array(
    'Products',
);
?>
<?php
$this->widget('zii.widgets.grid.CGridView', array(
    'dataProvider' => $products,
    'itemsCssClass' => 'table table-hover',
    'htmlOptions' => array('class' => 'example'),
    //'itemView' => '_view',
    //'template' => "{items}\n{pager}{edi",
    'columns' => array(
        'id',
        'title',
        'description',
        'price',
        'categorie_id',
        'active',
        'created_at',
        array(
            'class' => 'CButtonColumn',
            'template' => '{edit}{delete}',
            'buttons' => [
                'edit' => [
                    'label' => 'Edit', //Text label of the button.
                    'options' => array('class' => 'btn btn-primary btn-xs'), //HTML options for the button tag.
                    'visible' => 'true', //A PHP expression for determining whether the button is visible.
                //'Yii::app()->createUrl("/customer/editmember1",array("id" => $data->primaryKey))',
                ],
                'delete' => [
                    'label' => 'Delete', //Text label of the button.
                    'options' => array('class' => 'btn btn-primary btn-xs'), //HTML options for the button tag.
                    'visible' => 'true', //A PHP expression for determining whether the button is visible.
                    'imageUrl'=> '',
                //'Yii::app()->createUrl("/customer/editmember1",array("id" => $data->primaryKey))',
                ],
            ]
        ),
    ),
));
?>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
    You may change the content of this page by modifying
    the file <tt><?php echo __FILE__; ?></tt>.
</p>
