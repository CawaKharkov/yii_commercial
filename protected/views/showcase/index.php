<?php
/* @var $this ShowcaseController */

$this->breadcrumbs = array(
    'Products',
);
?>
<div class="row">
<?php
$this->widget('zii.widgets.CListView', [
    'dataProvider'=>$products,
    'itemView'=>'/showcase/_view',
    'itemsCssClass' => 'thumbnails list-unstyled',
    'itemsTagName'=>'ul',
    'template'=>'{sorter} {items} {pager} <br />',
    'pager' => [
        'class'=>'CLinkPager',
        'header'=>false,
        'cssFile'=> false, 
        'htmlOptions'=>['class'=>'pagination'],
    ],
    'sortableAttributes' => [
        'title'=>'Название',
        'price'=>'Цена',
        'id'=>'Актуальности',
    ]
]);
?>
</div>
<h1><?php echo $this->id . '/' . $this->action->id; ?></h1>

<p>
    You may change the content of this page by modifying
    the file <tt><?php echo __FILE__; ?></tt>.
</p>
