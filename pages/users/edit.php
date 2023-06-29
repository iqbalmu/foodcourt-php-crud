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
    <li class="breadcrumb-item"><a href="index.php?p=users">Users</a></li>
    <li class="breadcrumb-item active" aria-current="page">Edit User</li>
  </ol>
</nav>

<?php
$ambil = mysqli_query($db, "SELECT * FROM users where username='$_GET[username]'");
$data = mysqli_fetch_array($ambil);
?>

<div class="row">
  <div class="col-8">
    <div class="card card-body border-0 shadow mb-4">
      <h2 class="h5 mb-4">Tambah User</h2>
      <form method="post" action="/websm3/projectuas/proses/proses_users.php?aksi=update&username=<?= $data['username'] ?>">
        <div class="row align-items-center">
          <div class="col-md-12 mb-3">
            <div>
              <label for="username">Username</label>
              <input class="form-control" id="username" name="username" type="text"
                value="<?= $data['username'] ?>" readonly>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <div>
              <label for="password">Password</label>
              <input class="form-control" id="password" name="password" type="text"
                value="Password" required>
            </div>
          </div>
          <div class="col-md-12 mb-3">
            <label for="level">Level</label>
            <select class="form-select mb-0" id="level" name="level" aria-label="Gender select example">
              <!-- <option selected>Level</option>
              <option value="admin">Admin</option>
              <option value="user">User</option> -->

              <option value="admin" <?php if($data['level'] == 'admin') echo 'selected' ?>>Admin</option>
              <option value="user" <?php if($data['level'] == 'user') echo 'selected' ?>>User</option>
            </select>
          </div>
        </div>
        <div class="mt-3">
          <button class="btn btn-gray-800 mt-2 animate-up-2" name="submit" type="submit">Save</button>
        </div>
      </form>
    </div>
  </div>
</div>