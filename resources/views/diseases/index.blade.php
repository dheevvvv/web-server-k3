@extends('dashboard.layouts.main')

@section('container')

<div class="card text-dark bg-white mb-3" style="max-width: 18rem;">
    <div class="card-header">Total Laporan Masuk</div>
    <div class="card-body">
      <h5 class="card-title">{{ $jumlah_diseases }}</h5>
    </div>
</div>
<br>
@foreach ($data_diseases as $disease)
<div class="col md-4">
    <div class="card">
        <div class="card-body">
            
            
            <h5>{{ $disease['employee']['name'] }}</h5> 
            <h6>{{ $disease['location'] }}</h6>  
            <h6>{{ $disease['time'] }}</h6> 
            <p>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
                  Lihat Detail
                </button>
              </p>
              <div>
                <div class="collapse collapse-horizontal" id="collapseWidthExample">
                  <div class="card card-body" style="width: 800px;">
                    <h6>Employee id : {{ $disease['employee_id'] }}</h6>
                    <br>
                    <h6>Employee :</h6>
                    <h6>Manager id : {{ $disease['employee']['manager_id'] }}</h6>
                    <h6>Salary id : {{ $disease['employee']['salary_id'] }}</h6>
                    <h6>Email : {{ $disease['employee']['email'] }}</h6>
                    <h6>Address : {{ $disease['employee']['address'] }}</h6>
                    <h6>Birth : {{ $disease['employee']['birth'] }}</h6>
                    <h6>Gender : {{ $disease['employee']['gender'] }}</h6>
                    <h6>Job : {{ $disease['employee']['job'] }}</h6>
                    <h6>Position : {{ $disease['employee']['position'] }}</h6>
                    <h6>Telp : {{ $disease['employee']['telp'] }}</h6>
                    
                    
    
                    
    
                
    
                  </div>
                </div>
              </div>
        
        </div>
    </div> 
</div>
@endforeach

@endsection