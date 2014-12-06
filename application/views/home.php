<?php
$urls = json_decode($site['urls']);
?>
<div class="container">
    <h1><?php echo $site['name'] ?></h1>
<!--    <div class="well">--><?php //echo $site['description'] ?><!--</div>-->
    <pre><?php echo $site['description'] ?></pre>
    <?php foreach ($urls as $url){
        $splitted = explode(" ", $url);
        $url_href = array_shift($splitted);
        $url_name = implode(" ", $splitted);
    ?>
        <h3><a href="<?php echo $url_href; ?>" target="_blank"><?php echo $url_name; ?></a></h3>
    <?php } ?>
</div>