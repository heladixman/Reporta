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
            <button type="button" class="btn btn-sm btn-primary w-100 h-75" data-bs-toggle="modal" data-bs-target="#ModalNewPenerimaan"><?= $addNewButton ?></button>
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
                      <th>Metode Pembayaran</th>
                      <th>No. Rek</th>
                      <th>No. Bukti</th>
                      <th>Akun Perkiraan</th>
                      <th>Biaya Total</th>
                      <th>Tanggal Bayar</th>
                      <th>Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php 
                    $no = 1;
                    foreach($Penerimaan as $data) { 
                    ?>
                    <tr>
                        <td><?php echo $no++ ?></td>
                        <td><?= $data['metodePembayaranName'] ?></td>
                        <td><?= $data['noCek'] ?></td>
                        <td><?= $data['noBukti'] ?></td>
                        <td><?= $data['namaAkunPerkiraan'] ?></td>
                        <td><?= $data['biaya'] ?></td>
                        <td><?= $data['tanggalBayar'] ?></td>
                        <td>
                              <button type="button" class='btn btn-icon btn-success editPenerimaan' id="editPembayaran" data-id="<?= $data['metodePembayaranID']?>" data-idpem="<?= $data['penerimaanID']?>" data-bukti="<?=$data['noBukti']?>" data-cek="<?=$data['noCek']?>" data-tanggal="<?=$data['tanggalBayar']?>" data-catatan="<?=$data['catatanPenerimaan']?>" data-cabat="<?=$data['catatan']?>" data-penerima="<?=$data['penerima']?>">
                                <i class="bx bx-edit-alt"></i>
                              </button>
                              <button type="button" class="btn btn-icon btn-outline-danger hapusPenerimaan" data-bs-toggle="modal" data-bs-target="#ModalDeletePenerimaan" data-id="<?= $data['dataPenerimaanID']?>">
                                <i class="bx bx-trash"></i>
                              </button>
                        </td>                             
                    </tr>
                  <?php }?>
                  </tbody>
                </table>
            </div>
            <?= $pager->links('Pembayaran', 'Pagination')?>
        </div>
      </div>
    </section>
    <!-- Add Modals Here -->
    <?php echo view('PagesPart/Modals/ModalPenerimaan.php');?>
</div>