<?php
/**
 * Created by IntelliJ IDEA.
 * User: amepi
 * Date: 04/06/2018
 * Time: 21:52
 */
?>



<canvas id="myChart"></canvas>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.min.js"></script>

<script> var ctx = document.getElementById('myChart').getContext('2d');
var val = <?php echo json_encode($value); ?>;
var dat = <?php echo json_encode($date); ?>;

var chart = new Chart(ctx, {
// The type of chart we want to create
type: 'line',

// The data for our dataset
data: {
labels: dat,
datasets: [{
label: "My First dataset",
backgroundColor: 'rgb(255, 99, 132)',
borderColor: 'rgb(255, 99, 132)',
data: val,



}]
},

// Configuration options go here
options: {}
});
</script>
