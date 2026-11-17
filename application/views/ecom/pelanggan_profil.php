<div class="container mb-3 mt-4">
    <div class="p-5 mb-4 bg-light rounded-3">
        <div class="container-fluid py-1 text-center">
            <h4>Profil</h4>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb justify-content-center text-small">
                    <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">profil</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="row justify-content-center mb-5">
        <div class="col-lg-5">
            <div class="mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nama" value="<?= $pelanggan['nama_pelanggan'] ?>" readonly>
                    <label for="nama">Nama Lengkap</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="nope" value="<?= $pelanggan['telp_pelanggan'] ?>" readonly>
                    <label for="nope">No Telpon</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="alamat" value="<?= $pelanggan['alamat'] ?>" readonly>
                    <label for="alamat">Alamat Jalan</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="kota" value="<?= $pelanggan['kota'] ?>" readonly>
                    <label for="kota">Kota</label>
                </div>
            </div>
        </div>
        <div class="col-lg-5">
            <div class="mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="kodepos" value="<?= $pelanggan['kode_pos'] ?>" readonly>
                    <label for="kodepos">Kode Pos</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <input type="text" class="form-control" id="provinsi" value="<?= $pelanggan['provinsi'] ?>" readonly>
                    <label for="provinsi">Provinsi</label>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-floating">
                    <input type="email" class="form-control" id="email" value="<?= $pelanggan['email'] ?>" readonly>
                    <label for="email">Email</label>
                </div>
            </div>
            <div class="mb-3">
                <a href="<?= base_url() ?>" class="w-100 btn btn-lg btn-primary">Kembali</a>
            </div>
        </div>
    </div>
</div>