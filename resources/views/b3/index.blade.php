@extends('dashboard.layouts.main')

@section('container')

<div class="card text-dark bg-warning mb-3" style="max-width: 18rem;">
    <div class="card-header">Total Laporan Masuk</div>
    <div class="card-body">
      <h5 class="card-title">{{ $jumlah_b3 }}</h5>
    </div>
  </div>

@foreach ($data_b3 as $b3)
<div class="card">
    <div class="card-body">
        
        
        
        <h6>{{ $b3['location'] }}</h6>  
        <h6>{{ $b3['datetime'] }}</h6>
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
              Lihat Detail
            </button>
          </p>
          <div>
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
              <div class="card card-body" style="width: 800px;">
                <h6>Employee id : {{ $b3['employee_id'] }}</h6>
                <h6>Kronologi : {{ $b3['chronology'] }}</h6>
                <br>
                <h6>Action :</h6>
                <h6>B3s id : {{ $b3['action']['b3s_id'] }}</h6>
                <h6>Supervisor Room : {{ $b3['action']['supervisor_room'] }}</h6>
                <h6>Supervisor Sanitasi : {{ $b3['action']['supervisor_sanitasi'] }}</h6>
                <h6>Eliminate : {{ $b3['action']['eliminate'] }}</h6>
                <h6>Glove : {{ $b3['action']['glove'] }}</h6>
                <h6>Waste : {{ $b3['action']['waste'] }}</h6>
                <br>
                <h6>Detail</h6>
                <h6>Human : {{ $b3['detail']['human'] }}</h6>
                <h6>Wash : {{ $b3['detail']['wash'] }}</h6>
                <h6>Injury : {{ $b3['detail']['injury'] }}</h6>
                <h6>Tool : {{ $b3['detail']['tool'] }}</h6>
                <h6>Effect : {{ $b3['detail']['effect'] }}</h6>
                <h6>Follow Up : {{ $b3['detail']['follow_up'] }}</h6>

                

            

              </div>
            </div>
          </div>

        
      
    </div>
</div> 
@endforeach

    
@endsection