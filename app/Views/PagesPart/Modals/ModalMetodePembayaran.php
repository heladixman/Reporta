<!-- New Metode Pembayaran Modal --> 
<div class="modal fade" id="ModalNewMetodePembayaran" tabindex="-1" role="dialog" aria-labelledby="Modal Tambah Jurusan" aria-hidden="true">
  <form action="<?= base_url()?>/metodepembayaran/newMetodePembayaran" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel1">Tambah Metode Pembayaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="metodePembayaranName" class="form-label w-25 align-self-center">Nama Pembayaran</label>
              <input type="text" id="metodePembayaranName" class="form-control w-85" name="metodePembayaranName" placeholder="Masukan nama Pembayaran...">
            </div>
          </div>
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="metodePembayaranOwner" class="form-label w-25 align-self-center">Pemilik</label>
              <input type="text" id="metodePembayaranOwner" class="form-control w-85" name="metodePembayaranOwner" placeholder="Masukan nama Pemilik...">
            </div>
          </div>
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="noRek" class="form-label w-25 align-self-center">No. Rekening</label>
              <input type="text" id="noRek" class="form-control w-85" name="noRek" placeholder="Masukan No. Rekening...">
            </div>
          </div>
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="saldoAwal" class="form-label w-25 align-self-center">Saldo Awal</label>
              <input type="number" id="saldoAwal" class="form-control w-85" name="saldoAwal" placeholder="Masukan Saldo Awal...">
            </div>
          </div>
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="perTanggal" class="form-label w-25 align-self-center">Tanggal</label>
              <input type="date" id="perTanggal" class="form-control w-85" name="perTanggal" placeholder="DD/MM/YYY">
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

<!-- Update Metode Pembayaran Modal -->
<div class="modal fade" id="ModalUpdateMetodePembayaran" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
  <form action="<?= base_url()?>/metodepembayaran/updateMetodePembayaran" method="post">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ModalUpdate">Edit Metode Pembayaran</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="text" class="form-label w-25 align-self-center">Nama Pembayaran</label>
              <input type="hidden" name="metPembayaranID" class="metPembayaranID">
              <input type="text" id="metodePembayaranName" class="form-control w-85 metodePembayaranName" name="metodePembayaranName" placeholder="Masukan nama Pembayaran...">
            </div>
          </div>
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="metodePembayaranOwner" class="form-label w-25 align-self-center">Pemilik</label>
              <input type="text" id="metodePembayaranOwner" class="form-control w-85 metodePembayaranOwner" name="metodePembayaranOwner" placeholder="Masukan nama Pemilik...">
            </div>
          </div>
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="noRek" class="form-label w-25 align-self-center">No. Rekening</label>
              <input type="text" id="noRek" class="form-control w-85 noRek" name="noRek" placeholder="Masukan No. Rekening...">
            </div>
          </div>
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="saldoAwal" class="form-label w-25 align-self-center">Saldo Awal</label>
              <input type="text" id="saldoAwal" class="form-control w-85 saldoAwal" name="saldoAwal" placeholder="Masukan Saldo Awal...">
            </div>
          </div>
          <div class="row">
            <div class="d-flex col mb-3">
              <label for="perTanggal" class="form-label w-25 align-self-center">Tanggal</label>
              <input type="date" id="perTanggal" class="form-control w-85 perTanggal" name="perTanggal" placeholder="DD/MM/YYY">
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

<!-- Delete Metode Pembayaran Modal-->
<div class="modal fade" id="ModalDeleteMetodePembayaran" tabindex="-1" role="dialog" aria-labelledby="Modal Delete Jurusan" aria-hidden="false">
  <form action="<?= base_url()?>/metodepembayaran/deleteMetodePembayaran" method="post">
    <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <p class="modal-title" id="exampleModalLabel1">Yakin ingin menghapus?</p>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          <input type="hidden" name="metodePembayaranID" class="metodePembayaranID">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Batal</button>
          <button type="submit" class="btn btn-primary">Hapus</button>
        </div>
      </div>
    </div>
  </form>
</div>