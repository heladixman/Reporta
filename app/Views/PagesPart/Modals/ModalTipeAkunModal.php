<!-- New Tipe Akun Modal --> 
<div class="modal fade" id="ModalNewTipeAkun" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah Jurusan" aria-hidden="true">
    <form action="<?= base_url()?>/tipeakun/newTipeAkun" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel1">Tambah Tipe Akun Baru</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                <div class="d-flex justify-content-between mb-3">
                    <label for="namaTipeAkun" class="form-label align-self-center mb-0 w-25">Nama Tipe Akun</label>
                    <input type="text" id="namaTipeAkun" class="form-control w-75" name="namaTipeAkun" placeholder="Masukan nama tipe akun...">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="alias" class="form-label align-self-center mb-0 w-25 text-uppercase">Alias</label>
                    <input type="text" id="alias" class="form-control w-75" name="alias" placeholder="Masukan alias...">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="catatan" class="form-label align-self-center mb-0 w-25">Catatan</label>
                    <textarea class="form-control w-75" id="catatan" name="catatan" rows="5" placeholder="Masukan catatan jika dibutuhkan..."></textarea>
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
    <div class="modal fade" id="ModalDeleteTipeAkun" tabindex="-1" role="dialog" aria-labelledby="Modal Delete" aria-hidden="false">
      <form action="<?= base_url()?>/tipeakun/deleteTipeAkun" method="post">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <p class="modal-title" id="exampleModalLabel1">Yakin ingin menghapus?</p>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              <input type="hidden" name="tipeAkunID" class="tipeAkunID">
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Hapus</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>

<!-- Update Tipe Akun Modal -->
<div class="modal fade" id="ModalUpdateTipeAkun" tabindex="-1" role="dialog" aria-labelledby="Modal Register Pasien" aria-hidden="true">
    <form action="<?= base_url()?>/tipeakun/updateTipeAkun" method="post">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="ModalUpdate">Edit Tipe Akun</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="row">
                <div class="col mb-3">
                  <div class="d-flex justify-content-between mb-3">
                    <label for="namaTipeAkun" class="form-label w-25 align-self-center">Tipe Akun</label>
                    <input type="hidden" name="tipeAknID" class="tipeAknID">
                    <input type="text" id="namaTipeAkun" class="form-control w-75 namaTipeAkun" name="namaTipeAkun" placeholder="Ubah Tipe Akun...">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="alias" class="form-label w-25 align-self-center">Alias</label>
                    <input type="text" id="alias" class="form-control w-75 alias" name="alias" placeholder="Ubah Alias...">
                  </div>
                  <div class="d-flex justify-content-between mb-3">
                    <label for="catatan" class="form-label w-25 align-self-center">Catatan</label>
                    <input type="text" id="catatan" class="form-control w-75 catatan" name="catatan" placeholder="Ubah Catatan...">
                  </div>
                </div>
              </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
            <button type="submit" class="btn btn-primary">Ubah</button>
          </div>
        </div>
      </div>
    </form>x
  </div>
