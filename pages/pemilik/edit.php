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
    <li class="breadcrumb-item"><a href="index.php?p=pemilik">pemilik</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit pemilik</li>
  </ol>
</nav>

<?php
$ambil = mysqli_query($db, "SELECT * FROM pemilik where id_pemilik='$_GET[id_edit]'");
$data = mysqli_fetch_array($ambil);
?>

<div class="row">
  <div class="col-8">
    <div class="card card-body border-0 shadow mb-4">
      <h2 class="h5 mb-4">Edit Data Pemilik</h2>
      <form method="post" action="/websm3/projectuas/proses/proses_pemilik.php?aksi=update&id_edit=<?= $data['id_pemilik']?>">
        <div class="row align-items-center">
          <div class="col-md-12 mb-3">
            <div>
              <label for="nama">Nama</label>
              <input class="form-control" id="nama" name="nama" type="text" value="<?= $data['name'] ?>" required>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div>
              <label for="email">Email</label>
              <input class="form-control" id="email" name="email" type="email" value="<?= $data['email'] ?>" required>
            </div>
          </div>          
          <div class="col-md-12 mb-3">
            <div>
              <label for="phone">Kontak</label>
              <input class="form-control" id="phone" name="phone" type="number" value="<?= $data['phone'] ?>" required>
            </div>
          </div>          
        </div>       
        <div class="col-md-12 mb-3">
            <div>
              <label for="alamat">Alamat</label>
              <input class="form-control" id="alamat" name="alamat" type="text" value="<?= $data['address'] ?>" required>
            </div>
          </div> 
        <div class="mt-3">
          <button class="btn btn-gray-800 mt-2 animate-up-2" name="submit" type="submit">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>