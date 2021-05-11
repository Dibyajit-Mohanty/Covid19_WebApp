<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php include 'links.php'; ?>
</head>
<body>
    <section class="container-fluid">
        <div class="my-5" style="color: red">
            <h3 class="text-center text-uppercase"> COVID-19 Live upadtes of india</h3>
        </div>
            <div class="table-responsive">
                <table class="table table-bordered table-striped text-center">
                    <tr>
                        <th>Last Updated Time</th>
                        <th>State</th>
                        <th>Confirmed</th>
                        <th>Active</th>
                        <th>Recovered</th>
                        <th>Deaths</th>
                    </tr>
<?php

$data = file_get_contents('https://api.covid19india.org/data.json');
$coranalive = json_decode($data, true);

$statescount = count($coranalive['statewise']);


$i=1;
while($i < $statescount){

    ?>
    <tr>
        <td><?php echo $coranalive['statewise'][$i]['lastupdatedtime'] ?></td>
        <td><?php echo $coranalive['statewise'][$i]['state'] ?></td>
        <td><?php echo $coranalive['statewise'][$i]['confirmed'] ?></td>
        <td><?php echo $coranalive['statewise'][$i]['active'] ?></td>
        <td><?php echo $coranalive['statewise'][$i]['recovered'] ?></td>
        <td><?php echo $coranalive['statewise'][$i]['deaths'] ?></td>
    </tr>

  <?php
  $i++;
}

?>
                </table>
            </div>
    </section>
</body>
</html>