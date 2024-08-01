<?php 
error_reporting(0);
include 'header.php';


if(isset($_GET['axtarilan'])){
  $axtarilan='%'.$_GET['axtarilan'].'%';
  $sifarisSorgu=$db->prepare('select * from sifarisler where sifaris_ad LIKE ? order by sifaris_tarix desc');
  $sifarisSorgu->execute(array($axtarilan));
  $say=$sifarisSorgu->rowCount();
    if($say==0){
      $sifarisSorgu=$db->prepare('select * from sifarisler where sifaris_seher LIKE ? order by sifaris_tarix desc');
      $sifarisSorgu->execute(array($axtarilan));
      $say=$sifarisSorgu->rowCount();
    }
    if($say==0){
    $sifarisSorgu=$db->prepare('select * from sifarisler where sifaris_telefon LIKE ? order by sifaris_tarix desc');
    $sifarisSorgu->execute(array($axtarilan));
    $say=$sifarisSorgu->rowCount();
  }
}
else{
    $sifarisSorgu=$db->prepare("select * from sifarisler order by sifaris_tarix desc");

    $sifarisSorgu->execute();
}
?>
<head>
  <script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
</head>
        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>Sifarşlər</h3>
              </div>
              
              <form action="emeliyyat.php" method="POST">
                <div class="title_right">
                  <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                    <div class="input-group">
                      <input type="text" class="form-control" name="axtarilan" required="" placeholder="Axtar...">
                      <span class="input-group-btn">
                        <button class="btn btn-default" name="axtar" type="submit">Axtar</button>
                      </span>
                    </div>
                  </div>
                </div>
              </form>
              
            </div>
            <div class="clearfix"></div>
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div align="right" class="x_title">
                    <h2>Sifariş Tənzimləmə</h2>  
                    <a href="sifaris.php"><button style="margin-right: 10px;" type="submit" class="btn btn-primaty">Səyifəni Yenilə</button></a> 
                      <a href="sifariselaveet.php"><button style="margin-right: 10px;width: 20%;" type="submit" class="btn btn-success">Sifariş Əlavə Et</button></a>               
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <?php if($_GET['durumY']=="ok"){ ?>
                    <p style="color: green;">Məlumat uğurla yeniləndi...</p>
                  <?php } else if($_GET['durumY']=="no"){ ?>
                    <p style="color: red;">Məlumat yenilənə bilmədi !</p>
                    <?php } elseif($_GET['durumE']=="ok"){ ?>
                    <p style="color: green;">Məlumat əlavə edildi...</p>
                  <?php } else if($_GET['durumE']=="no"){ ?>
                    <p style="color: red;">Məlumat əlavə edilə bilmədi !</p>
                  <?php } elseif($_GET['durumS']=="ok"){ ?>
                    <p style="color: green;">Məlumat silindi ...</p>
                  <?php } else if($_GET['durumS']=="no"){ ?>
                    <p style="color: red;">Məlumat silinə bilmədi !</p>
                  <?php }else{ ?>
                  <?php } ?>
                  

                  <div style="margin-top: 20px;" class="table-responsive">
                      <table class="table table-striped jambo_table bulk_action">
                        <thead>
                          <tr class="headings">
                            <th class="column-title"># </th>
                            <th class="column-title">Ad </th>
                            <th class="column-title">Şəhər </th>
                            <th class="column-title">Telefon </th>
                            <th class="column-title">Sifariş Tarixi </th>
                            <th class="column-title">Sifariş Sayı </th>
                            
                            <th style="width: 80px;" class="column-title"></th>
                            <th style="width: 80px;" class="column-title"></th>
                          </tr>
                        </thead>

                        
                        <tbody>
                          <?php 
                          while ($sifarisCek=$sifarisSorgu->fetch(PDO::FETCH_ASSOC)) { ?>
                          <tr class="even pointer">
                            <td class=" "><?php echo $sifarisCek['sifaris_id'];; ?></td>
                            <td class=" "><?php echo $sifarisCek['sifaris_ad']; ?></td>
                            <td class=" "><?php echo $sifarisCek['sifaris_seher']; ?> </td>
                            <td class=" "><?php echo $sifarisCek['sifaris_telefon']; ?> </td>
                            <td class=" "><?php echo $sifarisCek['sifaris_tarix']; ?> </td>

                            <?php 
                            $sifarisSay=$db->prepare("select * from sifarisler where sifaris_telefon=:sifaris_telefon");
                            $sifarisSay->execute(array(
                              'sifaris_telefon'=>$sifarisCek['sifaris_telefon']
                            ));
                            $say = $sifarisSay->rowCount();
                             ?>
                            <td class=" "><?php echo $say; ?> </td>
							
                            <td class=" "><button  style="margin-top: 15px;" type="submit" class="btn btn-success haqqinda" onclick="haqqinda()" data-id="<?php echo $sifarisCek['sifaris_id']; ?>" >Sifariş Haqqında</button></td>
                            <td class=" "><a href="sifarisyenile.php?sifaris_id=<?php echo $sifarisCek['sifaris_id']; ?>"><button style="margin-top: 15px;width: 100px;" type="submit" class="btn btn-primary "><i class="fa fa-pencil"> Yenilə</i></button></a></td>

                           

                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>


                  </div> 
                </div>

              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
	<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.2/jquery.min.js" integrity="sha512-tWHlutFnuG0C6nQRlpvrEhE4QpkG1nn2MOUMWmUeRePl4e3Aki0VB6W1v3oLjFtd0hVOtRQ9PHpSfN6u6/QXkQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

        <script type="text/javascript">
                
          $(function( $ ){
              $('.haqqinda').on('click',function(){
                  var sifaris_id=$(this).data('id');
                  
                  $.ajax({
                        url: "sifaris_haqqinda.php",
                        type: 'POST',
                        data:"sifaris_id="+sifaris_id,
                        success:function(response){
                            Swal.fire(response);
                        },
                        error:function(response){
                            alert('Xəta : Məlumat dəyişdirilmədi !');
                        }
                    });     

                   
              })})



              
            
          </script>


        <?php include 'footer.php'; ?>