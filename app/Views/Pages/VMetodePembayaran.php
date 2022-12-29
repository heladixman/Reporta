<div class="container-xxl flex-grow-1 container-p-y">
<div class="content-wrapper">
    <section class="content-header mb-3 mt-3">
    <?php if(session()->get('message')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
          <button type="button" class="btn-close font-xl" data-bs-dismiss="modal" aria-label="Close"></button>
          <strong><?=session()->getFlashdata('message');?></strong> 
        </div>
    <?php endif;?>

    <div class="row">
        <div class="col-md-12">
        <div class="row">
          <div class="col-sm-10 col-8">
            <form action="" method="post">
              <nav class="layout-navbar container-xxl navbar align-items-center">
                <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                    <div class="nav-item d-flex align-items-center w-100">
                      <i class="bx bx-search fs-4 lh-0"></i>
                      <input type="text" class="form-control border-0 shadow-none" placeholder="Masukkan keyword pencarian..." name="keyword">
                    </div>
                </div>
              </nav>
            </form>
          </div>
          <div class="col-sm-2 col-4">
            <button type="button" class="btn btn-sm btn-primary w-100 h-75" data-bs-toggle="modal" data-bs-target="#ModalNewMetodePembayaran"><?= $addNewButton ?></button>
          </div>
        </div>
      </div>
    </section>
    <section class="content mt-3">
      <div class="card">
        <div class="card-body"> 
          <div class="table-responsive text-nowrap">
                <table class="table">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Nama Pembayaran</th>
                      <th>Pemilik</th>
                      <th>No. Rekening</th>
                      <th>Saldo Awal</th>
                      <th>Tanggal</th>
                      <th>Dibuat</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach($metodePembayaran as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data['metodePembayaranName'] ?></td>
                        <td><?= $data['metodePembayaranOwner'] ?></td>
                        <td><?= $data['noRek'] ?></td>
                        <td><?php echo "Rp. " .number_format($data['saldoAwal'], 0, '', '.') ?></td>
                        <td><?= $data['perTanggal'] ?></td>
                        <td><?= $data['createAt']?></td>
                        <td>
                              <button type="button" class='btn btn-icon btn-success editMetodePembayaran' id="editMetodePembayaran" data-id="<?= $data['metodePembayaranID']?>" data-name="<?=$data['metodePembayaranName']?>" data-owner="<?= $data['metodePembayaranOwner'] ?>" data-norek="<?= $data['noRek'] ?>" data-saldoawal="<?= $data['saldoAwal']?>" data-tanggal="<?= $data['perTanggal']?>">
                                <i class="bx bx-edit-alt"></i>
                              </button>
                              <button type="button" class="btn btn-icon btn-outline-danger hapusMetodePembayaran" data-id="<?= $data['metodePembayaranID']?>">
                                <i class="bx bx-trash"></i>
                              </button>
                        </td>                             
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
            </div>
            <?= $pager->links('metodepembayaran', 'Pagination')?>
        </div>
      </div>
    </section>
    <!-- Add Modals Here -->
    <?php 
      echo view('PagesPart/Modals/ModalMetodePembayaran.php');
    ?>
</div>