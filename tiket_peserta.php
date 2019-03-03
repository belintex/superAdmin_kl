<?php include "header.php"; ?>
          <!--------------------
          START - Breadcrumbs
          -------------------->
          <ul class="breadcrumb">
            <!-- <li class="breadcrumb-item">
              <a href="index.html">Home</a>
            </li>
            <li class="breadcrumb-item">
              <a href="index.html">Products</a>
            </li> -->
            <li class="breadcrumb-item">
              <span>Dashboard</span>
            </li>
          </ul>
          <!--------------------
          END - Breadcrumbs
          -------------------->
          <div class="content-panel-toggler">
            <i class="os-icon os-icon-grid-squares-22"></i><span>Sidebar</span>
          </div>
          <div class="content-i">
            <div class="content-box">
              <div class="element-wrapper">
                <h6 class="element-header">
                  Tiket Peserta
                </h6>

                <div class="element-box-tp">
                  <div class="table-responsive">
                    <table class="table table-padded">
                      <thead>
                        <tr>
                          <th>
                            Even
                          </th>
                          <th>
                            Orgnisasi
                          </th>
                          <th>
                            Jadwal
                          </th>
                          <th class="text-center">
                            Kategori
                          </th>
                          <th class="text-right">
                            Pending
                          </th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr id="tiket" style="cursor: pointer;">
                          <td>
                            Judul Even
                          </td>
                          <td class="cell-with-media">
                            <img alt="" src="img/company1.png" style="height: 25px;"><span>Neo Telemetri</span>
                          </td>
                          <td>
                            <span>25/4/2019</span><span class="smaller lighter">13:52</span>
                          </td>
                          <td class="text-center">
                            <a class="badge badge-success" href="">Teknologi</a>
                          </td>
                          <td class="text-right bolder nowrap">
                            <span class="text-info">Rp 1.000.000</span>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>

                <div class="element-box tiket-peserta tutup" id="tiket-x">
                  <h5 class="form-header">
                    Judul Even
                  </h5>
                  <i class="os-icon os-icon-close" style="cursor: pointer;position: absolute;right: 32px;top: 18px;" id="close-x"></i>
                  <div class="form-desc">
                    <div class="os-progress-bar primary">
                      <div class="bar-labels">
                        <div class="bar-label-left">
                          <span>Progress</span><span class="positive">+12</span>
                        </div>
                        <div class="bar-label-right">
                          <span class="info">72/100</span>
                        </div>
                      </div>
                      <div class="bar-level-1" style="width: 100%">
                        <div class="bar-level-2" style="width: 75%">
                          <div class="bar-level-3" style="width: 85%"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="table-responsive">
                    <table id="dataTable1" width="100%" class="table table-striped table-lightfont">
                      <thead>
                        <tr>
                          <th>Nama</th>
                          <th>Kampus</th>
                          <th>Jurusan</th>
                          <th>Waktu Pemesanan</th>
                          <th>Waktu Aksi</th>
                          <th>Bank Penerima</th>
                          <th>Status</th>
                          <th>Total Pembayaran</th>
                          <th></th>
                        </tr>
                      </thead>
                      <tfoot>
                        <tr>
                          <th>Nama</th>
                          <th>Kampus</th>
                          <th>Jurusan</th>
                          <th>Waktu Pemesanan</th>
                          <th>Waktu Aksi</th>
                          <th>Bank Penerima</th>
                          <th>Status</th>
                          <th>Total Pembayaran</th>
                          <th width="15%"></th>
                        </tr>
                      </tfoot>
                      <tbody>
                        <tr>
                          <td>Alfikri</td>
                          <td>Universitas Andalas</td>
                          <td>Teknik Elektro</td>
                          <td>25/3/2019 8:13</td>
                          <td>25/3/2019 9:00</td>
                          <td>BRI-Alfikri</td>
                          <td class="nowrap">
                            <span class="status-pill smaller red"></span><span>Ditolak</span>
                          </td>
                          <td>Rp 1.000.123</td>
                          <td>
                            <button class="btn btn-success btn-sm">Terima</button>
                          </td>
                        </tr>
                        <tr>
                          <td>Alfikri</td>
                          <td>Universitas Andalas</td>
                          <td>Teknik Elektro</td>
                          <td>25/3/2019 8:13</td>
                          <td>25/3/2019 9:00</td>
                          <td>BRI-Alfikri</td>
                          <td class="nowrap">
                            <span class="status-pill smaller green"></span><span>Diterima</span>
                          </td>
                          <td>Rp 1.000.123</td>
                          <td>
                            <button class="btn btn-secondary btn-sm">Tolak</button>
                          </td>
                        </tr>
                        <tr>
                          <td>Alfikri</td>
                          <td>Universitas Andalas</td>
                          <td>Teknik Elektro</td>
                          <td>25/3/2019 8:13</td>
                          <td>25/3/2019 9:00</td>
                          <td>BRI-Alfikri</td>
                          <td class="nowrap">
                            <span class="status-pill smaller yellow"></span><span>Pending</span>
                          </td>
                          <td>Rp 1.000.123</td>
                          <td>
                            <button class="btn btn-success btn-sm">Terima</button>
                            <button class="btn btn-secondary btn-sm" style="margin-left: 0;">Tolak</button>
                          </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="display-type"></div>
    </div>
    <?php include"script.php" ?>
    <script src="js/dataTables.bootstrap4.min.js"></script>
    <script src="js/demo_customizer.js?version=4.4.0"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $('#tiket').click(function(){
          $('.element-box.tiket-peserta#tiket-x').addClass('buka');
          $('.element-box.tiket-peserta#tiket-x').removeClass('tutup');
        });
        $('#close-x').click(function(){
          $('.element-box.tiket-peserta#tiket-x').addClass('tutup');
          $('.element-box.tiket-peserta#tiket-x').removeClass('buka');
        });
      });
    </script>
  </body>
</html>
