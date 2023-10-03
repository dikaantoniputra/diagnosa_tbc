@extends('admin.layout.master')

@section('title')
User
@endsection

@push('after-style')

@endpush

@section('content')
<div class="row row-deck row-cards">
    <div class="col-md-12 col-lg-12">
        <div class="card">
            <div class="card-body">
                    @include('admin.page.user.form')
              
            </div>
        </div>
    </div>
</div>
@endsection

@push('after-script')

        
@endpush

