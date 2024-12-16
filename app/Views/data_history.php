<!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-12 d-flex no-block align-items-center">
                        <h4 class="page-title">Pesan</h4>
                        <div class="ml-auto text-right">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Library</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-12">
                        
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Pesan</h5>
                                <div class="table-responsive">
                                <?php if(session()->get('level')==3){ ?>
                                <a href="<?= base_url('home/scan')?>">
                                          <button type="button" class="btn btn-success m-2">Tambah</button>
                                          </a>
                                <?php } ?>
                                    <table id="zero_config" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Nama User</th>
                                                <th>Kode Pesan</th>
                                                <th>Nomor Meja</th>
                                                <th>Nama Barang</th>
                                                <th>Jumlah</th>
                                                <th>Harga</th>
                                                <th>status</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php
      $no=1;
      foreach ($clara as $nelson ) {
?>
                                            <tr>
                                        <th scope="row"><?= $no++ ?></th>
                                        <td><?= $nelson->username ?></td>
                                        <td><?= $nelson->kode_pesan ?></td>
                                        <td><?= $nelson->no_meja ?></td>
                                        <td><?= $nelson->nama_barang ?></td>
                                        <td><?= $nelson->jumlah ?></td>
                                        <td><?= $nelson->total_harga ?></td>
                                        <td><?= $nelson->status ?></td>
                                        <?php if( session()->get('level')==2){?>
                                        <td><a href="<?= base_url('home/diantar/'.$nelson->id_pesan)?>">
                                          <button type="button" class="btn btn-success m-2">Sudah Diterima</button>
                                          </a></td>
                                        <?php } ?>
                                        <?php if( session()->get('level')==1){?>
                                        <td><a href="<?= base_url('home/hapus_pesan/'.$nelson->id_pesan)?>">
                                          <button type="button" class="btn btn-success m-2">Hapus</button>
                                          </a></td>
                                        <?php } ?>
                                        
                                    </tr>
                                    <?php } ?>
                                            
                                        </tbody>
                                        
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->




            



