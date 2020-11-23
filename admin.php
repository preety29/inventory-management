<?php
  $page_title = 'Admin Home Page';
  require_once('includes/load.php');
  // Checkin What level user has permission to view this page
   page_require_level(1);
?>
<?php
 $c_categorie     = count_by_id('categories');
 $c_product       = count_by_id('products');
 $c_sale          = count_by_id('sales');
 $c_user          = count_by_id('users');
 $products_sold   = find_higest_saleing_product('10');
 $recent_products = find_recent_product_added('5');
 $recent_sales    = find_recent_sale_added('5')
?>
<?php include_once('layouts/header.php'); ?>

<div class="row">
   <div class="col-md-6">
     <?php echo display_msg($msg); ?>
   </div>
</div>
</div>
  <div class="row">
   <div class="col-md-12">
      <div class="panel">
        <div class="jumbotron text-center">
           <h1>Inventory Management System </h1>
           </br>If you have a question regarding the usage of this application, please contact us on this <a href="https://www.facebook.com/sabrina.afroz.7393" title="Facebook" target="_blank">Facebook</a> profile.</p>

      <div id="biographical-info" style="padding: 100px 100px 100px 100px;" class="bio content-frame">




  <div class="row">

  </div>



<?php include_once('layouts/footer.php'); ?>
