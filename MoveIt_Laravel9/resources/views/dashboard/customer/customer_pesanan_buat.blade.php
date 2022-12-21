@extends('dashboard.customer.dashboard_customer_template')

@if(!$users->pause_status)
@section('contentx')
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.104.2">
    {{-- <title>Checkout example · Bootstrap v5.2</title> --}}

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .container {
            max-width: 960px;
        }

    </style>


    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container">
        <main>
            <div class="py-2 text-center">
                {{-- <img class="d-block mx-auto mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <h2>Buat Pesanan</h2>
                {{-- <p class="lead">Below is an example form built entirely with Bootstrap’s form controls. Each required form group has a validation state that can be triggered by attempting to submit the form without completing it.</p> --}}
            </div>

            <div class="row g-5">
                {{-- <div class="col-md-5 col-lg-4 order-md-last">
                    <h4 class="d-flex justify-content-between align-items-center mb-3">
                        <span class="text-primary">Your cart</span>
                        <span class="badge bg-primary rounded-pill">3</span>
                    </h4>
                    <ul class="list-group mb-3">
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Product name</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Second product</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between lh-sm">
                            <div>
                                <h6 class="my-0">Third item</h6>
                                <small class="text-muted">Brief description</small>
                            </div>
                            <span class="text-muted">$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between bg-light">
                            <div class="text-success">
                                <h6 class="my-0">Promo code</h6>
                                <small>EXAMPLECODE</small>
                            </div>
                            <span class="text-success">−$5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between">
                            <span>Total (USD)</span>
                            <strong>$20</strong>
                        </li>
                    </ul>

                    <form class="card p-2">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Promo code">
                            <button type="submit" class="btn btn-secondary">Redeem</button>
                        </div>
                    </form>
                </div> --}}
                <div class="col-md-0 col-lg-0">
                    <h4 class="mb-3">Isi Form Berikut:</h4>
                    <form class="needs-validation" novalidate>
                        <div class="row g-3">
                            {{-- <div class="col-sm-6">
                                <label for="firstName" class="form-label">First name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid first name is required.
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <label for="lastName" class="form-label">Last name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="" value="" required>
                                <div class="invalid-feedback">
                                    Valid last name is required.
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="username" class="form-label">Username</label>
                                <div class="input-group has-validation">
                                    <span class="input-group-text">@</span>
                                    <input type="text" class="form-control" id="username" placeholder="Username" required>
                                    <div class="invalid-feedback">
                                        Your username is required.
                                    </div>
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="email" class="form-label">Email <span class="text-muted">(Optional)</span></label>
                                <input type="email" class="form-control" id="email" placeholder="you@example.com">
                                <div class="invalid-feedback">
                                    Please enter a valid email address for shipping updates.
                                </div>
                            </div> --}}

                            <div class="col-12">
                                <label for="alamat_pickup" class="form-label">Alamat Pickup</label>
                                <input type="text" class="form-control" id="alamat_pickup" placeholder="Jl. Telekomunikasi No.1, Sukapura, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40267" required>
                                <div class="invalid-feedback">
                                    Masukkan Alamat Pickup!
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="alamat_tujuan" class="form-label">Alamat Tujuan</label>
                                <input type="text" class="form-control" id="alamat_tujuan" placeholder="Jl. H. Umayah 1, Citeureup, Kec. Dayeuhkolot, Kabupaten Bandung, Jawa Barat 40257" required>
                                <div class="invalid-feedback">
                                    Masukkan Alamat Tujuan!
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="berat" class="form-label">Berat (kg)</label>
                                <input type="text" class="form-control" id="berat" placeholder="1kg" required>
                                <div class="invalid-feedback">
                                    Masukkan Berat Barang!
                                </div>
                            </div>

                            {{-- <div class="col-12">
                                <label for="address2" class="form-label">Address 2 <span class="text-muted">(Optional)</span></label>
                                <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                            </div> --}}

                            {{-- <div class="col-md-5">
                                <label for="country" class="form-label">Country</label>
                                <select class="form-select" id="country" required>
                                    <option value="">Choose...</option>
                                    <option>United States</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please select a valid country.
                                </div>
                            </div> --}}

                            {{-- <div class="col-md-4">
                                <label for="state" class="form-label">State</label>
                                <select class="form-select" id="state" required>
                                    <option value="">Choose...</option>
                                    <option>California</option>
                                </select>
                                <div class="invalid-feedback">
                                    Please provide a valid state.
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="zip" class="form-label">Zip</label>
                                <input type="text" class="form-control" id="zip" placeholder="" required>
                                <div class="invalid-feedback">
                                    Zip code required.
                                </div>
                            </div> --}}
                        </div>

                        {{-- <hr class="my-4">

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="same-address">
                            <label class="form-check-label" for="same-address">Shipping address is the same as my billing address</label>
                        </div>

                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="save-info">
                            <label class="form-check-label" for="save-info">Save this information for next time</label>
                        </div> --}}

                        {{-- <hr class="my-4">

                        <h4 class="mb-3">Payment</h4>

                        <div class="my-3">
                            <div class="form-check">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label" for="credit">Credit card</label>
                            </div>
                            <div class="form-check">
                                <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="debit">Debit card</label>
                            </div>
                            <div class="form-check">
                                <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label" for="paypal">PayPal</label>
                            </div>
                        </div>

                        <div class="row gy-3">
                            <div class="col-md-6">
                                <label for="cc-name" class="form-label">Name on card</label>
                                <input type="text" class="form-control" id="cc-name" placeholder="" required>
                                <small class="text-muted">Full name as displayed on card</small>
                                <div class="invalid-feedback">
                                    Name on card is required
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="cc-number" class="form-label">Credit card number</label>
                                <input type="text" class="form-control" id="cc-number" placeholder="" required>
                                <div class="invalid-feedback">
                                    Credit card number is required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-expiration" class="form-label">Expiration</label>
                                <input type="text" class="form-control" id="cc-expiration" placeholder="" required>
                                <div class="invalid-feedback">
                                    Expiration date required
                                </div>
                            </div>

                            <div class="col-md-3">
                                <label for="cc-cvv" class="form-label">CVV</label>
                                <input type="text" class="form-control" id="cc-cvv" placeholder="" required>
                                <div class="invalid-feedback">
                                    Security code required
                                </div>
                            </div>
                        </div> --}}

                        <hr class="my-4">

                        <button class="w-100 btn btn-primary btn-lg" type="submit">Konfirmasi Pesanan</button>
                    </form>
                </div>
            </div>
        </main>

        <footer class="my-1 pt-1 text-muted text-center text-small">

        </footer>

        {{-- <footer class="my-5 pt-5 text-muted text-center text-small">
            <p class="mb-1">&copy; 2022 MoveIt!</p>
            <ul class="list-inline">
                <li class="list-inline-item"><a href="#">Privacy</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Support</a></li>
            </ul>
        </footer> --}}
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="form-validation.js"></script>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (() => {
            'use strict'

            // Fetch all the forms we want to apply custom Bootstrap validation styles to
            const forms = document.querySelectorAll('.needs-validation')

            // Loop over them and prevent submission
            Array.from(forms).forEach(form => {
                form.addEventListener('submit', event => {
                    if (!form.checkValidity()) {
                        event.preventDefault()
                        event.stopPropagation()
                    }

                    form.classList.add('was-validated')
                }, false)
            })
        })()

    </script>

</body>

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
        /* height: 60vh; */
        height: 670px;
    }

    /* .anyClass {
        height: 740px;
        width: 1200px;
        overflow-y: hidden, scroll;
        overflow-x: hidden;
    } */

</style>

<main class="flex-nowrap px-5">
    <div class="row">
        <div class="w-50 container py-2 text-center">
            <h2>Selesaikan Pesanan yang Sedang Berlangsung Terlebih Dahulu, Untuk Membuat Pesanan Baru</h2>
        </div>
        <div class="b-example-divider b-example-vr"></div>
        <div class="text-center">
            <a class="w-50 btn btn-primary btn-lg center" href="{{ route('customer_pesanan_proses')}}" role="button">Ke Menu Proses Pesanan</a>
        </div>
    </div>
</main>
@endsection
@endif
