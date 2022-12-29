@extends('dashboard.driver.dashboard_driver_template')

@if ($adaisinya == false)
    @section('contentx')
        <style>
            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .0);
                border: solid rgba(0, 0, 0, .0);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .0), inset 0 .125em .5em rgba(0, 0, 0, .0);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 670px;
            }
        </style>

        <main class="flex-nowrap px-5">
            <div class="row">
                <div class="w-50 container py-2 text-center">
                    <h2>Tidak Ada Pesanan yang Tersedia Untuk Anda Sekarang, Silakan Cek Lagi Nanti.</h2>
                </div>
                <div class="b-example-divider b-example-vr"></div>
                <div class="text-center">
                    <a class="w-50 btn btn-primary btn-lg center" href="{{ route('driver_pesanan_tersedia') }}"
                        role="button">Refresh</a>
                </div>
            </div>
        </main>
    @endsection
@elseif (!$users->pause_status)
    @section('contentx')
        <div class="container-fluid d-flex justify-content-center table-responsive">
            <table class="table table-dark table-striped table-hover table-bordered">
                <thead>
                    <tr class="table-primary">
                        <th>ID Pesanan</th>
                        <th>Nama Customer</th>
                        <th>Nama Penerima</th>
                        <th>Alamat Pickup</th>
                        <th>Alamat Tujuan</th>
                        <th>Berat</th>
                        <th>Deskripsi</th>
                        <th>Jarak</th>
                        <th>Tarif</th>
                        <th>Waktu Dibuat</th>
                        <th>#</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider table-striped">
                    @foreach ($pesanan as $item)
                        @if ($item->is_completed == 0 and $item->berat >= $min and $item->berat <= $max and $item->driver_id == null)
                            <tr class="table-light">
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->user->name }}</td>
                                <td>{{ $item->nama_penerima }}</td>
                                <td>{{ $item->alamat_pickup }}</td>
                                <td>{{ $item->alamat_tujuan }}</td>
                                <td>{{ $item->berat }}</td>
                                <td>{{ $item->deskripsi }}</td>
                                <td>{{ $item->jarak }}</td>
                                <td>{{ $item->tarif }}</td>
                                <td>{{ $item->created_at }}</td>
                                <td>
                                    <a href="driver-pesanan-terima/{{ $item->id }}">Terima Pesanan</a>
                                </td>
                            </tr>
                        @endif
                    @endforeach
                </tbody>
            </table>
        </div>
    @endsection
@else
    @section('contentx')
        <style>
            .b-example-divider {
                height: 3rem;
                background-color: rgba(0, 0, 0, .0);
                border: solid rgba(0, 0, 0, .0);
                border-width: 1px 0;
                box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .0), inset 0 .125em .5em rgba(0, 0, 0, .0);
            }

            .b-example-vr {
                flex-shrink: 0;
                width: 1.5rem;
                height: 670px;
            }
        </style>

        <main class="flex-nowrap px-5">
            <div class="row">
                <div class="w-50 container py-2 text-center">
                    <h2>Selesaikan Pesanan yang Sedang Berlangsung Terlebih Dahulu, Untuk Menerima Pesanan Baru</h2>
                </div>
                <div class="b-example-divider b-example-vr"></div>
                <div class="text-center">
                    <a class="w-50 btn btn-primary btn-lg center" href="{{ route('driver_pesanan_proses') }}"
                        role="button">Ke Menu Proses Pesanan</a>
                </div>
            </div>
        </main>
    @endsection
@endif
