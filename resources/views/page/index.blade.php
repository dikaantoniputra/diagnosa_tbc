@extends('layout.master')

@section('content')
@if (auth()->user()->role == 'admin')  
<div class="card radius-10">
    <div class="card-content">
        <div class="row row-group row-cols-1 row-cols-xl-4 ">
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Pelajaran</p>
                            <h4 class="mb-0 text-primary">{{ $pelajaran ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-primary"></i>
                            {{-- bx bx-cart --}}
                         
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
                    </div>        
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Siswa</p>
                            <h4 class="mb-0 text-danger">{{ $siswa ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-group font-35 text-danger"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Tentor</p>
                            <h4 class="mb-0 text-success">{{ $tentor ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-group font-35 text-success"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Jadwal</p>
                            <h4 class="mb-0 text-warning">{{ $jadwal ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>

            <div class="col pt-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Kelase</p>
                            <h4 class="mb-0 text-warning">{{ $kelase ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>
            <div class="col pt-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Transaksi</p>
                            <h4 class="mb-0 text-warning">{{ $transaksi ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>

            <div class="col pt-2">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Pendapatan</p>
                            <h4 class="mb-0 text-warning">{{ $totalJumlah ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-warning"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 65%"></div>
                    </div>
                   
                </div>
            </div>
            
        </div>
        
    </div>
</div>
@endif

@if (auth()->user()->role == 'tentor')  
<div class="card radius-10">
    <div class="card-content">
        <div class="row row-group row-cols-1 row-cols-xl-4 ">
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Mengajar Pelajaran</p>
                            <h4 class="mb-0 text-primary">{{ $pelajaranCount ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-primary"></i>
                            {{-- bx bx-cart --}}
                         
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
                    </div>        
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Jadwal</p>
                            <h4 class="mb-0 text-danger">{{ $jadwal ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-group font-35 text-danger"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 65%"></div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Materi</p>
                            <h4 class="mb-0 text-success">{{ $materi ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-group font-35 text-success"></i>
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 65%"></div>
                    </div>
                </div>
            </div>

          
        </div>
        
    </div>
</div>
@endif

@if (auth()->user()->role == 'siswa')  
<div class="card radius-10">
    <div class="card-content">
        <div class="row row-group row-cols-1 row-cols-xl-4 ">
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Pelajaran Yang Di Beli</p>
                            <h4 class="mb-0 text-primary">{{ $pelajaranCount ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-primary"></i>
                            {{-- bx bx-cart --}}
                         
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
                    </div>        
                </div>
            </div>
            <div class="col">
                <div class="card-body">
                    <div class="d-flex align-items-center">
                        <div>
                            <p class="mb-0">Total Pelajaran Yang Belum Di Beli</p>
                            <h4 class="mb-0 text-primary">{{ $pelajaran ?? '' }}</h4>
                        </div>
                        <div class="ms-auto"><i class="bx bx-wallet font-35 text-primary"></i>
                            {{-- bx bx-cart --}}
                         
                        </div>
                    </div>
                    <div class="progress radius-10 my-2" style="height:4px;">
                        <div class="progress-bar bg-primary" role="progressbar" style="width: 65%"></div>
                    </div>        
                </div>
            </div>
           
          
          
        </div>
        
    </div>
</div>
@endif

@endsection