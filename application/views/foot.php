<script type="text/javascript" src="<?php echo base_url('aset/js/jquery-2.2.4.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('aset/js/bootstrap.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('aset/js/bootstrap.bundle.min.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('aset/js/Chart.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('aset/js/jquery.pjax.js')?>"></script>
<script type="text/javascript" src="<?php echo base_url('sett/js/dataTables.bootstrap4.min.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('tes/FA/js/all.js');?>"></script>
<script type="text/javascript" src="<?php echo base_url('sett/js/scripts.js');?>"></script>

<script>
 var direction = "right";
   $(document).ready(function(){
  $(document).pjax('a', '#main');
   $(document).on('pjax:start', function() {
    $(this).addClass('loading')
  });
   $(document).on('pjax:end', function() {
    $(this).removeClass('loading')
  });
   });
</script>
<script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "July", "Agustus", "September", "Oktober", "November" ,"Desember"],
          datasets: [{
            data: [11222, 29574, 30352, 20858, 83522, 50023, 12300, 30123, 90922, 32751, 61241, 41741],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });

    </script>
</body>
</html>
</body>
</html>