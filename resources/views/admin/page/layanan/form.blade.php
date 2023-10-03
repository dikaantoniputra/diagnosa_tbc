
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif


<div class="row">
    <div class="col-xl-12 mx-auto">
        <h6 class="mb-0 text-uppercase">Form Layanan</h6>
        <hr/>
        <div class="card border-top border-0 border-4 border-info">
            <div class="card-body">
                <div class="border p-4 rounded">
                    <div class="card-title d-flex align-items-center">
                        <div><i class="bx bxs-user me-1 font-22 text-info"></i>
                        </div>
                        <h5 class="mb-0 text-info">@yield('title') </h5>
                        
                    </div>
                    <hr/>

                    <div class="row mb-3">
                        @if (!empty($layanan))
                        <img src="{{ asset($layanan->gambar) }}" class="img-preview img-fluid col-sm-5" width="100" />
                        @else
                        <img class="img-preview img-fluid col-sm-5">
                        @endif
                    </div>


                    <div class="row mb-3">
                        <div class="col-xl-12 mx-auto">
                            <h6 class="mb-0 text-uppercase">Foto Layanan</h6>
                            <hr/>
                            <div class="card">
                                <div class="card-body">
                                   
                                        <input id="image-uploadify" type="file" name="gambar" accept=".xlsx,.xls,image/*,.doc,audio/*,.docx,video/*,.ppt,.pptx,.txt,.pdf" multiple>
                                        
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    

                    <div class="row mb-3">
                        <h6 class="mb-4">Nama Layanan</h6>
                                <input id="text" class="form form-control" name="nama_layanan" value="{{ $layanan->nama_layanan ?? '' }}"/>
                        </div>

                    <div class="row mb-3">
                    <h6 class="mb-4">Deskripsi Layanan</h6>
							<textarea id="mytextarea" name="deskrispi">{{ $layanan->deskrispi ?? '' }}</textarea>
                    </div>

                    <div class="row mb-3">
                        <h6 class="mb-4">Harga Layanan</h6>
                                <input id="number" class="form form-control" name="harga" value="{{ $layanan->harga ?? '' }}" />
                        </div>

                        <div class="row mb-3">
                            <h6 class="mb-4">Harga Pengiriman</h6>
                                    <input id="number" class="form form-control" name="harga_deivery" value="{{ $layanan->harga_deivery ?? '' }}" />
                            </div>

                   
                    
                                                   
                    <div class="row">
                        <label class="col-sm-3 col-form-label"></label>
                        <div class="col-xl-12">
                            <button type="submit" class="btn btn-info px-5">TAMBAH</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>