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
    <p>&copy; Company 2013</p>
</footer>