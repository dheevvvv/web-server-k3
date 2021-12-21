@extends('dashboard.layouts.main')

@section('container')

{{--  <div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
    <div class="card-header">Total Accident</div>
    <div class="card-body">
      {{ ($jumlah_accident }}
      <p class="card-text">"test"</p>
    </div>
</div>  --}}
<div class="card text-white bg-danger mb-3" style="max-width: 18rem;">
    <div class="card-header">Total Laporan Masuk</div>
    <div class="card-body">
      <h5 class="card-title">{{ $jumlah_accident }}</h5>
      
    </div>
  </div>
<br>
@foreach ($data_accident as $accident)
<div class="card">
    <div class="card-body">
        
        <h5>{{ $accident['time'] }}</h5> 
        <h6>{{ $accident['location'] }}</h6>  
        <h5>{{ $accident['employee']['name'] }}</h5>
        <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
              Lihat Detail
            </button>
          </p>
          <div>
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
              <div class="card card-body" style="width: 300px;">
                <h6>Gender : {{ $accident['employee']['gender'] }}</h6>
                <h6>Job : {{ $accident['employee']['job'] }}</h6>
                <h6>Position : {{ $accident['employee']['position'] }}</h6>
                <h6>Telp : {{ $accident['employee']['telp'] }}</h6>
                <h6>Email : {{ $accident['employee']['email'] }}</h6>
                <h6>Manager id : {{ $accident['employee']['manager_id'] }}</h6>
                <h6>Salary id : {{ $accident['employee']['salary_id'] }}</h6>
                

                {{--  <br>
                <h6>Accident Victim Employee:</h6>
                <h6>Accident id : {{ $accident['accident_victim_employee']['accident_id'] }}</h6>
                <h6>Employee id : {{ $accident['accident_victim_employee']['employee_id'] }}</h6>
                <br>
                <h6>Accident Victim Non-Employee:</h6>
                <h6>Accident id : {{ $accident['accident_victim_non_employee']['accident_id'] }}</h6>
                <h6>Nama : {{ $accident['accident_victim_non_employee']['name'] }}</h6>
                <h6>Birth : {{ $accident['accident_victim_non_employee']['birth'] }}</h6>
                <h6>Gender : {{ $accident['accident_victim_non_employee']['gender'] }}</h6>
                <h6>Address : {{ $accident['accident_victim_non_employee']['address'] }}</h6>
                <h6>Job : {{ $accident['accident_victim_non_employee']['job'] }}</h6>
                <br>
                <h6>Accident Witness Employee :</h6>
                <h6>Employee id : {{ $accident['accident_witness_employee']['employee_id'] }}</h6>
                <br>
                <h6>Accident Witness Non-Employee :</h6>
                <h6>Nama : {{ $accident['accident_witness_non_employee']['name'] }}</h6>
                <h6>Birth : {{ $accident['accident_witness_non_employee']['birth'] }}</h6>
                <h6>NIK : {{ $accident['accident_witness_non_employee']['nik'] }}</h6>
                <h6>Gender : {{ $accident['accident_witness_non_employee']['gender'] }}</h6>
                <h6>Address : {{ $accident['accident_witness_non_employee']['address'] }}</h6>
                <h6>Job : {{ $accident['accident_witness_non_employee']['job'] }}</h6>
                <h6>Phone : {{ $accident['accident_witness_non_employee']['phone'] }}</h6>  --}}

              </div>
            </div>
          </div>

        {{--  <a href="{{ route('accident.show', $accident['id']) }}" class="btn btn-primary">Lihat</a>  --}}
        
      
    </div>
</div> 
@endforeach

    
@endsection