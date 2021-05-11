<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <?php include 'links.php'; ?>
</head>
<body onload="fetch()">
    <section class="container-fluid">
    <div class="my-5" style="color: #5fbf07;">
            <h3 class="text-center text-uppercase"> COVID-19 Live upadtes of world</h3>
    </div>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center" id="tbval">
                <tr>
                    <th>Country</th>
                    <th>Total Confirmed</th>
                    <th>Total Recovered</th>
                    <th>Total Deaths</th>
                    <th>Total Deaths</th>
                    <th>New Recovered</th>
                    <th>new Deaths</th>
                </tr>
            </table>
        </div>
    </section>
    <script>
        function fetch(){
            $.get("https://api.covid19api.com/summary",
                function (data){
                    // console.log(data['Countries'].length);
                    var tbval = document.getElementById('tbval');
                    for(var i = 1;i < (data['Countries'].length);i++){
                        var x = tbval.insertRow();
                        x.insertCell(0);
                        tbval.rows[i].cells[0].innerHTML = data['Countries'][i-1]['Country'];
                        tbval.rows[i].cells[0].style.background = '#7a4a91';
                        tbval.rows[i].cells[0].style.color = '#fff';
                        
                        x.insertCell(1);
                        tbval.rows[i].cells[1].innerHTML = data['Countries'][i-1]['TotalConfirmed'];
                        tbval.rows[i].cells[1].style.background = '#4bb7d8';

                        x.insertCell(2);
                        tbval.rows[i].cells[2].innerHTML = data['Countries'][i-1]['TotalRecovered'];
                        tbval.rows[i].cells[2].style.background = '#4bb7d8';

                        x.insertCell(3);
                        tbval.rows[i].cells[3].innerHTML = data['Countries'][i-1]['TotalDeaths'];
                        tbval.rows[i].cells[3].style.background = '#f36e23';

                        x.insertCell(4);
                        tbval.rows[i].cells[4].innerHTML = data['Countries'][i-1]['NewConfirmed'];
                        tbval.rows[i].cells[4].style.background = '#4bb7d8';

                        x.insertCell(5);
                        tbval.rows[i].cells[5].innerHTML = data['Countries'][i-1]['NewRecovered'];
                        tbval.rows[i].cells[5].style.background = '#9cc850';

                        x.insertCell(6);
                        tbval.rows[i].cells[6].innerHTML = data['Countries'][i-1]['NewDeaths'];
                        tbval.rows[i].cells[6].style.background = '#f36e23';
                    }
                }
                
            );
        }
    </script>
</body>
</html>