@extends('layouts.main')
@section('contenido')

@if ( $datos )

<div class="container">
  <div class="row row-cols-2">
      <div class="col">
          
<div class="card" >
  <h5 class="card-header">Provicias de La Paz</h5>
  <div class="card-body">
    <h5 class="card-title">Cantidad de lesmiansis</h5>
    <table id="example" class="table table-striped" style="width:100%">
      <thead>
          <tr>
              <th>Codigo</th>
              <th>Servicio</th>
              
              
          </tr>
      </thead>
      <tbody>
          
          @foreach ($datos as $item)
          <tr>
              <th>   
              {{ $item ? $item->provicia : ""}}
              </th>
              <th>   
              {{ $item ? $item->cantidad : ""}}
              </th>
          @endforeach
      </tr>
      </tbody>
  
</table>


  </div>
</div>



      </div>
      
      
      <div class="col">
        <div class="card " >
          <h5 class="card-header">Provicias de La Paz</h5>
          <div class="card-body">
            <h5 class="card-title">Cantidad de lesmiansis</h5>
        
        <canvas id="pie-chart"></canvas>
      
      <script src="{{ asset('js/chart.js') }}"></script>
        
         <script>
        //get the pie chart canvas
        
        var cData = JSON.parse(`<?php echo $datos; ?>`);
        console.log(cData);
        var ctx = document.getElementById("pie-chart");
        ctx.height = 300;
        var label = [];
        var ddatos = [];

        cData.forEach(element => {
          label.push(element['provicia'])
          ddatos.push(element['cantidad'])
        });


        //pie chart data
        var data = {
          labels: label,
          datasets: [
            {
              label: "nuevo",
              data: ddatos,
              backgroundColor: [
                "#DEB887",
                "#A9A9A9",
                "#DC143C",
                "#F4A460",
                "#2E8B57",
                "#1D7A46",
                "#CDA776",
                "#DC2444C",
                "#25143C",
              ],
              borderColor: [
                "#CDA776",
                "#989898",
                "#CB252B",
                "#E39371",
                "#1D7A46",
                "#F4A460",
                "#CDA776",
              ],
              borderWidth: [1, 1, 1, 1, 1,1,1]
            }
          ]
        };
   
        //options
        var options = {
          responsive: true,
          title: {
            display: true,
            position: "center",
            fontSize: 20,
            fontColor: "#111"
          },
          legend: {
            display: true,
            position: "center",
            labels: {
              fontColor: "#333",
              fontSize: 16
            }
          }
        };
   
        //create Pie Chart class object
        var chart1 = new Chart(ctx, {
          type: "bar",
          data: data,
          options: options
        });
   
  </script>
          
      
    </div>
  </div>
    


      </div>
      <div class="col">
        <div class="card" >
          <h5 class="card-header">Pacientes</h5>
          <div class="card-body">
            <h5 class="card-title">Tratamiento terminados</h5>
            <table id="example" class="table table-striped" style="width:100%">
              <thead>
                  <tr>
                      <th>Tratamiento Terminado</th>
                      <th>Cantida</th>
                      
                      
                  </tr>
              </thead>
              <tbody>
                  
                  @foreach ($cons2 as $item)
                  <tr>
                      <th>   
                      {{ $item ? $item->tratamiento_terminado : ""}}
                      </th>
                      <th>   
                      {{ $item ? $item->cantidad : ""}}
                      </th>
                  @endforeach
              </tr>
              </tbody>
          
        </table>
        
        
          </div>
        </div>
        


      </div>
      <div class="col">
        <canvas id="torta-chart"></canvas>
        <script>
          //get the pie chart canvas
          
          var cData = JSON.parse(`<?php echo $cons2; ?>`);
          console.log(cData);
          var ctx = document.getElementById("torta-chart");
          ctx.height = 300;
          var label = [];
          var ddatos = [];
  
          cData.forEach(element => {
            label.push(element['tratamiento_terminado'])
            ddatos.push(element['cantidad'])
          });
  
  
          //pie chart data
          var data = {
            labels: label,
            datasets: [
              {
                label: "nuevo",
                data: ddatos,
                backgroundColor: [
                  "#DEB887",
                  "#A9A9A9",
                  "#DC143C",
                  "#F4A460",
                  "#2E8B57",
                  "#1D7A46",
                  "#CDA776",
                  "#DC2444C",
                  "#25143C",
                ],
                borderColor: [
                  "#CDA776",
                  "#989898",
                  "#CB252B",
                  "#E39371",
                  "#1D7A46",
                  "#F4A460",
                  "#CDA776",
                ],
                borderWidth: [1, 1, 1, 1, 1,1,1]
              }
            ]
          };
     
          //options
          var options = {
            responsive: true,
            title: {
              display: true,
              position: "center",
              fontSize: 20,
              fontColor: "#111"
            },
            legend: {
              display: true,
              position: "center",
              labels: {
                fontColor: "#333",
                fontSize: 16
              }
            }
          };
     
          //create Pie Chart class object
          var chart1 = new Chart(ctx, {
            type: "pie",
            data: data,
            options: options
          });
     
    </script>  
        
        
      
      </div>
  </div>
</div>

   
@endif

@endsection



