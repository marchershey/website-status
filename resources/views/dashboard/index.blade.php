@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            @include('layouts.alerts')
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <p class="text-center">
                        You are not monitoring any sites. <a href="#" data-toggle="modal" data-target="#exampleModal">Add some.</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('modals')
@include('modals.add-site')
@endpush

@push('js')
<script>
    Echo.channel('home').listen('NewMessage', (e) => {console.log(e.message)})
</script>
@endpush