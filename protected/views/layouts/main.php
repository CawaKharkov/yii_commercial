
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.png">

    <title>Jumbotron Template for Bootstrap</title>

    <?php Yii::app()->clientScript->registerCssFile('/www/bootstrap/css/bootstrap.css');?>

    <?php Yii::app()->clientScript->registerCssFile('/www/bootstrap/css/jumbotron.css');?>


    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="/www/bootstrap/js/html5shiv.js"></script>
      <script src="/www/bootstrap/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div class="navbar-collapse collapse">
         <?php $this->widget('MenuWidget',[
             'section'=> 'mainMenu'
         ]); ?>

        <?php $this->renderPartial('//partials/authPartial'); ?>
        </div><!--/.navbar-collapse -->
      </div>
    </div>

      <?php
            /**
             * @todo Check if controller == site && action == index
             */
            //var_dump(Yii::app()->getUrlManager()->); 
      ?>
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <h1>Hello, world!</h1>
        <p>This is a template for a simple marketing or informational website. It includes a large callout called the hero unit and three supporting pieces of content. Use it as a starting point to create something more unique.</p>
        <p><?php echo CHtml::link('Learn more &raquo;', array('controller/action'), array('class'=>'btn btn-primary btn-lg')); ?></p>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <?php echo $content; ?>

            <?php $this->renderPartial('//partials/footer'); ?>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <?php Yii::app()->clientScript->registerScriptFile('http://codeorigin.jquery.com/jquery-2.0.3.min.js', CClientScript::POS_HEAD);?>
    <?php Yii::app()->clientScript->registerScriptFile('/www/bootstrap/js/jquery.js', CClientScript::POS_END);?>
    <?php Yii::app()->clientScript->registerScriptFile('/www/bootstrap/js/bootstrap.min.js', CClientScript::POS_END);?>
  </body>
</html>
