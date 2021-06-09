
<div class="container mt-5">
    
    <?php 
        $covid = file_get_contents('https://api.kawalcorona.com/indonesia');
        $ind = json_decode($covid, true)
    ?>
    <div class="row mt-5">
        <div class="col mt-5 mb-1 text-center">
            <h4>Coronavirus in Indonesia</h4>
        </div>
    </div>

    <div class="row">
        
    <div class="col-sm-4">
        <div class="card shadow">
        <div class="card-body  text-center btn-danger">
            <h5></i>Coronavirus Cases</h5>
            <p>
                <?php echo $ind[0]['positif'] ?>
            </p>
        </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card shadow">
        <div class="card-body btn-success text-center">
            <h5>Recovered</h5>
            <p>
                <?php echo $ind[0]['sembuh'] ?>
            </p>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card shadow">
        <div class="card-body text-center btn-dark">
            <h5>Deaths</h5>
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

        <?php 
            $data = file_get_contents('https://api.kawalcorona.com/indonesia/provinsi');
            $provinsi = json_decode($data, true);
        ?>        
    
        <table class="table table-bordered mt-4">
            <thead>
                <th>No</th>
                <th>Province</th>
                <th>Coronavirus Cases</th>
                <th>Recovered</th>
                <th>Deaths</th>
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

    <div class="container">

        <?php 
            $p = file_get_contents('https://api.kawalcorona.com/');
            $global= json_decode($p, true);
        ?>        
    
        <table class="table table-bordered mt-4">
            <thead>
                <th>No</th>
                <th>Country</th>
                <th>Coronavirus Cases</th>
                <th>Recovered</th>
                <th>Deaths</th>
            </thead>
            <tbody>
                <?php
                    $a=1;
                    foreach($global as $gbl) :
                ?>
                <tr>
                    <td><?= $a++; ?></td>
                    <td><?= $gbl['attributes']['Country_Region']; ?></td>
                    <td><?= $gbl['attributes']['Confirmed']; ?></td>
                    <td><?= $gbl['attributes']['Recovered']; ?></td>
                    <td><?= $gbl['attributes']['Deaths']; ?></td>
                </tr>
                <?php 
                    endforeach;
                ?>
            </tbody>
        </table>
    </div>
 
