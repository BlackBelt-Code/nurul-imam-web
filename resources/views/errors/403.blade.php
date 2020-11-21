@extends('master.index') @section('content') {!! $title = 'Note Found' !!}
<style>
    .card {
        margin: 0 auto;
        /* Added */
        float: none;
        /* Added */
        margin-bottom: 10px;
        /* Added */
    }
</style>
<div class="container" style="text-align: center;">
    <div class="content">
        <div class="col-md-12">
            <div class="card mb-3" style="width: 50%; height: 50%;">
                <img src="{{ asset('asset/img/not-found.PNG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <p class="card-text">Maaf, Anda tidak memiliki akses untuk fitur ini.</p>

                    <p><a href="{{ url('app/') }}">Kembali ke halaman awal</a></p>
                </div>
            </div>
            <!-- <div class="card mb-3">
                <img src="{{ asset('asset/img/not-found.PNG') }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                </div>
            </div> -->
        </div>
    </div>
</div>
@endsection