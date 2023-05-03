<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Document</title>
</head>
<body>
    <div class="block-header">
        <h2>DATA <b>  TRANSAKSI  </b></h2>
    </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                   
                                </div>
                            </div>
                           <ul class="header-dropdown m-r--5">
                                <?php if($this->session->userdata('username') == "admin"){?><button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                <div class="glyphicon glyphicon-plus"></div>
                               </button><?php } ?>
                            </ul> 
                        </div>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Tambah Barang</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('index.php/barang/addBarang')?>" method="post">

                                <label for="nama">Nama Barang</label>
                                <input type="text" name="nama" class="form-control"><br> 
                                <label for="nama">Nama Pembeli</label>
                                <input type="text" name="nama_pembeli" class="form-control"><br>
                                <label for="berat">Berat(Kg)</label>
                                <input type="text" name="berat" class="form-control"><br> 
                                <label for="alamat">Alamat</label>
                                <input name="alamat" class="form-control" type="text"><br> 
                                <label for="kode_pos">Kode Pos</label>
                                <input name="kode_pos" class="form-control" type="text"><br> 
                                <select name="tujuan" class="form-control">
                                    <option value="malang">Malang</option>
                                    <option value="kediri">Kediri</option>
                                    <option value="jombang">Jombang</option>
                                    <option value="surabaya">Surabaya</option>

                                </select>
  

                                <br>
                                <div class="modal-footer">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                </div>
                                </form>
                                
                            </div>
                            
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <div class="modal fade" id="updatebarang">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Ganti Barang</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('index.php/barang/updateBarang')?>" method="post">

                                <input type="hidden" name="id_barang" id="id_barang" >

                                <label for="nama">Nama Barang</label>
                                <input type="text" name="nama" class="form-control" id="nama"><br>
                                <label for="nama">Nama Pembeli</label>
                                <input type="text" name="nama_pembeli" class="form-control" id="nama_pembeli"><br>
                                <label for="berat">Berat(Kg)</label>
                                <input type="text" name="berat" class="form-control" id="berat"><br>
                                <label for="berat">Status Pengiriman</label>
                                <select name="status_pengiriman" class="form-control">
                                    <option value="sedang diproses">sedang diproses</option>
                                    <option value="sedang dikirim">sedang dikirim</option>
                                    <option value="sudah diterima">sudah diterima</option>
                                </select>
                                <label for="alamat">Alamat</label>
                                <input name="alamat" class="form-control" type="text" id="alamat"><br> 
                                <label for="kode_pos">Kode Pos</label>
                                <input name="kode_pos" class="form-control" type="text" id="kode_pos"><br> 
                                <select name="tujuan" class="form-control">
                                    <option value="malang">Malang</option>
                                    <option value="kediri">Kediri</option>
                                    <option value="jombang">Jombang</option>
                                    <option value="surabaya">Surabaya</option>

                                </select>
                             
                                

                                <br>
                                <div class="modal-footer">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                </div>
                                </form>
                                
                            </div>
                            
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div>
                        <div class="body">
                        <div class="row">
                           <div class="col-md-12 col-xs-12 col-sm-12">
                           
                                <table class="table table-hover table-striped">
                                <tr><th></th><th>NO</th><th>ID</th><th>NAMA BARANG</th><th>NAMA PENERIMA</th><th>BERAT(Kg)</th>
                                    <th>HARGA/KG</th><th>STATUS</th><th>ALAMAT</th><th>KODE POS</th><th>TUJUAN PENGIRIMAN</th><th>BIAYA</th></tr>

                                <?php 
                                $no = 0;
                                foreach ($data_barang as $barang) {
                                $no++;
                                if($this->session->userdata('username')=="admin"){
                                echo '
                                    <tr>
                                    <td class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    Action
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a  role="menuitem" tabindex="-1" href="#updatebarang"  data-toggle="modal" onclick="tm_detail('.$barang->id_barang.')">UPDATE</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href='.base_url('index.php/barang/deleteBarang/'.$barang->id_barang).' onclick="return confirm(\'Anda Yakin ?\')">DELETE</a></li>
                                    <li role="presentation"><a  role="menuitem" tabindex="-1" href="'.base_url('index.php/Barang/Cetak/'.$barang->id_barang).'">CETAK NOTA</a></li>
                                    </ul>
                                    </td>
                                    <td>'.$no.'</td>
                                    <td>'.$barang->id_barang.'</td>
                                    <td>'.$barang->nama.'</td>
                                    <td>'.$barang->nama_pembeli.'</td>
                                    <td>'.$barang->berat.'</td>
                                    <td>'. 10000 * $barang->berat.'</td>
                                    <td>'.$barang->status_pengiriman.'</td>
                                    <td>'.$barang->alamat.'</td>
                                    <td>'.$barang->kode_pos.'</td>
                                    <td>'.$barang->tujuan.'</td>
                                    <td>'.$barang->biaya.'</td>
                                    <td class="dropdown">
                                    
                                    </td>
                                    
                                    </tr>';
                                }else{
                                 echo '
                                    <tr>
                                    <td class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    Action
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a  role="menuitem" tabindex="-1" href="#updatebarang"  data-toggle="modal" onclick="tm_detail('.$barang->id_barang.')">UPDATE</a></li>
                                    </ul>
                                    </td>
                                    <td>'.$no.'</td>
                                    <td>'.$barang->id_barang.'</td>
                                    <td>'.$barang->nama.'</td>
                                    <td>'.$barang->nama_pembeli.'</td>
                                    <td>'.$barang->berat.'</td>
                                    <td>'. 10000 * $barang->berat.'</td>
                                    <td>'.$barang->status_pengiriman.'</td>
                                    <td>'.$barang->alamat.'</td>
                                    <td>'.$barang->kode_pos.'</td>
                                    <td>'.$barang->tujuan.'</td>
                                    <td>'.$barang->biaya.'</td>
                                    <td class="dropdown">
                                    
                                    </td>
                                    
                                    </tr>';   
                                }
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
            <script>
            function tm_detail(id_barang) {
                $.getJSON("<?=base_url()?>index.php/barang/get_detail_barang/"+id_barang,function (data) {
                    $("#id_barang").val(data['id_barang'])
                    $("#nama").val(data['nama']);
                    $("#nama_pembeli").val(data['nama_pembeli']);
                    $("#berat").val(data['berat']);
                    $("#alamat").val(data['alamat']);
                    $("#kode_pos").val(data['kode_pos']);
                    $("#tujuan").val(data['tujuan']);

                    
                });
            }
            </script>
</body>
</html>
 