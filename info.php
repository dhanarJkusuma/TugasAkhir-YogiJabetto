  <?php require_once('config/main.php');
  $data_engineer = mysqli_query($conn, "select * from pengguna where status='se'");
  $data_admin = mysqli_query($conn, "select * from pengguna where status='admin'");
  $data_pelanggan = mysqli_query($conn, "select * from pelanggan");
 ?>
<div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3><?php echo mysqli_num_rows($data_engineer); ?></h3>
          <p>Data Teknisi</p>
        </div>
        <div class="icon">
          <i class="fa fa-gears"></i>
        </div>
        <?php if($_SESSION['status'] == "sa" || $_SESSION['status'] == "admin"){ ?>
        <a href="./?page=data_user" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        <?php } ?>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3><?php echo mysqli_num_rows($data_admin); ?></h3>
          <p>Data Admin</p>
        </div>
        <div class="icon">
          <i class="fa fa-gears"></i>
        </div>
        <?php if($_SESSION['status'] == "sa" || $_SESSION['status'] == "admin"){ ?>
        <a href="./?page=data_user" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        <?php } ?>
      </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3><?php echo mysqli_num_rows($data_pelanggan); ?></h3>
          <p>Data Pelanggan</p>
        </div>
        <div class="icon">
          <i class="fa fa-gears"></i>
        </div>
        <?php if($_SESSION['status'] == "sa" || $_SESSION['status'] == "admin"){ ?>
        <a href="./?page=data_pelanggan" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
        <?php } ?>
      </div>
    </div><!-- ./col -->
</div><!-- /.row -->
<script src="plugins/jQuery/jQuery-2.1.3.min.js"></script>
