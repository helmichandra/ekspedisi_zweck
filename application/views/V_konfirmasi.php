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

    <title>Konfirmasi Transaksi</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  </head>

  <body>

    <div class="container">

      <div class="row">

        <div class="col-md-10" style="margin:0 auto; float:none;">

          

          <div class="registrasi border p-2">

            <h4 align="center">Form Transaksi</h4>     

            <form method="post" action="<?=base_url('index.php/konfirmasi/send')?>" enctype="multipart/form-data">

              <div class="row">

                <div class="col-md-12">

                  <div class="form-group">

                    <label>Nama Pembeli</label>

                    <input type="text" name="name" placeholder="Masukan Nama" class="form-control" required />

                  </div>

                  

                  <div class="form-group">

                    <label>Pembayaran</label>

                    <select name="pembayaran" class="form-control" multiple required style="height:150px;">

                      <option value="bca">BCA</option>

                      <option value="bri">BRI</option>

                      <option value="bni">BNI</option>

                      <option value="mandiri">Mandiri</option>

                      <option value="bank_lain">Bank Lain</option>

                      

                    </select>

                  </div>

                  <div class="form-group">

                    <label>Alamat Email</label>

                    <input type="email" name="email" class="form-control" placeholder="Masukan Alamat Emaill" required />

                  </div>ll

                </div>

                <div class="col-md-12">

                 

                  <div class="form-group">

                    <label>No. Handphone Pembeli</label>

                    <input type="text" name="mobile" placeholder="Masukan No. Handphone" class="form-control" pattern="\d*" required />

                  </div>

                  <div class="form-group">

                    <label>Lampirkan Pembayaran</label>

                    <input type="file" name="resume" accept=".doc,.docx, .pdf" required />

                  </div>

                  <div class="form-group">

                    <label>Keterangan</label>

                    <textarea name="additional_information" placeholder="Keterangan Diri" class="form-control" required rows="8"></textarea>

                  </div>

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