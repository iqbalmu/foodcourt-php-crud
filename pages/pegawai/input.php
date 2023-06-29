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
    <li class="breadcrumb-item"><a href="index.php?p=pegawai">Pegawai</a></li>
    <li class="breadcrumb-item active" aria-current="page">Tambah Pegawai</li>
  </ol>

</nav>

<div class="row">
  <div class="col-8">
    <div class="card card-body border-0 shadow mb-4">
      <h2 class="h5 mb-4">Tambah Pegawai</h2>
      <form method="post" action="/websm3/projectuas/proses/proses_pegawai.php?aksi=create">
        <div class="row align-items-center">
          <div class="col-md-12 mb-3">
            <div>
              <label for="nama">Nama</label>
              <input class="form-control" id="nama" name="nama" type="text" placeholder="Nama" required>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div>
              <label for="umur">Umur</label>
              <input class="form-control" id="umur" name="umur" type="number" placeholder="Umur" required>
            </div>
          </div>          
          <div class="col-md-12 mb-3">
            <label for="jk">Jenis Kelamin</label>
            <select class="form-select mb-0" id="jk" name="jk" aria-label="Gender select example">
              <option selected>Jenis Kelamin</option>
              <option value="l">Laki-Laki</option>
              <option value="p">Perempuan</option>
            </select>
          </div>
          <div class="col-md-12 mb-3">
            <div>
              <label for="kontak">Kontak</label>
              <input class="form-control" id="kontak" name="kontak" type="number" placeholder="+62" required>
            </div>
          </div>          
        </div>       
        <div class="col-md-12 mb-3">
            <div>
              <label for="alamat">Alamat</label>
              <input class="form-control" id="alamat" name="alamat" type="text" placeholder="Alamat" required>
            </div>
          </div> 
        <div class="mt-3">
          <button class="btn btn-gray-800 mt-2 animate-up-2" name="submit" type="submit">Add</button>
        </div>
      </form>
    </div>
  </div>
</div>