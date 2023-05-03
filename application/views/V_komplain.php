<?php

if($this->session->flashdata("message")){

  echo "<div class='alert alert-success'>

        ".$this->session->flashdata("message")."

        </div>";

}

?>

<!DOCTYPE html>

<html>

  <head>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.boot\apcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">

      <div class="row">

        <div class="col-md-10" style="margin:0 auto; float:none;">

          <h3 align="center">Kirim Komplain</h3>

          <div class="registrasi border p-2">

            <h4 align="center">Form Komplain</h4>     

            <form method="post" action="<?=base_url()?>index.php/komplain/send"  enctype="multipart/form-data">

              <div class="row">

                <div class="col-md-12>

                  <div class="form-group">

                    <label>Nama</label>

                    <input type="text" name="name" placeholder="Masukan Nama" class="form-control" required />

                  </div>

                  <div class="form-group">

                    <label>Jabatan</label>

                    <input type="text" name="jabatan" placeholder="Masukan Jabatan" class="form-control" required />
                  </div>

                  <div class="form-group">

                    <label>Alamat Email</label>

                    <input type="email" name="email" class="form-control" placeholder="Masukan Alamat Email" required />

                  </div>

                   <div class="form-group">

                    <label>Instansi</label>

                    <input type="text" name="instansi" placeholder="Masukan Instansi" class="form-control" required />
                  </div>


                

                  

                  <div class="form-group">

                    <label>No. Handphone</label>

                    <input type="text" name="mobile" placeholder="Masukan No. Handphone" class="form-control" pattern="\d*" required />

                  </div>

                  <div class="form-group">

                    <label>Lampirkan Dokumen</label>

                    <input type="file" name="resume" accept=".doc,.docx, .pdf" required />

                  </div>

                  <div class="form-group">

                    <label>Keterangan</label>

                    <textarea name="additional_information" placeholder="Isi Komplain" class="form-control" required rows="8"></textarea>

                  </div>


              </div>

              <div class="form-group" align="center">

                <input type="submit" name="submit" value="Submit" class="btn btn-info" />

              </div>

            </form>

          </div>

        </div>

      </div>

    </div>

  </body>

</html>