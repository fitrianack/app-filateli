@extends('layouts/main')

@section('title', 'Kategori Lari')

@section ('container')

<section class="content-section bg-light" id="about">
    <div class="container">
        <h2 style="text-align: center; font-size:50px">Kategori Lari</h2>
        <br>
        <br>
        <div class="form-row align-items-justify">
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size:25px">Lari 5 KM</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <button type="button" class="btn btn-primary center">5 KM</button>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title" style="text-align: center; font-size:25px">Lari 10 KM</h5>
                        <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                        <button href="#" class="btn btn-primary">10 KM</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection