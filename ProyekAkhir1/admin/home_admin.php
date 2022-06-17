<?php
include("adm_header.php")
?>
    <h1>Halaman Admin</h1>
    <p>
        <a href="halaman_input.php">
            <input type ="button" class="btn-btn-primary" value="Buat Halaman Baru">
        </a>
    </p>
    <form class = "row g-3" method="get">
        <div class="col-auto">
            <input type="text" class="form-control" placeholder="Masukkan Kata Kunci" name="katakunci" value="<?php echo $katakunci?>"/>
        </div>
        <div class="col-auto">
          <input type="submit" name="cari" value="Cari Tulisan" class="btn-btn-primary">
        </div>
    </form>
    <table class="table-table-striped">
      <thead>
        <tr>
          <th class = "col-1">#</th>
          <th>Judul</th>
          <th>Isi</th>
          <th class="col-2">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Debitis quam iusto quaerat iste cum neque, ex alias laboriosam velit, esse libero quod ipsa eaque ipsum dolorum quas voluptatibus omnis inventore.</td>
          <td>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quam temporibus alias repudiandae fugiat accusantium a quis! Rerum facere officiis non illo libero suscipit molestias dicta beatae voluptatibus debitis? Nam, placeat.</td>
          <td>
            <span class="badge bg-warning text-dark">Edit</span>
            <span class="badge bg-danger">Delete</span>
          </td>  
        </tr>
      </tbody>
    </table>
</main>
    </div>
</body>
</html>