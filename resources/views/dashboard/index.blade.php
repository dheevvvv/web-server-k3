@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Selamat Datang Kembali! , {{ auth()->user()->name }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
      <div class="btn-group me-2">
        <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
        <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
      </div>
      <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
        <span data-feather="calendar"></span>
        This week
      </button>
    </div>
  </div>

  <div class="row">

    <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
      <div class="card-header">Total Kasus Accident</div>
      <div class="card-body">
        <h5 class="card-title">{{ $jumlah_accident }}</h5>
      </div>
    </div>
    <div class="card text-dark bg-light mb-3" style="max-width: 18rem;">
      <div class="card-header">Total Kasus Disease</div>
      <div class="card-body">
        <h5 class="card-title">{{ $jumlah_diseases }}</h5>
      </div>
    </div>

    <div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
      <div class="card-header">Total Kasus B3s</div>
      <div class="card-body">
        <h5 class="card-title">{{ $jumlah_b3 }}</h5>
      </div>
    </div>
  </div>

  <br>
  <br>

  <div class="panel">
    <div id="chartdashboard"></div>

  </div>

  <script>
    Highcharts.chart('chartdashboard', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'Pelaporan Bulanan Incident'
        },
        xAxis: {
            categories: [
                'Jan',
                'Feb',
                'Mar',
                'Apr',
                'May',
                'Jun',
                'Jul',
                'Aug',
                'Sep',
                'Oct',
                'Nov',
                'Dec'
            ],
            crosshair: true
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Jumlah Kasus'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} kasus</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0
            }
        },
        series: [{
            name: 'Accident',
            data: [49.9, 71.5, 106.4, 129.2, 144.0, 176.0, 135.6, 148.5, 216.4, 194.1, 95.6, 54.4]
    
        }, {
            name: 'Disease',
            data: [83.6, 78.8, 98.5, 93.4, 106.0, 84.5, 105.0, 104.3, 91.2, 83.5, 106.6, 92.3]
    
        }, {
            name: 'B3s',
            data: [48.9, 38.8, 39.3, 41.4, 47.0, 48.3, 59.0, 59.6, 52.4, 65.2, 59.3, 51.2]
    
        }]
  });
  </script>

  <h2>Semester Gasal-Genap 2021/2022</h2>
  <div class="table-responsive">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#Jumlah Kasus</th>
          <th scope="col">Accidents</th>
          <th scope="col">Diseases</th>
          <th scope="col">B3s</th>
          
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>January</td>
          <td>120</td>
          <td>115</td>
          <td>130</td>
          
        </tr>
        <tr>
          <td>February</td>
          <td>140</td>
          <td>135</td>
          <td>150</td>
        </tr>
        <tr>
          <td>March</td>
          <td>160</td>
          <td>150</td>
          <td>160</td>
        </tr>
        <tr>
          <td>April</td>
          <td>170</td>
          <td>166</td>
          <td>138</td>
        </tr>
        <tr>
          <td>Mei</td>
          <td>120</td>
          <td>115</td>
          <td>130</td>
        </tr>
        <tr>
          <td>June</td>
          <td>220</td>
          <td>215</td>
          <td>230</td>
        </tr>
        <tr>
          <td>July</td>
          <td>130</td>
          <td>145</td>
          <td>150</td>
        </tr>
        <tr>
          <td>August</td>
          <td>160</td>
          <td>145</td>
          <td>190</td>
        </tr>
        <tr>
          <td>September</td>
          <td>199</td>
          <td>168</td>
          <td>129</td>
        </tr>
        <tr>
          <td>October</td>
          <td>120</td>
          <td>115</td>
          <td>130</td>
        </tr>
        <tr>
          <td>November</td>
          <td>40</td>
          <td>465</td>
          <td>330</td>
        </tr>
        <tr>
          <td>December</td>
          <td>490</td>
          <td>280</td>
          <td>330</td>
        </tr>
        
      </tbody>
    </table>
  </div>
    
@endsection