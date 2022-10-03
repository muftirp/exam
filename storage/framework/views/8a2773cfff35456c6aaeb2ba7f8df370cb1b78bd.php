<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Portal berita</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
<link rel="stylesheet" type="text/css" href="<?php echo asset('assets/newserific/layout/styles/layout.css'); ?>">
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body id="top">
<div class="wrapper col1">
  <div id="header">
    <div class="fl_left">
      <h1><a href=#>Logo</a></h1>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col2">
  <div id="topbar">
    <div id="topnav">
      <ul>
        <li class="active"><a href="#">Home</a></li>
        
    </div>
    <div id="search">
      <form action="#" method="post">
        <fieldset>
          <legend>Site Search</legend>
          <input type="text" value=""  onfocus="this.value=(this.value=='Search Our Website&hellip;')? '' : this.value ;" />
          <input type="#" name="go" id="go" value="Search" />
        </fieldset>
      </form>
    </div>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col4">
  <div id="container">
    <div id="content">
    <?php $__currentLoopData = $beritas->take(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <div id="featured_post"><img src="<?php echo e(asset('assets/newserific/images/demo/'.$berita->gambar)); ?>" alt="" width="620" height="270"/>
        <p><?php echo e($berita->judul); ?></p>
        <p><?php echo e($berita->deskripsi); ?> </a>.</p>
      </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      
      <div id="hpage_latest">
        
        <ul>
        <?php $__currentLoopData = $beritas->slice(1); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li><img src="<?php echo e(asset('assets/newserific/images/demo/'.$berita->gambar)); ?>" alt="" width="190" height="80"/>
            <p><?php echo e($berita->judul); ?></p>
            <p style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><?php echo e($berita->deskripsi); ?></p>
            <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
          </li>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <br class="clear" />
      </div>
    </div>
    <div id="column">
        <?php $__currentLoopData = $beritas->slice(1,3); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <ul id="latestnews">
        <li><img src="<?php echo e(asset('assets/newserific/images/demo/'.$berita->gambar)); ?>" alt="" width="80" height="80"/>
          <p style="overflow: hidden; white-space: nowrap; text-overflow: ellipsis;"><strong><a href="#"><?php echo e($berita->judul); ?></a></strong> <?php echo e($berita->deskripsi); ?></p>
          
        </li>
        
      </ul>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    
    <br class="clear" />
  </div>
  <br class="clear" />
</div>
<!-- ####################################################################################################### -->
<div class="wrapper col5">
  <div class="gallery">
    <h2>Latest Gallery Pics</h2>
    <?php $__currentLoopData = $beritas; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $berita): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
      <li><a href="#"><img src="<?php echo e(asset('assets/newserific/images/demo/'.$berita->gambar)); ?>" alt="" width="174" height="174"/></a></li>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
    <br class="clear" />
  </div>
</div>
<!-- ####################################################################################################### -->

<!-- ####################################################################################################### -->
<div class="wrapper col7">
  <div id="copyright">
    <p class="fl_left">Copyright &copy; 2022 - All Rights Reserved - <a href="#">Domain Name</a></p>
    <br class="clear" />
  </div>
</div>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html><?php /**PATH D:\laravel project\exam\resources\views/berita/index.blade.php ENDPATH**/ ?>