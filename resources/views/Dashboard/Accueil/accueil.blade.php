@extends('Dashboard.layouts.admin')

@section('content')
<div class="content">

    <div class="col-md-12 ">
        <div style="display: flex;gap: 10px; height: 500px; width: 1125px; ">


                <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                    <div class="flex justify-between">
                        <div>
                            <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">60.0K</h5>
                            <p class="text-base font-normal text-gray-500 dark:text-gray-400">Initiatives sociales</p>
                        </div>
                    </div>
                    <div id="area-chart"></div>
                    <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between items-center pt-5 ">
                    </div>
                </div>

<div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6 ">
  <div class="flex justify-between mb-5 ">
    <div class="grid gap-4 grid-cols-2">
      <div>
        <h5 class="inline-flex items-center text-gray-500 dark:text-gray-400 leading-none font-normal mb-2">Jeunes Formés

        </h5>
        <p class="text-gray-900 dark:text-white text-2xl leading-none font-bold">42,3k</p>
      </div>
      <div>
        <h5 class="inline-flex items-center text-gray-500 dark:text-gray-400 leading-none font-normal mb-2">Bénéficiaires</h5>
        <p class="text-gray-900 dark:text-white text-2xl leading-none font-bold">70,3k</p>
      </div>
    </div>

  </div>
  <div id="line-chart"></div>
  <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between mt-2.5">
    <div class="flex justify-between items-center pt-5">
      
  </div>
  </div>
</div>
              <div class="max-w-sm w-full bg-white rounded-lg shadow dark:bg-gray-800 p-4 md:p-6">
                <div class="flex justify-between">
                    <div>
                        <h5 class="leading-none text-3xl font-bold text-gray-900 dark:text-white pb-2">20.0k</h5>
                        <p class="text-base font-normal text-gray-500 dark:text-gray-400">Projets Réalisés</p>
                    </div>

                </div>
                <div id="area-chart2"></div>
                <div class="grid grid-cols-1 items-center border-gray-200 border-t dark:border-gray-700 justify-between items-center pt-5">
                    <div class="flex justify-between items-center pt-5">
                        
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div> 
    <br/>
    <div class="card" style="padding: 20px; border-radius: 8px; box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);">
    <h3 class="text-center mb-4">Update Numbers</h3>
    <div style="display: flex; gap: 20px; flex-wrap: wrap; justify-content: space-between;">
        
        <!-- Bénéficiaires Form -->
        <form action="{{ route('update.number') }}" method="POST" class="mb-3" style="flex: 1 1 200px; border: 1px solid #ccc; border-radius: 8px; padding: 15px;">
            @csrf
            <div class="input-group mb-3">
                <label for="beneficiaires" class="input-group-text">Bénéficiaires</label>
                <input type="hidden" name="type" value="num_beneficiaire">
                <input type="number" class="form-control" name="number" placeholder="Entrer le nombre" value="{{ $data['beneficiaires'] }}" required>
                <button type="submit" class="btn btn-secondary">Update</button>
            </div>
            <small class="text-muted">Current value: {{ $data['beneficiaires'] }}</small>
        </form>
        
        <!-- Jeunes Formés Form -->
        <form action="{{ route('update.number') }}" method="POST" class="mb-3" style="flex: 1 1 200px; border: 1px solid #ccc; border-radius: 8px; padding: 15px;">
            @csrf
            <div class="input-group mb-3">
                <label for="jeunes_formes" class="input-group-text">Jeunes Formés</label>
                <input type="hidden" name="type" value="num_jeunes">
                <input type="number" class="form-control" name="number" placeholder="Entrer le nombre" value="{{ $data['jeunes_formes'] }}" required>
                <button type="submit" class="btn btn-secondary">Update</button>
            </div>
            <small class="text-muted">Current value: {{ $data['jeunes_formes'] }}</small>
        </form>

        <!-- Projets Réalisés Form -->
        <form action="{{ route('update.number') }}" method="POST" class="mb-3" style="flex: 1 1 200px; border: 1px solid #ccc; border-radius: 8px; padding: 15px;">
            @csrf
            <div class="input-group mb-3">
                <label for="projets_realises" class="input-group-text">Projets Réalisés</label>
                <input type="hidden" name="type" value="num_projets">
                <input type="number" class="form-control" name="number" placeholder="Entrer le nombre" value="{{ $data['projets_realises'] }}" required>
                <button type="submit" class="btn btn-secondary">Update</button>
            </div>
            <small class="text-muted">Current value: {{ $data['projets_realises'] }}</small>
        </form>

        <!-- Initiatives Sociales Form -->
        <form action="{{ route('update.number') }}" method="POST" class="mb-3" style="flex: 1 1 200px; border: 1px solid #ccc; border-radius: 8px; padding: 15px;">
            @csrf
            <div class="input-group mb-3">
                <label for="initiatives_sociales" class="input-group-text">Initiatives Sociales</label>
                <input type="hidden" name="type" value="num_initiatives">
                <input type="number" class="form-control" name="number" placeholder="Entrer le nombre" value="{{ $data['initiatives_sociales'] }}" required>
                <button type="submit" class="btn btn-secondary">Update</button>
            </div>
            <small class="text-muted">Current value: {{ $data['initiatives_sociales'] }}</small>
        </form>

    </div>
</div>

</div>

<script src="../charts/js/flowbite.min.js"></script>
@endsection
@section('scripts')
<script>

  //chart2
const options1 = {
  chart: {
    height: "50%",
    maxWidth: "50%",
    type: "line",
    fontFamily: "Inter, sans-serif",
    dropShadow: {
      enabled: false,
    },
    toolbar: {
      show: false,
    },
  },
  tooltip: {
    enabled: true,
    x: {
      show: false,
    },
  },
  dataLabels: {
    enabled: false,
  },
  stroke: {
    width: 6,
  },
  grid: {
    show: true,
    strokeDashArray: 4,
    padding: {
      left: 2,
      right: 2,
      top: -26
    },
  },
  series: [
    {
      name: "Jeunes Formés",
      data: @json($jeunesFormes),
      color: "#1A56DB",
    },
    {
      name: "Bénéficiaires",
      data: @json($beneficiaires),
      color: "#7E3AF2",
    },
  ],
  legend: {
    show: false
  },
  stroke: {
    curve: 'smooth'
  },
  xaxis: {
    categories: ['5','6','7'],
    labels: {
      show: true,
      style: {
        fontFamily: "Inter, sans-serif",
        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
      }
    },
    axisBorder: {
      show: false,
    },
    axisTicks: {
      show: false,
    },
  },
  yaxis: {
    show: false,
  },
}

if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
  const chart = new ApexCharts(document.getElementById("line-chart"), options1);
  chart.render();
}

  // Your existing script for the chart
  const options = {
      chart: {
          height: "50%",
          maxWidth: "50%",
          type: "area",
          fontFamily: "Inter, sans-serif",
          dropShadow: {
              enabled: false,
          },
          toolbar: {
              show: false,
          },
      },
      tooltip: {
          enabled: true,
          x: {
              show: false,
          },
      },
      fill: {
          type: "gradient",
          gradient: {
              opacityFrom: 0.55,
              opacityTo: 0,
              shade: "#1C64F2",
              gradientToColors: ["#1C64F2"],
          },
      },
      dataLabels: {
          enabled: false,
      },
      stroke: {
          width: 6,
      },
      grid: {
          show: false,
          strokeDashArray: 4,
          padding: {
              left: 2,
              right: 2,
              top: 0
          },
      },
      series: [
          {
              name: "Initiatives sociales",
              data: ['5','6','7'],
              color: "#336600",
          },
      ],
      xaxis: {
          categories: ['5','6','7'],
          labels: {
            show: true,
            style: {
                fontFamily: "Inter, sans-serif",
                cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
            }
        },
          axisBorder: {
              show: false,
          },
          axisTicks: {
              show: false,
          },
      },
      yaxis: {
          show: false,
      },
  }

  if (document.getElementById("area-chart") && typeof ApexCharts !== 'undefined') {
      const chart = new ApexCharts(document.getElementById("area-chart"), options);
      chart.render();
  }

    //chart 2
    const options2 = {
        chart: {
            height: "50%",
            maxWidth: "50%",
            type: "area",
            fontFamily: "Inter, sans-serif",
            dropShadow: {
                enabled: false,
            },
            toolbar: {
                show: false,
            },
        },
        tooltip: {
            enabled: true,
            x: {
                show: false,
            },
        },
        fill: {
            type: "gradient",
            gradient: {
                opacityFrom: 0.55,
                opacityTo: 0,
                shade: "#1C64F2",
                gradientToColors: ["#1C64F2"],
            },
        },
        dataLabels: {
            enabled: false,
        },
        stroke: {
            width: 6,
        },
        grid: {
            show: false,
            strokeDashArray: 4,
            padding: {
                left: 2,
                right: 2,
                top: 0
            },
        },
        series: [
            {
                name: "Projets Réalisés",
                data: ['5','6','7'],
                color: "#66ff66",
            },
        ],
        xaxis: {
            categories: ['5','6','7'],
            labels: {
                show: true,
                style: {
                    fontFamily: "Inter, sans-serif",
                    cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                }
            },
            axisBorder: {
                show: false,
            },
            axisTicks: {
                show: false,
            },
        },
        yaxis: {
            show: false,
        },
    }

    if (document.getElementById("area-chart2") && typeof ApexCharts !== 'undefined') {
        const chart = new ApexCharts(document.getElementById("area-chart2"), options2);
        chart.render();
    }
</script>
<style>
    .input-group-text {
        background-color: #f8f9fa;
        font-weight: bold;
    }
    
    .btn-secondary {
        background-color: #6c757d;
        border-color: #6c757d;
    }

    .btn-secondary:hover {
        background-color: #5a6268;
        border-color: #545b62;
    }
</style>

@endsection
