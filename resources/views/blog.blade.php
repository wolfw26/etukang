@extends('template')
@section('konten')
<section class="content mb-4">
    <div class="container-fluid p-4">
        @foreach ( $data as $d )
            <div class="p-lg-4 p-5 mt-5">
                <h1 class=" text-center">{{ $d->judul }}</h1>
                <p> Oleh : <strong>{{ $d->penulis }} </strong></p>
                <p class=" mb-5"> <strong>Penerbit : </strong>{{ $d->penerbit }}</p>
                <h3 class=" align-content-center">
                    {{ $d->konten }} <br>
                    <p>{{ $d->terbit }}</p>
                </h3>
            </div>
        @endforeach
        <div class="p-lg-4 p-5 mt-5">

        </div>
    </div>
</section>
<div class="footer">
    <div class="container-fluid">
        <div class="judulFooter">
            <h2>Halaman <span>Footer</span></h2>
            <div class="card-footer">
                <ul>
                    <li>Foto 1</li>
                    <li>Foto 2</li>
                    <li>Foto 3</li>
                    <li>Foto 4</li>
                    <li>Foto 5</li>
                    <li>Foto 6</li>
                    <li>Foto 7</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
