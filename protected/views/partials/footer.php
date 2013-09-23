<footer>
    <?php
    /**
     * @todo create active crumbs
     */
    ?>
    <?php
    $this->widget('BreadCrumbs', array(
        'crumbs' => array(
            array('name' => 'Home', 'url' => array('site/index')),
            array('name' => 'Showcase', 'url' => array('showcase/index')),
        ),
        'delimiter' => ' &rarr; ', // if you want to change it
    ));
    ?>
    <p class="pull-right">&copy; Company 2013; <span class="badge alert-info">Powered by Yii<?php echo Yii::getVersion(); ?></span></p>
</footer>