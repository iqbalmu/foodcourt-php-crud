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
    <li class="breadcrumb-item"><a href="index.php?p=menu">Menu</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Menu</li>
  </ol>
</nav>

<div class="row">
  <div class="col-12">
    <div class="card card-body border-0 shadow mb-4">
      <h2 class="h5 mb-4">Tambah Menu</h2>
      <form method="post" action="/websm3/projectuas/proses/proses_menu.php?aksi=create">
        <div class="row align-items-center">
          <div class="col-md-6 mb-3">
            <div>
              <label for="nama_menu">Nama Menu</label>
              <input class="form-control" id="nama_menu" name="nama_menu" type="text" placeholder="Masukkan nama menu"
                required>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <label for="Kategori">Kategori</label>
            <select class="form-select mb-0" name="kategori" id="Kategori" aria-label="Gender select example">
              <option selected>Kategori</option>
              <option value="makanan">Makanan</option>
              <option value="minuman">Minuman</option>
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="harga">Harga</label>
              <input class="form-control" id="harga" name="harga" type="number" placeholder="Harga Menu" required>
            </div>
          </div>
          <div class="col-md-6 mb-3">
            <div class="form-group">
              <label for="stock">Stock</label>
              <input class="form-control" id="stock" name="stock" type="number" placeholder="Jumlah Stock" required>
            </div>
          </div>
        </div>
        <h2 class="h5 my-4">Otlet</h2>
        <div class="row">
          <div class="col-md-12 mb-3">
            <label for="otlet">Otlet</label>
            <select class="form-select w-100 mb-0" id="otlet" name="otlet" aria-label="State select example">
              <option selected>Otlet</option>
              <?php
              $otlet = mysqli_query($db, "SELECT * FROM otlet");
              while ($data_otlet = mysqli_fetch_array($otlet)) {
                ?>
                <option value="<?= $data_otlet['id_otlet'] ?>">
                  <?= $data_otlet['nama'] ?>
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
      </form>
    </div>
  </div>