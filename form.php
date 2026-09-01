<?php
require_once 'navbar.php';
?>

<!-- awal content -->
<div class="container">

 <!-- awal kolom -->
<div class="container">
  <div class="row align-items-center">
    <div class="col-2">
     <!-- One of three columns -->
    </div>
    
    <div class="col-8">
       <br>
      <!-- awal card -->
 <div class="card">
   <div class="card-header">
    <h3>Form</h3>
  </div>
  <div class="card-body">
 <!-- awal form -->
<form>
  <div class="mb-3">
    <label for="exampleInputNamaDepan" class="form-label">NamaDepan</label>
    <input type="text" class="form-control" id="exampleInputNamaDepan" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputNamaBelakang" class="form-label">NamaBelakang</label>
    <input type="text" class="form-control" id="exampleInputNamaBelakang" aria-describedby="emailHelp">
  </div>
    <div class="mb-3">
    <label for="exampleInputKelas" class="form-label">Kelas</label>
    <input type="text" class="form-control" id="exampleInputKelas" aria-describedby="emailHelp">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
 <!-- akhir form -->
  </div>
</div>
      <!-- akhir card -->
    </div>
    
    <div class="col-2">
      <!-- One of three columns -->
     </div>
   </div>
 </div>
  <!-- akhir kolom -->
  
</div>
<!-- akhir content -->

<?php
require_once 'footer.php';
?>