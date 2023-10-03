<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Horizontal Form</h6>
        <hr />
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">@yield('title') Registration</h5>
                    </div>
                    <hr />
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEnterYourName" name="nama_pegawai" 
                                placeholder="Enter Your Name" value="{{ $user->name ?? '' }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">No Telepon</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPhoneNo2" name="no_telepon"
                                placeholder="Phone No" value="{{ $user->phone ?? '' }}" >
                        </div>
                    </div>
                    
                  
                    <div class="row mb-3">
                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmailAddress2" name="email"
                                placeholder="Email Address" value="{{ $user->email ?? '' }}">
                        </div>
                    </div>
                   
                    
                   
                </div>
            </div>
        </div>
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">@yield('title') Detail</h5>
                    </div>
                    <hr />
                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">NO KTP</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEnterYourName" name="nama_pegawai" 
                                placeholder="Enter Your Name" value="{{ $user->profile->ktp ?? '' }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Tempat Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPhoneNo2" name="no_telepon"
                                placeholder="Phone No" value="{{ $user->profile->birthplace ?? '' }}" >
                        </div>
                    </div>
                    
                  
                    <div class="row mb-3">
                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Tgl Lahir</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmailAddress2" name="email"
                                placeholder="Email Address" value="{{ $user->profile->birthdate ?? '' }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEnterYourName" name="nama_pegawai" 
                                placeholder="Enter Your Name" value="{{ $user->profile->gender ?? '' }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Alamat</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPhoneNo2" name="no_telepon"
                                placeholder="Phone No" value="{{ $user->profile->addres ?? '' }}" >
                        </div>
                    </div>
                    
                  
                    <div class="row mb-3">
                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">Rt</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmailAddress2" name="email"
                                placeholder="Email Address" value="{{ $user->profile->rt ?? '' }}">
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="inputEnterYourName" class="col-sm-3 col-form-label">Rw</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputEnterYourName" name="nama_pegawai" 
                                placeholder="Enter Your Name" value="{{ $user->profile->rw ?? '' }}">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="inputPhoneNo2" class="col-sm-3 col-form-label">Dusun</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="inputPhoneNo2" name="no_telepon"
                                placeholder="Phone No" value="{{ $user->profile->dusun ?? '' }}" >
                        </div>
                    </div>
                    
                  
                    <div class="row mb-3">
                        <label for="inputEmailAddress2" class="col-sm-3 col-form-label">COde Pos</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="inputEmailAddress2" name="email"
                                placeholder="Email Address" value="{{ $user->profile->zip_code ?? '' }}">
                        </div>
                    </div>
                   
                    
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-sm-9">
                            <a href="{{ url('user') }}" class="btn btn-info px-5">Kembali</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
