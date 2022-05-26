<!doctype html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title>Invo</title>

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>
    <link rel="stylesheet" href="<?php echo e(asset('css/tailwind.css')); ?>">
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
        
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
       
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.3.0/mdb.min.css"rel="stylesheet"/>
        <!-- Styles -->
    <link href="<?php echo e(asset('css/app.css')); ?>" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo e(asset('css/custom.css')); ?>">
    <?php echo \Livewire\Livewire::styles(); ?>

</head>
<body>
    <div id="app">
        
        
      <div class="container-fluid" style="background-color: rgb(255, 255, 255)">
        
        <div class="col-">
          <?php echo $__env->make('layouts.includes.navBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
        
        <?php echo $__env->make('layouts.includes.sideBar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        </div>
      
      
      
        <main class="py-4">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    

<!-- Modal -->

         
        
        
  


   
  <style>
    
      .modal.left .modal-dialog{
          position: absolute;
          top: 0;
          left: 0;
          margin: 0;
      }
  
      .modal.left .modal-dialog.modal-sm{
          max-width: 300px;
      }
  
      .modal.left .modal.content{
          min-height: 100vh;
          border: 0;
      }
  
      h4{
          font-family: dinnextltarabic-medium;
          font-size: 20px;
          font-weight: 400;
          text-transform: uppercase;
      }
      h6{
        font-family: dinnextltarabic-medium;
        font-weight: 400;
        font-size: 18px!important;
      }
      h5{
         text-align: center; 
          color: #fff
          
      }
  
      .card-header{
          background: rgb(52, 73, 94);
          
    -moz-box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    color: #fff
      }
  
  
      td{
        font-family: dinnextltarabic-medium;
          font-size: 20px;
          font-weight: 400;
          text-transform: uppercase;
      }
      }
  </style>
  
      </div>
      <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
      integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
      </script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
      integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
      </script>
      <script src="<?php echo e(asset('js/custom_livewire.js')); ?>"></script>
      
      <
  
      <!-- Page level plugins -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>
      
  

      
      <?php echo \Livewire\Livewire::scripts(); ?>

      
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.1/chart.min.js"></script>

    


      <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const myChart = new Chart(ctx, {
            type: 'line',
            
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
        function displayChart(group = 'month') {
            fetch("<?php echo e(route('chart.orders')); ?>?group=" + group)
        .then(response => response.json())
        .then(json => {
            myChart.data.labels = json.labels;
             
            myChart.data.datasets = json.datasets;
            

        myChart.update();
        });

        }


        $('.btn-group .btn').on('click', function(e) {
            e.preventDefault();
            displayChart($(this).data('group'));
        })

        displayChart();
        
        </script>
      
      </body>
      <?php echo $__env->yieldContent('script'); ?>
</html>
<?php /**PATH /Users/hamadotb/Sites/invo/resources/views/layouts/app.blade.php ENDPATH**/ ?>