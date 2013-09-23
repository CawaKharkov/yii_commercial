<li class="col-md-3">
  <div class="img-thumbnail" style="padding: 0">
    <div style="padding:4px">
    	<?=CHtml::link('<img alt="300x200" style="width: 100%" src="http://placehold.it/200x150">', array('showcase/view', 'id'=>$data->id)); ?>
    </div>
    <div class="text-center">
      <h2><?=$data->title;?></h2>
      <p><?=$data->price;?> Р</p>
    </div>
  </div>
</li>