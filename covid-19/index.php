<?php include "code.php" ?>
<?php include "link.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>covid-19 live </title>
</head>
<body onload="fetch()"> 
   <div class="container">
      <div class="covid_header py-3">
         <h3 class="text-center">
            Update covid-19 scrore 
         </h3>
      </div>
      <!-- table start -->
         <div class="table-responsive">
            <table class="table table-bordered  table-striped hover text-center" id="tableval"> 
               <tr class="table-primary">
                  <th>Country</th>
                  <th>TotalConfirmed</th>
                  <th>NewRecovered</th>
                  <th>TotalDeaths</th>
                  <th>TotalRecovered</th>
                  <th>NewDeaths</th>
               </tr>
            </table>
         </div>
      <!-- table end -->
   </div>
   <script>
      function fetch(){
         $.get("https://api.covid19api.com/summary",
            function(data){
               var tableval=document.getElementById('tableval');
               // console.log((data['Countries'].length));
               for(i=1; i<(data['Countries'].length); i++){
                  var x=tableval.insertRow();
                  // table insertRow and table row is one but two name
                  x.insertCell(0);
                  // table cel and table call is one but two name
                  tableval.rows[i].cells[0].innerHTML=data['Countries'][i-1]['Country'];
                  tableval.rows[i].cells[0].style.background='#4ED600';
                  tableval.rows[i].cells[0].style.textAlign="left";
                  x.insertCell(1);
                  tableval.rows[i].cells[1].innerHTML=data['Countries'][i-1]['TotalConfirmed'];
                  tableval.rows[i].cells[1].style.background='#65F18B';
                  tableval.rows[i].cells[1].style.color='#000';
                  x.insertCell(2);
                  tableval.rows[i].cells[2].innerHTML=data['Countries'][i-1]['NewRecovered'];
                  tableval.rows[i].cells[2].style.background='#0CD2BA';
                  tableval.rows[i].cells[2].style.color='#000';
                  x.insertCell(3);
                  tableval.rows[i].cells[3].innerHTML=data['Countries'][i-1]['TotalDeaths'];
                  tableval.rows[i].cells[3].style.background='#C65CF7';
                  tableval.rows[i].cells[3].style.color='#000';
                  x.insertCell(4);
                  tableval.rows[i].cells[4].innerHTML=data['Countries'][i-1]['TotalRecovered'];
                  tableval.rows[i].cells[4].style.background='#EE1EA8';
                  tableval.rows[i].cells[4].style.color='#000';
                  x.insertCell(5);
                  tableval.rows[i].cells[5].innerHTML=data['Countries'][i-1]['NewDeaths'];
                  tableval.rows[i].cells[5].style.background='#EE1E24';
                  tableval.rows[i].cells[5].style.color='#000';
               }
            }
         );
      }
   </script>
   <!-- jquery cdn link -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>