<!-- New Akun Perkiraan Modal --> 
<div class="modal fade" id="ModalNewAkunPerkiraan" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah Jurusan" aria-hidden="true">
  <form action="<?= base_url()?>/akunperkiraan/newAkunPerkiraan" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Tambah Akun Perkiraan Baru</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col mb-3">
              <div class="d-flex justify-content-between mb-3">
                <label for="idTipeAkun" class="form-label align-self-center mb-0 w-50">Tipe Akun</label>
                <select name="idTipeAkun" id="idTipeAkun" class="form-select w-65" required>
                  <?php foreach($xTipeAkun as $data){ ?>
                    <option value="<?= $data->tipeAkunID?>"><?= $data->namaTipeAkun ?></option>
                  <?php }?>
                </select>
              </div>
              <div class="d-flex justify-content-between mb-3">
                <label for="kodeAkunPerkiraan" class="form-label align-self-center mb-0 w-50 text-uppercase">Kode Akun Perkiraan</label>
                <input type="number" id="kodeAkunPerkiraan" class="form-control w-65" name="kodeAkunPerkiraan" placeholder="Masukan kode akun perkiraan...">
              </div>
              <div class="d-flex justify-content-between mb-3">
                <label for="namaAkunPerkiraan" class="form-label align-self-center mb-0 w-50 text-uppercase">Nama Akun Perkiraan</label>
                <input type="text" id="namaAkunPerkiraan" class="form-control w-65" name="namaAkunPerkiraan" placeholder="Masukan nama akun perkiraan...">
              </div>
              <div class="d-flex col mb-3">
                <label for="saldoAwal" class="form-label w-50 align-self-center">Saldo Awal</label>
                <input type="number" id="saldoAwal" class="form-control w-65" name="saldoAwal" placeholder="Masukan Saldo Awal...">
              </div>
              <div class="d-flex justify-content-between mb-3">
                <label for="catatanAkunPerkiraan" class="form-label align-self-center mb-0 w-50">Catatan</label>
                <textarea class="form-control w-65" id="catatanAkunPerkiraan" name="catatanAkunPerkiraan" rows="5" placeholder="Masukan catatan jika dibutuhkan..."></textarea>
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

<!-- Delete Metode Pembayaran Modal-->
<div class="modal fade" id="ModalDeleteAkunPerkiraan" tabindex="-1" role="dialog" aria-labelledby="Modal Delete Jurusan" aria-hidden="false">
  <form action="<?= base_url()?>/akunperkiraan/deleteAkunPerkiraan" method="post">
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

<!-- Update Metode Pembayaran Modal -->
<div class="modal fade" id="ModalUpdateAkunPerkiraan" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
  <form action="<?= base_url()?>/akunperkiraan/updateAkunPerkiraan" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalUpdate">Edit Akun Perkiraan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="d-flex justify-content-between mb-3">
              <input type="hidden" name="idAkunP" class="idAkunP">
              <label for="idTipeAkun" class="form-label align-self-center mb-0 w-50">Tipe Akun</label>
              <select name="idTipeAkun" id="idTipeAkun" class="form-select w-65" required>
                <?php foreach($xTipeAkun as $data){?>
                  <option value="<?= $data->tipeAkunID?>"><?= $data->namaTipeAkun ?></option>
                <?php }?>
              </select>
            </div>
            <div class="d-flex justify-content-between mb-3">
              <label for="kodeAkunPerkiraan" class="form-label align-self-center mb-0 w-50 text-uppercase">Kode Akun Perkiraan</label>
              <input type="number" id="kodeAkunPerkiraan" class="form-control w-65 kodeAkunPerkiraan" name="kodeAkunPerkiraan" placeholder="Masukan kode akun perkiraan...">
            </div>
            <div class="d-flex justify-content-between mb-3">
              <label for="namaAkunPerkiraan" class="form-label align-self-center mb-0 w-50 text-uppercase">Nama Akun Perkiraan</label>
              <input type="text" id="namaAkunPerkiraan" class="form-control w-65 namaAkunPerkiraan" name="namaAkunPerkiraan" placeholder="Masukan nama akun perkiraan...">
            </div>
            <div class="d-flex col mb-3">
              <label for="saldoAwal" class="form-label w-50 align-self-center">Saldo Awal</label>
              <input type="number" id="saldoAwal" class="form-control w-65 saldoAwal" name="saldoAwal" placeholder="Masukan Saldo Awal...">
            </div>
            <div class="d-flex justify-content-between mb-3">
              <label for="catatanAkunPerkiraan" class="form-label align-self-center mb-0 w-50">Catatan</label>
              <textarea class="form-control w-65 catatanAkunPerkiraan" id="catatanAkunPerkiraan" name="catatanAkunPerkiraan" rows="5" placeholder="Masukan catatan jika dibutuhkan..."></textarea>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Ubah</button>
        </div>
      </div>
    </div>
  </form>
</div>
