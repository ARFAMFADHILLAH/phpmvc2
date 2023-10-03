<div class="container mt-4">
    <div class="row">
        <div class="col-lg-6">
            <?php Flasher::flash_jurusan(); ?>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">
                Tambah Data Jurusan
            </button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-lg-6">
            <form action="<?= BASEURL; ?>jurusan/cari" method="post">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="cari jurusan..." name="keyword" id="keyword" aria-describedby="button-addon" autocomplete="off">
                    <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
                </div>
            </form>
        </div>
    </div>
    <br><br>
    <h1>Daftar Jurusan</h1>
    <ul class="list-group">
        <?php foreach ($data['jurusan'] as $jurusan) : ?>
            <li class="list-group-item d-flex flex-row justify-content-between">
                <?= $jurusan['namajurusan']; ?>
                <div class="d-flex gap-2">
                    <a href="<?= BASEURL; ?>jurusan/detail/<?= $Jurusan['id'] ?>" class="badge text-bg-primary text-decoration-none float-right">detail</a>
                    <a href="<?= BASEURL; ?>jurusan/ubah/<?= $Jurusan['id'] ?>" class="badge text-bg-success text-decoration-none float-right tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $Jurusan['id']; ?>">ubah</a>
                    <a href="<?= BASEURL; ?>jurusan/hapus/<?= $Jurusan['id'] ?>" class="badge text-bg-danger text-decoration-none float-right" onclick="return confirm('yakin?')">hapus</a>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</div>
</div>
</div>

<!-- Modal -->
<div class=" modal fade" id="formModal" tabindex="-1" aria-labelledby="formModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="formModalLabel">Tambah Jurusan</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= BASEURL; ?>jurusan/tambah" method="post">
                    <input type="hidden" name="id" id="id">

                    <select class="form-select mt-4 mb-4" id="jurusan" name="jurusan" aria-label="Default select example">
                        <option selected>Jurusan:</option>
                        <option value=>TKR</option>
                        <option value=>TATA BOGA</option>
                        <option value=>KECANTIKAN</option>
                        <option value=>PERFILMAN</option>
                    </select>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah Jurusan</button>
                </form>
            </div>
        </div>
    </div>
</div>