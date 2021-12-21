@extends('dashboard.layouts.main')

@section('container')

@if(session()->has('pesanberhasilupdate'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{ session('pesanberhasilupdate') }}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
@endif
<div class="row" style="margin-top: 50px">
    <div class="col md-6">
        <div class="card">
            <div class="card-body">
                <h6><span data-feather="user"></span>
                    Edit Profile
                  
                </h6>
            </div>
            <div class="card-body">
                <form action="{{ route('profile.edit') }}" method="POST">
                    @csrf
                    <div class="form-row">
                        <div class="col-lg-7">
                          <h6>Username</h6><input type="text" name="name" placeholder="{{ $user->name }}" class="form-control my-3 p-2 @error('name') is-invalid @enderror"   value="{{ old('name') }}">
                          @error('name')
                              <div class="invalid-feedback">
                                  {{ $message }}
    
                              </div>
                          @enderror
                        </div>
        
                    </div>
                    
                    <div class="form-row">
                        <div class="col-lg-7">
                            <h6>Email</h6><input type="email" name="email" placeholder="{{ $user->email }}" class="form-control my-3 p-2 @error('email') is-invalid @enderror"   value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
    
                                </div>
                            @enderror
                        </div>
    
                    </div>
                    <div class="form-row">
                        <div class="col-lg-7">
                            <h6>Passwword</h6><input type="password" name="password" placeholder="{{ '*********' }}" class="form-control my-3 p-2  @error('password') is-invalid @enderror"   value="{{ old('password') }}">
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
    
                                </div>
                            @enderror
                        </div>
                    </div>
    
                    <div class="form-row">
                        <div class="col-lg-7">
                            <button type="submit" class="btn btn-primary">Edit dan Simpan</button>
                        </div>
                    </div>
                    
                      
    
                </form>

            </div>

        </div>

    </div>

</div>
    
@endsection