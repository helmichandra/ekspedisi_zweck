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
        <h2>DATA <b>  SELLER  </b></h2>
    </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                   
                                </div>
                            </div>
                            <ul class="header-dropdown m-r--5">
                               <button class="btn btn-primary" data-toggle="modal" data-target="#myModal">
                                <div class="glyphicon glyphicon-plus"></div>
                               </button>
                            </ul>
                        </div>
                        <div class="modal fade" id="myModal">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Tambah Seller</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('index.php/seller/addSeller')?>" method="post">

                                <label for="nama">Nama Seller</label>
                                <input type="text" name="nama" class="form-control"><br> 
                                <label for="alamat">Alamat</label>
                                <input name="alamat" class="form-control" type="text"><br> 
                                <label for="telp">Telepon</label>
                                <input name="telp" class="form-control" type="text"><br> 
                                <label for="email">Email</label>
                                <input name="email" class="form-control" type="email"><br> 

  

                                <br>
                                <div class="modal-footer">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                </div>
                                </form>
                                
                            </div>
                            
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <div class="modal fade" id="updateseller">
                            <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <h4 class="modal-title">Ganti Seller</h4>
                            </div>
                            <div class="modal-body">
                                <form action="<?=base_url('index.php/seller/updateSeller')?>" method="post">

                                <input type="hidden" name="id_seller" id="id_seller" >

                                <label for="nama">Nama Seller</label>
                                <input type="text" name="nama" class="form-control" id="nama"><br>
                                <label for="alamat">Alamat</label>
                                <input name="alamat" class="form-control" type="text" id="alamat"><br> 
                                <label for="telp">Telepon</label>
                                <input name="telp" class="form-control" type="text" id="telp"><br> 
                                <label for="email">Email</label>
                                <input name="email" class="form-control" type="email" id="email"><br> 
 
                             
                                

                                <br>
                                <div class="modal-footer">
                                <input type="submit" name="simpan" value="Simpan" class="btn btn-success">
                                </div>
                                </form>
                                
                            </div>
                            
                            </div><!-- /.modal-content -->
                        </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                        <div class="body">
                        <div class="row">
                           <div class="col-md-12 col-xs-12 col-sm-12">
                           
                                <table class="table table-hover table-striped">
                                <tr><th></th><th>NO</th><th>ID</th><th>NAMA SELLER</th><th>ALAMAT</th><th>TELEPON</th><th>EMAIL</th></tr>

                                <?php 
                                $no = 0;
                                foreach ($data_seller as $seller) {
                                $no++;    
                                echo '
                                    <tr>
                                    <td class="dropdown">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown">
                                    Action
                                    <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
                                    <li role="presentation"><a  role="menuitem" tabindex="-1" href="#updateseller"  data-toggle="modal" onclick="tm_detail('.$seller->id_seller.')">UPDATE</a></li>
                                    <li role="presentation"><a role="menuitem" tabindex="-1" href='.base_url('index.php/seller/deleteSeller/'.$seller->id_seller).' onclick="return confirm(\'Anda Yakin ?\')">DELETE</a></li>
                                    </ul>
                                    </td>
                                    <td>'.$no.'</td>
                                    <td>'.$seller->id_seller.'</td>
                                    <td>'.$seller->nama.'</td>
                                    <td>'.$seller->alamat.'</td>
                                    <td>'.$seller->telp.'</td>
                                    <td>'.$seller->email.'</td>
                                    <td class="dropdown">
                                    
                                    </td>
                                    
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
            <script>
            function tm_detail(id_seller) {
                $.getJSON("<?=base_url()?>index.php/seller/get_detail_seller/"+id_seller,function (data) {
                    $("#id_seller").val(data['id_seller'])
                    $("#nama").val(data['nama']);
                    $("#alamat").val(data['alamat']);
                    $("#telp").val(data['telp']);
                    $("#email").val(data['email']);

                });
            }
            </script>
</body>
</html>
 