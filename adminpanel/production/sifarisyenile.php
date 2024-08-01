<?php 
error_reporting(0);
include 'header.php';
$id=$_GET['sifaris_id'];
$sifarisSorgu=$db->prepare("select * from sifarisler where sifaris_id=?");
$sifarisSorgu->execute(array($id));
$sifarisCek=$sifarisSorgu->fetch(PDO::FETCH_ASSOC);
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="page-title">
      <div class="title_left">
        <h3>Sifariş Yenilə</h3>
      </div>

      <?php include 'css/css.php'; ?>

    </div>

    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div align="right" class="x_title">
            <h2>Sifariş Güncəllə</h2>
            <a href="sifaris.php"><button style="margin-right: 10px;" type="submit" class="btn btn-warning fa fa-reply"> Geri Dön</button></a>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <form style="margin-top: 20px;" action="emeliyyat.php" method="POST" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Ad
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="sifaris_ad" value="<?php echo $sifarisCek['sifaris_ad'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">

                  <input name="sifaris_id" value="<?php echo $sifarisCek['sifaris_id'];?>" type="hidden" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Şəhər
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="sifaris_seher" value="<?php echo $sifarisCek['sifaris_seher'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Telefon
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <input name="sifaris_telefon" value="<?php echo $sifarisCek['sifaris_telefon'];?>" type="text" id="first-name" required="required" class="form-control col-md-7 col-xs-12">
                </div>
              </div>
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12" for="first-name">Haqqında
                </label>
                <div class="col-md-9 col-sm-9 col-xs-12">
                  <textarea name="sifaris_haqqinda"><?php echo $sifarisCek['sifaris_haqqinda'];?></textarea>
                </div>
              </div>
              <div align="right" class="col-md-8 col-sm-8 col-xs-12 col-md-offset-3">
                <button name="sifarisyenile" type="submit" class="btn btn-success">Yenilə</button>
              </div>
            </form>                      
          </div> 
        </div>

      </div>
    </div>
  </div>
</div>
<!-- /page content -->


<?php include 'footer.php'; ?>