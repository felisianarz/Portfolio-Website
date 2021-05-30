
<div class="container mt-5">
    
    <?php 
        $covid = file_get_contents('https://api.kawalcorona.com/indonesia');
        $ind = json_decode($covid, true)
    ?>
    <div class="row mt-5">
        <div class="col mt-5 mb-1 text-center">
            <h4>Kasus Coronavirus di Indonesia</h4>
        </div>
    </div>

    <div class="row">
        
    <div class="col-sm-4">
        <div class="card shadow">
        <div class="card-body  text-center btn-danger">
            <h5></i> Positif</h5>
            <p>
                <?php echo $ind[0]['positif'] ?>
            </p>
        </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card shadow">
        <div class="card-body btn-success text-center">
            <h5>Sembuh</h5>
            <p>
                <?php echo $ind[0]['sembuh'] ?>
            </p>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card shadow">
        <div class="card-body text-center btn-dark">
            <h5>Meninggal</h5>
            <p>
                <?php echo $ind[0]['meninggal'] ?>
            </p>
        </div>
        </div>
    </div>

    </div>
</div>

<!-- Data Provinsi -->

    <div class="container">

    <div class="row">
        <div class="col mt-4 mb-1 text-center">
            <h4>Data Kasus Coronavirus Berdasarkan Provinsi</h4>
        </div>
    </div>

        <?php 
            $data = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
            $provinsi = json_decode($data, true);
        ?>        
    
        <table class="table table-bordered mt-2">
            <thead>
                <th>No</th>
                <th>Nama Provinsi</th>
                <th>Jumlah Positif</th>
                <th>Jumlah Sebuh</th>
                <th>Jumlah Meninggal</th>
            </thead>
            <tbody>
                <?php
                    $a=1;
                    foreach($provinsi as $prv) :
                ?>
                <tr>
                    <td><?= $a++; ?></td>
                    <td><?= $prv['attributes']['Provinsi']; ?></td>
                    <td><?= $prv['attributes']['Kasus_Posi']; ?></td>
                    <td><?= $prv['attributes']['Kasus_Semb']; ?></td>
                    <td><?= $prv['attributes']['Kasus_Meni']; ?></td>
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>

 