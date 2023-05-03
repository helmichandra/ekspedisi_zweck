<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
   
    <title>Document</title>
</head>
<body>
                            
    <form action="<?=base_url('index.php/barang/transaksi')?>" method="post">
        <input type="text" name="id_barang">
        <!-- <input type="hidden" value="" name="id_seller"> -->

        <input type="text" name="berat">
        <button type="submit">Submit</button>

    </form>


            <script>
            function tm_detail(id_barang) {
                $.getJSON("<?=base_url()?>index.php/barang/get_detail_barang/"+id_barang,function (data) {
                    $("#id_barang").val(data['id_barang'])
                    $("#nama").val(data['nama']);
                    $("#berat").val(data['berat']);
                    $("#alamat").val(data['alamat']);
                    $("#kode_pos").val(data['kode_pos']);
                    $("#lokasi_barang").val(data['lokasi_barang']);

                    
                });
            }
            </script>
</body>
</html>
 