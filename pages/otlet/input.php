<!-- breadcrumb -->
<nav class="px-2 mb-4 d-flex w-100 justify-content-between" aria-label="breadcrumb" class="d-none d-md-inline-block">
  <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
    <li class="breadcrumb-item">
      <a href="#">
        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
          xmlns="http://www.w3.org/2000/svg">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
          </path>
        </svg>
      </a>
    </li>
    <li class="breadcrumb-item"><a href="index.php?p=otlet">Otlet</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Otlet</li>
  </ol>
</nav>

<div class="row">
  <div class="col-8">
    <div class="card card-body border-0 shadow mb-4">
      <form method="post" action="/websm3/projectuas/proses/proses_otlet.php?aksi=create">
        <div class="row align-items-center">
          <h2 class="h5 mb-4">Otlet</h2>
          <div class="col-md-12 mb-3">
            <div>
              <label for="nama_otl">Nama</label>
              <input class="form-control" id="nama_otl" name="nama_otl" type="text" placeholder="Nama Otlet" required>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div>
              <label for="kontak_otl">Kontak</label>
              <input class="form-control" id="kontak_otl" name="kontak_otl" type="number" placeholder="+62" required>
            </div>
          </div>
          <h2 class="h5 mb-4 mt-4">Pemilik</h2>
          <div class="col-md-12 mb-3">
            <div>
              <label for="pemilik">Pemilik</label>
              <select class="form-select w-100 mb-0" id="pemilik" name="pemilik" aria-label="State select example">
                <option selected>Pemilik</option>
                <?php
                $pemilik = mysqli_query($db, "SELECT * FROM pemilik");
                while ($data_pemilik = mysqli_fetch_array($pemilik)) {
                  ?>
                  <option value="<?= $data_pemilik['id_pemilik'] ?>">
                    <?= $data_pemilik['name'] ?>
                  </option>
                <?php
                }
                ?>
              </select>
            </div>
          </div>
          <div class="mt-3">
            <button class="btn btn-gray-800 mt-2 animate-up-2" name="submit" type="submit">Add</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>