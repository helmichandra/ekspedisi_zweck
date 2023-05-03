<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ZweCk</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon

		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?=base_url()?>asset/img/logo7.jpg">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/font-awesome.min.css">
    <!-- owl.carousel CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/owl.carousel.css">
    <link rel="stylesheet" href="<?=base_url()?>asset/css/owl.theme.css">
    <link rel="stylesheet" href="<?=base_url()?>asset/css/owl.transitions.css">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/animate.css">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/normalize.css">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/meanmenu.min.css">
    <!-- main CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/main.css">
    <!-- morrisjs CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="<?=base_url()?>asset/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="<?=base_url()?>asset/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?=base_url()?>asset/css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?=base_url()?>asset/js/vendor/modernizr-2.8.3.min.js"></script>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
</head>

<div class="block-header">
        <h2>CETAK <b>  NOTA  </b></h2>
    </div>
            <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
                    <div class="card">
                        <div class="header">
                            <div class="row clearfix">
                                <div class="col-xs-12 col-sm-6">
                                   
                                </div>
                            </div>
                        </div>
                        <div class="body">
                        <div class="row">
                           <div class="col-md-12 col-xs-12 col-sm-12">
                           
                                <table class="table table-hover table-striped">
                                <tr><th>NO</th><th>ID</th><th>NAMA BARANG</th><th>NAMA PEMBELI</th><th>BERAT(Kg)</th>
                                    <th>HARGA/KG</th><th>ALAMAT</th><th>KODE POS</th><th>LOKASI BARANG</th></tr>

                                <?php 
                                $no = 0;
                                foreach ($data_barang as $barang) {
                                $no++;    
                                echo '
                                    <tr>
                                    <td>'.$no.'</td>
                                    <td>'.$barang->id_barang.'</td>
                                    <td>'.$barang->nama.'</td>
                                    <td>'.$barang->nama_pembeli.'</td>
                                    <td>'.$barang->berat.'</td>
                                    <td>'. 10000 * $barang->berat.'</td>
                                    <td>'.$barang->alamat.'</td>
                                    <td>'.$barang->kode_pos.'</td>
                                    <td>'.$barang->lokasi_barang.'</td>
                                    <td class="dropdown">
                                    
                                    </td>
                                    
                                    </tr>';
                                }
                                ?>
                               
                                </table>
                                <button class="btn btn-info" onclick="window.print()">Print</button>
                           </div>
                        </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>

 <script src="<?=base_url()?>asset/js/vendor/jquery-1.11.3.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="<?=base_url()?>asset/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/metisMenu/metisMenu.min.js"></script>
    <script src="<?=base_url()?>asset/js/metisMenu/metisMenu-active.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="<?=base_url()?>asset/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- morrisjs JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/morrisjs/raphael-min.js"></script>
    <script src="<?=base_url()?>asset/js/morrisjs/morris.js"></script>
    <script src="<?=base_url()?>asset/js/morrisjs/morris-active-pro.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/calendar/moment.min.js"></script>
    <script src="<?=base_url()?>asset/js/calendar/fullcalendar.min.js"></script>
    <script src="<?=base_url()?>asset/js/calendar/fullcalendar-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="<?=base_url()?>asset/js/main.js"></script>
    <style type="text/css">
        th{
            text-align: center;
        }
    </style>
</body>

</html>