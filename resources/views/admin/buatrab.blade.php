@extends('component.template')
@section('konten')
<div class="container-fluid p-2">
    <div class="row p-0 border-bottom mb-2">
        <div class="col-9">
            <h1>Buat RAB</h1>
        </div>
        <div class="col-3">
            <a class="btn btn-success" href="{{ route('rab.add') }}">Tambah RAB</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header bg-gradient-navy"></div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col" class="w-15 ">Aksi</th>
                                <th scope="col" class="w-25 ">Rincian Pekerjaan</th>
                                <th scope="col">Volume</th>
                                <th scope="col">satuan</th>
                                <th scope="col">Harga Satuan</th>
                                <th scope="col">Jumlah</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <th>
                                    <a href="  " onclick="return confirm('Hapus Data  ');" class="btn btn-sm bg-danger">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    {{-- <a href="  " class="btn btn-sm bg-teal">
                                        <i class="fas fa-edit" title="Edit"></i>
                                    </a>
                                    <a href="" class="btn btn-sm bg-success">
                                        <i class="fas fa-eye" title="view"></i>
                                    </a> --}}
                                </th>
                                <td class="uppercase">Pekerjaan</td>
                                <td>12</td>
                                <td>m3</td>
                                <td>{{ number_format(130000,2) }}</td>
                                <td>{{ number_format(130000 * 12,2) }}</td>

                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus facilis deleniti in repellendus, ut nesciunt modi vel voluptatibus vitae, veritatis unde asperiores alias natus. Accusantium perferendis asperiores soluta recusandae eveniet!
                Pariatur maiores veritatis ipsum ipsa. Tempora veniam inventore voluptates assumenda, sit error pariatur aperiam expedita ex obcaecati eaque iure ut cupiditate? Blanditiis debitis exercitationem deleniti possimus eum quo praesentium nemo.
                Ipsam, esse optio! Quisquam, magnam ut dignissimos dolor excepturi nihil quaerat quam cupiditate sint sed voluptate molestias sapiente veniam quas eligendi dolores assumenda nobis quae odit laborum doloribus. Tempore, a.
                Maiores cumque harum ipsa asperiores odio unde provident labore maxime dolor, quibusdam aliquid magnam sed sit expedita in pariatur fugiat facere, nostrum illum eaque dolores. Soluta distinctio aut ab dolor?
                Ab earum est et minus nam corporis ea quidem optio iure! Ea tempora dolores voluptatibus tempore corporis totam veritatis provident sequi saepe eum doloribus quas, quam repudiandae harum! Hic, labore.
                In soluta ex corporis tenetur beatae, ratione laudantium repellendus, dolorum accusantium nisi, sapiente obcaecati quidem enim omnis aliquam culpa molestiae facilis at inventore cumque? Corrupti asperiores sit voluptatum quisquam doloribus!
                Numquam pariatur, accusantium soluta autem quae, maiores sint quis perspiciatis tempore ipsam, deserunt ipsa a sunt alias ratione in? Sit officia tempore excepturi fugit corporis? Itaque laudantium ratione vitae hic.
                Distinctio illum maxime harum ex officiis repellat? Molestias earum sequi soluta neque, aspernatur quis nihil officia eaque magnam asperiores, eum saepe atque voluptatibus laborum impedit dolorum dolores incidunt repellendus porro.
                Perspiciatis ut ad id sunt minima tempore temporibus itaque beatae sed esse soluta, iusto eveniet nihil excepturi odio unde ullam debitis distinctio expedita rem optio! Iusto iure ex amet aliquid.
                Dolore perspiciatis explicabo nobis ea quos asperiores iure dignissimos facilis commodi repellat. Incidunt reiciendis rem, qui minima earum ratione molestiae magni quo pariatur vero, expedita eum officia optio, temporibus voluptas.</p>
        </div>
        <div class="col">
            <div class="card p-0">
                <div class="card-header bg-navy"></div>
                <div class="row m-1">
                    <div class="col-5 p-2">
                        <button id="form_button">Tambah Baru</button>
                    </div>
                </div>
                <div class="card-body text-center text-bold">Tambah AHS</div>
                <div class="card-body text-center " id="satu">
                    <form action="{{ route('ahsp.add') }}" method="POST">
                        @csrf
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="kode_ahs" id="kode_ahs" placeholder="Kode Ahs">
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="nama_ahs" id="nama_ahs" placeholder="Nama AHs"><br>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="kategori" id="kategori" placeholder="Kategori"><br>
                        </div>
                        <div class="form-floating mb-3 mt-3">
                            <input type="text" name="profit" id="profit" placeholder="Profit"><br>
                        </div>
                        <button type="submit">Buat</button>
                    </form>
                </div>
                <div class="form-floating mb-3 mt-1  active" id="dua">
                    @foreach ( $ahsp as $d )
                    <div class="card card-navy card-outline pb-0 ">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-sm-3">
                                    <div class="text font-mono">
                                        <span> <strong>{{ $d->kode_ahs }}</strong>
                                    </div>
                                </div>
                                <div class="col-6"><i>{{ $d->nama_ahs }}</i>
                                    <p>Rp. {{ $d->total }}</p> </span>
                                </div>
                                <div class="col">
                                    <button type="button" class="btn" data-target="#{{ (string)$d->id }}" data-toggle="collapse" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                    <button type="button" class="btn-sm btn-success" data-card-widget="collapse">
                                        <i class="fas fa-plus"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="card-body bg-gray-light collapse" id="{{ (string)$d->id}}">

                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">Rincian</th>
                                        <th scope="col">Satuan</th>
                                        <th scope="col">Harga Satuan</th>
                                        <th scope="col">Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $d->dataahsp as $p )
                                    <tr>
                                        <td>{{ $p->rincian  }}</td>
                                        <td>{{ $p->satuan }}</td>
                                        <td>{{ $p->harga_satuan  }}</td>
                                        <td>{{ $p->total }}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        @endforeach
                        <!-- /.card-body-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .active {
        display: none;
    }
</style>
<script>
    var satu = document.getElementById("satu");
    var dua = document.getElementById("dua");

    var button = document.getElementById('form_button');
    var button_2 = document.getElementById('form_button_2');

    button.addEventListener(('click'), () => {

        satu.classList.toggle('active');

    })
    button.addEventListener(('click'), () => {

        dua.classList.toggle('active');

    })
</script>
@endsection
