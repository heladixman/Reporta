<!-- New Pembayaran Modal -->
<div class="modal fade" id="ModalNewPenerimaan" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah" aria-hidden="true">
  <form action="<?= base_url()?>/pembayaran/newPembayaran" method="post">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Penerimaan Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <div class="d-flex justify-content-between mb-3">
                <label for="idMetodePembayaran" class="form-label align-self-center mb-0 w-50">Metode Pembayaran</label>
                <select name="idMetodePembayaran" id="idMetodePembayaran" class="form-select w-65 idMetodePembayaran" required>
                  <?php foreach($metodePembayaran as $data){ ?>
                    <option value="<?= $data->metodePembayaranID?>"><?= $data->metodePembayaranName ?></option>
                  <?php }?>
                </select>
              </div>
              <div class="d-flex justify-content-between mb-3">
                  <label for="noCek" class="form-label align-self-center mb-0 w-50 text-uppercase">No Cek</label>
                  <input type="text" id="noCek" class="form-control w-65 noCek" name="noCek" placeholder="Masukan rekening...">
              </div>
              <div class="d-flex justify-content-between mb-3">
                  <label for="noBukti" class="form-label align-self-center mb-0 w-50 text-uppercase">No Bukti</label>
                  <input type="text" id="noBukti" class="form-control w-65 noBukti" name="noBukti" placeholder="Masukan no bukti...">
              </div>
              <div class="d-flex justify-content-between mb-3">
                  <label for="tanggalBayar" class="form-label mb-0 w-50 align-self-center">Tanggal</label>
                  <input type="date" id="tanggalBayar" class="form-control w-65 tanggalBayar" name="tanggalBayar" placeholder="DD/MM/YYY">
              </div>
            </div>
            <div class="tambahan">
              <ul class="nav nav-pills" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="d-flex justify-content-between mb-2">
                    <span class="align-self-center mb-0">Data Penerimaan</span>
                    <button type="button" class='btn btn-icon btn-success px-2 w-25 newInput'>Tambah</button>
                  </div>
                  <div class="inputPembayaran">
                    <div class="d-flex justify-content-between mb-3 w-full formInput">
                      <select name="idAkunPerkiraan[]" class="form-select mr-3" required>
                        <?php foreach($akunPerkiraan as $data){?>
                          <option value="<?= $data->akunPerkiraanID?>"><?= $data->namaAkunPerkiraan ?></option>
                        <?php }?>
                      </select>
                      <input type="number" class="form-control mr-3 saldoAwal" name="saldoAwal[]" placeholder="Masukan saldo...">
                      <input type="text" class="form-control mr-3 catatan" name="catatan[]" placeholder="Masukan catatan...">
                      <button type="button" class='btn btn-icon btn-danger removeInput bx bx-minus'></button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="d-flex justify-content-between mb-3">
                    <label for="catatanPembayaran" class="form-label align-self-center mb-0 w-50">Catatan</label>
                    <textarea class="form-control w-65 catatanPembayaran" id="catatanPembayaran" name="catatanPembayaran" rows="5" placeholder="Masukan catatan jika dibutuhkan..."></textarea>
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="penerima" class="form-label align-self-center mb-0 w-50 text-uppercase">Penerima</label>
                    <input type="text" id="penerima" class="form-control w-65 penerima" name="penerima" placeholder="Masukan no bukti...">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Delete Pembayaran Modal-->
<div class="modal fade" id="ModalDeletePenerimaan" tabindex="-1" role="dialog" aria-labelledby="Modal Delete" aria-hidden="false">
  <form action="<?= base_url()?>/pembayaran/deletePembayaran" method="post">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title" id="exampleModalLabel1">Yakin ingin menghapus?</p>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <input type="hidden" name="akunPerkiraanID" class="akunPerkiraanID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Hapus</button>
        </div>
      </div>
    </div>
  </form>
</div>

<!-- Update Pembayaran Modal -->
<div class="modal fade" id="ModalUpdatePenerimaan" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah" aria-hidden="true">
  <form action="<?= base_url()?>/pembayaran/updatePembayaran" method="post">
    <div class="modal-dialog modal-dialog-centered modal-md" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Edit Pembayaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <div class="d-flex justify-content-between mb-3">
                <label for="idMetodePembayaran" class="form-label align-self-center mb-0 w-50">Metode Pembayaran</label>
                <select name="idMetodePembayaran" id="idMetodePembayaran" class="form-select w-65 idMetodePembayaran" required>
                  <?php foreach($metodePembayaran as $data){ ?>
                    <option value="<?= $data->metodePembayaranID?>"><?= $data->metodePembayaranName ?></option>
                  <?php }?>
                </select>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <label for="noCek" class="form-label align-self-center mb-0 w-50 text-uppercase">No Cek</label>
                <input type="text" id="noCek" class="form-control w-65 noCek" name="noCek" placeholder="Masukan rekening...">
              </div>
              <div class="d-flex justify-content-between mb-3">
                <label for="noBukti" class="form-label align-self-center mb-0 w-50 text-uppercase">No Bukti</label>
                <input type="text" id="noBukti" class="form-control w-65 noBukti" name="noBukti" placeholder="Masukan no bukti...">
              </div>
              <div class="d-flex justify-content-between mb-3">
                <label for="tanggalBayar" class="form-label w-50 align-self-center">Tanggal</label>
                <input type="date" id="tanggalBayar" class="form-control w-65 tanggalBayar" name="tanggalBayar" placeholder="DD/MM/YYY">
              </div>
            </div>
            <div class="tambahan">
              <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home1" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Home</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile1" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Profile</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <div class="d-flex justify-content-between mb-2">
                    <span class="align-self-center mb-0">Data Pembayaran</span>
                    <button type="button" class='btn btn-icon btn-success px-2 w-25 newInput'>Tambah</button>
                  </div>
                  <div class="inputPembayaran">
                    <div class="d-flex justify-content-between mb-3 w-full formInput">
                      <select name="idAkunPerkiraan[]" class="form-select mr-3" required>
                        <?php foreach($akunPerkiraan as $data){?>
                          <option value="<?= $data->akunPerkiraanID?>"><?= $data->namaAkunPerkiraan ?></option>
                        <?php }?>
                      </select>
                      <input type="number" class="form-control mr-3 saldoAwal" name="saldoAwal[]" placeholder="Masukan saldo...">
                      <input type="text" class="form-control mr-3 catatan" name="catatan[]" placeholder="Masukan catatan...">
                      <button type="button" class='btn btn-icon btn-danger removeInput bx bx-minus'></button>
                    </div>
                  </div>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                  <div class="d-flex justify-content-between mb-3">
                    <label for="catatanPembayaran" class="form-label align-self-center mb-0 w-50">Catatan</label>
                    <textarea class="form-control w-65 catatanPembayaran" id="catatanPembayaran" name="catatanPembayaran" rows="5" placeholder="Masukan catatan jika dibutuhkan..."></textarea>
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="penerima" class="form-label align-self-center mb-0 w-50 text-uppercase">Penerima</label>
                    <input type="text" id="penerima" class="form-control w-65 penerima" name="penerima" placeholder="Masukan no bukti...">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
      </div>
    </div>
  </form>
</div>