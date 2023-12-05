<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="login-brand">
              <!-- <img src="<?php echo base_url('assets/assets_stisla/') ?>/assets/img/stisla-fill.svg" alt="logo" width="100" class="shadow-light rounded-circle"> -->
            </div>

            <div class="card card-primary">
              <div class="card-header"><h4>Pendaftaran Akun Pengguna</h4></div>

              <div class="card-body">
                <form method="POST" action="<?php echo base_url('register') ?>">
                  <div class="row">
                    <div class="form-group col-6">
                      <label for="nama">Nama Lengkap</label>
                      <input id="nama" type="text" class="form-control" name="nama" autofocus>
                      <?php echo form_error('nama', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label for="username">Buat Username</label>
                      <input id="username" type="text" class="form-control" name="username">
                      <?php echo form_error('username', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="alamat">Alamat Tempat Tinggal</label>
                    <input id="alamat" type="text" class="form-control" name="alamat">
                    <?php echo form_error('alamat', '<div class="text-small text-danger">','</div>') ?>
                    <div class="invalid-feedback">
                    </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-6">
                      <label for="gender" class="d-block">Jenis Kelamin</label>
                      <select class="form-control" name="gender">
                        <option value="">-- Pilih --</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                      </select>
                      <?php echo form_error('gender', '<div class="text-small text-danger">','</div>') ?>
                      </div>
                    <div class="form-group col-6">
                      <label for="no_telp" class="d-block">No. HP</label>
                      <input id="no_telp" type="text" class="form-control" name="no_telp">
                      <?php echo form_error('no_telp', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    </div>
                  <div class="row">
                    <div class="form-group col-6">
                      <label>NIK Sesuai dengan KTP</label>
                      <input type="text" name="no_ktp" class="form-control">
                      <?php echo form_error('no_ktp', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                    <div class="form-group col-6">
                      <label>Buat Password</label>
                      <input type="password" name="password" class="form-control">
                      <?php echo form_error('password', '<div class="text-small text-danger">','</div>') ?>
                    </div>
                  </div>

                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                      Daftar
                    </button>
                  </div>
                </form>
              </div>
            </div>
            <div class="simple-footer">
            <div class="mt-5 text-muted text-center">
              Sudah memiliki akun? <a href="<?php echo base_url('auth/login') ?>">Silahkan Login</a>
              <br>
              Kembali Ke Halaman <a href="<?php echo base_url('customer/Dashboard') ?>">Utama</a> <br> <br> <br>
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> ZUR RENTAL MOBIL MEDAN </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>