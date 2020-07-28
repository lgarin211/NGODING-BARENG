          <div class="container card">
            <form action="<?= base_url('welcome/create'); ?>" class="user" method="post">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">INSTERT NEW DATA</h1>
              </div>
              <form class="user">
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="produk" placeholder="NAMA PRODUK">
                  </div>
                  <div class="col-sm-6">
                    <input type="text" class="form-control form-control-user" name="asal" placeholder="ASAL">
                  </div>
                </div>
                <div class="form-group">
                  <input type="text" class="form-control form-control-user" name="link" placeholder="LINK GAMBAR">
                </div>
                <div class="form-group row">
                  <div class="col-sm-6 mb-3 mb-sm-0">
                    <input type="text" class="form-control form-control-user" name="penjual" placeholder="PENJUAL">
                  </div>
                  <div class="col-sm-6">
                    <input type="number" class="form-control form-control-user" name="harga" placeholder="HARGA">
                  </div>
                </div>

                <button type="submit" class="btn btn-primary btn-user btn-block">
                  KIRIM DATA
                </button>
              </form>
              <hr>
            </div>
          </div>