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
    <li class="breadcrumb-item"><a href="index.php?p=otlet">List</a></li>
    <li class="breadcrumb-item active" aria-current="page">Detail Menu</li>
  </ol>

  <!-- <div class="btn-toolbar mb-2 mb-md-0">
    <a href="index.php?p=otlet&page=input" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
      <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
        </path>
      </svg>
      Tambah Otlet
    </a>
  </div> -->
</nav>
<div class="col-md-12 mt-2 card border-0 shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-centered table-nowrap mb-0 rounded text-center">
            <thead class="thead-light ">
              <tr>
                <th class="border-0 rounded-start">#</th>
                <th class="border-0">Nama</th>
                <th class="border-0">Kategori</th>
                <th class="border-0">Harga</th>
                <th class="border-0">Stok</th>
              </tr>
            </thead>

            <?php
                $tampil = mysqli_query($db, "SELECT * FROM menu WHERE id_otlet = '$_GET[id_detail]'");
                $no = 1;
                while ($data = mysqli_fetch_array($tampil)) {
              ?>
                <tbody>
                <tr>
                  <td> <?= $no ?></td>              
                  <td> <?= $data['menu'] ?></td>              
                  <td> <?= $data['kategori'] ?></td>              
                  <td> <?= $data['harga'] ?></td>              
                  <td> <?= $data['stock'] ?></td>                                     
                </tr>      
                </tbody>
              <?php
                $no++;
              }
            ?>
          </table>
        </div>
      </div>
    </div>