<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<title><?php echo $title; ?></title>

<?php 
foreach($css_files as $file): ?>
	<link type="text/css" rel="stylesheet" href="<?php echo base_url($file); ?>" />
<?php endforeach; ?>        
<script type="text/javascript" language="javascript">base_url = "<?php echo base_url();?>";
    <?php if (isset($team[0]['id_promo'])) { ?>
        team = <?php echo $team[0]['id_promo'];?>;
    <?php }?>
    <?php if (isset($box)) { ?>
        box = <?php echo $box;?>;
    <?php }else{?>
        box = 00;
    <?php }?>
</script>        
<?php foreach($js_files as $file): ?>
	<script src="<?php echo base_url($file); ?>"></script>
<?php endforeach; ?>
</head>

<body>
