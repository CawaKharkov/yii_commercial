<h2>
    <?php echo 'Error code: ' . $error['code'] . ' - ' . 'Error meaasge: ' . $error['message']; ?>
</h2>
<div class="jumbotron"><?php echo 'Line: ' . $error['line'] . ' - ' . 'File: ' . $error['file']; ?></div>
<hr /><h2>Traces<h2/>
    <?php foreach ($error['traces'] as $trace): ?>
        <?php var_dump($trace); ?>
    <?php endforeach; ?>