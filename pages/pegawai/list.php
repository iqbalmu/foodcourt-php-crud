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
    <li class="breadcrumb-item active" aria-current="page">List</li>
  </ol>

  <?php
  if ($_SESSION['level'] == 'admin'): ?>

  <div class="btn-toolbar mb-2 mb-md-0">
    <a href="index.php?p=pegawai&page=input" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center">
      <svg class="icon icon-xs me-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"
        xmlns="http://www.w3.org/2000/svg">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6">
        </path>
      </svg>
      Tambah Pegawai
    </a>
  </div>

  <?php endif ?>

</nav>

<div class="col-md-12 mt-2 card border-0 shadow mb-4">
      <div class="card-body">
        <div class="table-responsive">
          <table class="table table-centered table-nowrap mb-0 rounded text-center">
            <thead class="thead-light ">
              <tr>
                <th class="border-0 rounded-start">#</th>
                <th class="border-0">Nama</th>
                <th class="border-0">Umur</th>
                <th class="border-0">JK</th>
                <th class="border-0">No_HP</th>
                <th class="border-0">Alamat</th>
                <th class="border-0 rounded-end">Action</th>
              </tr>
            </thead>

            <?php
                $tampil = mysqli_query($db, "SELECT * FROM pegawai");
                $no = 1;
                while ($data = mysqli_fetch_array($tampil)) {
              ?>
                <tbody>
                <tr>
                  <td> <?= $no ?></td>              
                  <td> <?= $data['nama'] ?></td>              
                  <td> <?= $data['umur'] ?></td>              
                  <td> <?= $data['jk'] ?></td>
                  <td> <?= $data['no_hp'] ?></td>
                  <td> <?= $data['alamat'] ?></td>
                  <td>
                    <div>
                        <a href="index.php?p=pegawai&page=edit&id_edit=<?= $data['id_pegawai'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#fba918" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="14 2 18 6 7 17 3 17 3 13 14 2"></polygon><line x1="3" y1="22" x2="21" y2="22"></line></svg>
                        </a>       
                        |       
                        <a href="proses/proses_pegawai.php?aksi=delete&id_hapus=<?= $data['id_pegawai'] ?>">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="#e11d48" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg> 
                        </a>
                    </div>
                  </td>                            
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