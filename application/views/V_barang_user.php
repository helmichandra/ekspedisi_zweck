<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Document</title>
</head>
<body>
    
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                   
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                               
                            </ul>
                        </div>
                        
                        <div class="body" style="background-color: #ffff; text-align: center;">
                        <div class="row">
                           <div class="col-md-12 col-xs-12 col-sm-12">

                            <div class="block-header">
                                
                            <h2>DATA <b>  BARANG  </b></h2>
                         </div>
                           
                                <table class="table table-hover table-striped" style="text-align: center;">
                                <tr><th>   NO</th><th>ID</th><th>NAMA BARANG</th><th>BERAT(Kg)</th><th>STATUS PENGIRIMAN</th><th>ALAMAT</th><th>KODE POS</th><th>LOKASI BARANG</th></tr>

                                <?php 
                                $no = 0;
                                foreach ($data_barang as $barang) {
                                $no++;    
                                echo '
                                    <tr style="text-align: center;">
                                   

                                    <td>'.$no.'</td>
                                    <td>'.$barang->id_barang.'</td>
                                    <td>'.$barang->nama.'</td>
                                    <td>'.$barang->berat.'</td>
                                    <td>'.$barang->status_pengiriman.'</td>
                                    <td>'.$barang->alamat.'</td>
                                    <td>'.$barang->kode_pos.'</td>
                                    <td>'.$barang->lokasi_barang.'</td>
                                   
                                    
                                    </tr>';
                                }
                                ?>
                               
                                </table>
                                <?php if ($this->session->flashdata('pesan')!=null): ?>
                                <div class="alert alert-danger">
                                <?= $this->session->flashdata('pesan');?>
                                </div>
                                 <?php endif ?> 
                                <!-- <?php if($this->session->flashdata('pesan')!=null)
                                {
                                echo '
                                <div class="alert alert-danger">'
                                .$this->session->flashdata('pesan').'
                                </div> ';
                                }
                                ?>      -->
                           </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            
</body>
</html>
 