<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Starter Page</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Starter Page</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Kota</h5>

                            <p class="card-text">
                                <form method="post">
                                    <div class="mb-3">
                                        <label for="nama_kota" class="form-label">Nama Kota</label>
                                        <input type="text" class="form-control" name="nama_kota005" id="nama_kota005" aria-describedbyby="Nama Kota">
                                    </div>
                                    <div class="form-group">
                                    <label>Jenis Kota</label>
                                    <select name="jenis_kota005" class="form-control" required>
                                        <option value="">-- Pilih Jenis Kota --</option>
                                        <option value="Kota">Kota</option>
                                        <option value="Kabupaten">Kabupaten</option>
                                    </select>
                                </div>
                                    <div class="mb-3">
                                        <label for="provinsi" class="form-label">Provinsi</label>
                                        <input type="text" class="form-control" name="provinsi005" id="provinsi005" aria-describedbyby="Provinsi">
                                    </div>
                                    <div class="form-group">
                                    <label>Status</label>
                                    <select name="status005" class="form-control" required>
                                        <option value="">-- Pilih Status --</option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Non-Aktif">Non-Aktif</option>
                                    </select>
                                </div>
                                    <button type="submit" class="btn btn-primary">Tambah</button>
                                    <a href="<?= base_url('administrator/kota242250005') ?>" class="btn btn-danger">Kembali</a>
                                </form>
                            </p>
                        </div>
                    </div>
                </div>
                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->