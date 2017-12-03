<?php
$root = strstr(ROOT,'public_html');
$root = strstr($root,'/');

if($root=="") {
    $site_path = dirname($_SERVER["SCRIPT_NAME"]);
    if ($site_path == '/')
        $site_path = '';
    $pos = strripos($site_path, "webroot");
    $ur = substr($site_path,0,$pos);
    if(substr($ur,-1)=="/") {
        $root = substr($ur,0,-1);
    }else{
        $root = $ur;
    }
}
echo "<script>var site_path =\"".$root."\";</script>";
?>

<?= $this->Html->script('moment/moment'); ?>
<?= $this->Html->script('moment/moment-with-locales'); ?>
<?= $this->Html->script('datetimepicker/bootstrap-datetimepicker'); ?>
<?= $this->Html->script('functions'); ?>
<?= $this->Html->script('jquery.mask.min'); ?>

