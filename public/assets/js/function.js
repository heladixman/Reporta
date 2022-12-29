$(document).ready(function(){
    // delete button function
    $('.hapusAkunPerkiraan').on('click', function(){
      const Jid = $(this).data('id');
      console.log(Jid)
      $('.akunPerkiraanID').val(Jid);
      $('#ModalDeleteAkunPerkiraan').modal('show');
    });

    $('.hapusMetodePembayaran').on('click', function(){
      const id = $(this).data('id');
      // console.log(id)
      $('.metodePembayaranID').val(id);
      $('#ModalDeleteMetodePembayaran').modal('show');
    });

    $('.hapusPembayaran').on('click', function(){
      const id = $(this).data('id');
      console.log(id)
      $('.akunPerkiraanID').val(id);
      $('#ModalDeletePembayaran').modal('show');
    });

    $('.hapusTipeAkun').on('click', function(){
      const setID = $(this).data('id');
      console.log(setID)
      $('.tipeAkunID').val(setID);
      $('#ModalDeleteTipeAkun').modal('show');
    });

    // edit without set editModel
    $('.editMetodePembayaran').on('click', function(){
      var MPID = $(this).data('id')
      var MPName = $(this).data('name');
      var MPOwner = $(this).data('owner');
      var MPNorek = $(this).data('norek');
      var MPSaldoawal = $(this).data('saldoawal');
      var MPTanggal = $(this).data('tanggal');
      // console.log(MPID,MPName,MPOwner,MPNorek,MPSaldoawal,MPTanggal)
      $('.metPembayaranID').val(MPID);
      $('.metodePembayaranName').val(MPName);
      $('.metodePembayaranOwner').val(MPOwner);
      $('.noRek').val(MPNorek);
      $('.saldoAwal').val(MPSaldoawal);
      $('.perTanggal').val(MPTanggal);
      $('#ModalUpdateMetodePembayaran').modal('show');
    });

    // edit without set editModel
    $('.editTipeAkun').on('click', function(){
      var idTipe = $(this).data('id')
      var nameTipe = $(this).data('name')
      var aliasTipe = $(this).data('alias')
      var catatan = $(this).data('catatan');
      console.log(idTipe, nameTipe, aliasTipe, catatan);
      $('.tipeAknID').val(idTipe);
      $('.namaTipeAkun').val(nameTipe);
      $('.alias').val(aliasTipe);
      $('.catatan').val(catatan);
      $('#ModalUpdateTipeAkun').modal('show');
    });

    $('.editPembayaran').on('click', function(){
      const VPid = $(this).data('id');
      const VPidPem = $(this).data('idpem');
      const VPBukti = $(this).data('bukti');
      const VPCek = $(this).data('cek');
      const VPCabat = $(this).data('cabat');
      const VPTanggal = $(this).data('tanggal');
      const VPCatatan = $(this).data('catatan');
      const VPPenerima = $(this).data('penerima');
      console.log(VPidPem, VPid, VPBukti, VPCek, VPCabat, VPTanggal, VPCatatan, VPPenerima)
      $('.idMetodePembayaran').val(VPid);
      $('.idCekPembayaran').val(VPidPem);
      $('.noCek').val(VPCek);
      $('.noBukti').val(VPBukti);
      $('.tanggalBayar').val(VPTanggal);
      $('.catatanPembayaran').val(VPCatatan);
      $('.penerima').val(VPPenerima);
      $('#ModalUpdatePembayaran').modal('show');
    });

    // edit without set editModel
    $('.editAkunPerkiraan').on('click', function(){
      var idAP = $(this).data('id')
      var nameAP = $(this).data('name')
      var kodeAP = $(this).data('kode');
      var namapAP = $(this).data('namap');
      var saldoAP = $(this).data('saldo');
      var catatanAP = $(this).data('catatan');
      console.log(idAP, nameAP, kodeAP, namapAP, saldoAP, catatanAP);
      $('.idAkunP').val(idAP);
      $('.kodeAkunPerkiraan').val(kodeAP);
      $('.namaTipeAkun').val(nameAP);
      $('.namaAkunPerkiraan').val(namapAP);
      $('.saldoAwal').val(saldoAP);
      $('.catatanAkunPerkiraan').val(catatanAP);
      $('#ModalUpdateAkunPerkiraan').modal('show');
    });

    $('.newInput').on('click', function(){
      $("div.formInput:first").clone().appendTo("div.inputPembayaran")
      console.log('clone success ')
    });

    $('.removeInput:not(:first)').on('click', function(){
      $(this).parent("div.formInput:last").remove();
      console.log('data removed')
    });

    // $(function() {
    // var path = location.pathname.split('/');
    // var url = location.origin + '/' + path[3]
    // console.log(url)
    // $('.bg-menu-theme .menu-link').each(function(){
    //   if($(this).attr('href').indexOf(url) !==1){
    //     $(this).addClass('active')
    //   }
    // })});

    $(function() {
      $('.jadwalDate').datepicker();
    });

  });