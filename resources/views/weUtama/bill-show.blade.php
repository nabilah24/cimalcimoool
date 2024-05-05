@extends('layout.masterbill')

@section('content')
    {{-- hero --}}
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>RECEIPT</h1>
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item text-decoration-none"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/menu">Menu</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Receipt</li>
                        </ol>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="hero-img-wrap">
                        <img src="{{ asset('assets/images/logo/logo.png') }}" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- hero end --}}

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row">
                <table id="receipt_bill" class="table table-hover table-conseded">
                    <thead>
                        <tr class="text-center">
                            <th colspan="5" style="font-size: 40px; font-weight:bold">E-RECEIPT</th>
                        </tr>
                        <tr>
                            <th style="width: 10%" class="text-center">No</th>
                            <th style="width: 30%" class="text-center">Nama Produk</th>
                            <th style="width: 25%" class="text-center">Harga</th>
                            <th style="width: 10%" class="text-center">Quantity</th>
                            <th style="width: 10%" class="text-center">Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Loop through cart items -->
                        @php
                            $count = 1;
                            $subTotal = 0;
                            $whatsappMessage = 'Halo kak, Saya mau order:';
                        @endphp
                        @if (session()->has('cart') && !empty(session('cart')))
                            @foreach (session('cart') as $cart)
                                <!-- Add item to table -->
                                <tr>
                                    <td style="width: 10%" class="text-center">{{ $count }}</td>
                                    <td style="width: 30%" >{{ $cart['nama_item'] }}</td>
                                    <td style="width: 25%" class="text-center">Rp {{ $cart['harga'] }}</td>
                                    <td style="width: 10%" class="text-center">{{ $cart['quantity'] }}</td>
                                    <td style="width: 25%" class="text-center">Rp {{ $cart['harga'] * $cart['quantity'] }}</td>
                                </tr>
                                <!-- Update subtotal and WhatsApp message -->
                                @php
                                    $subTotal += $cart['harga'] * $cart['quantity'];
                                    $count++;
                                    // Append item details to WhatsApp message
                                    $whatsappMessage .=
                                        "%0A{$cart['nama_item']} - Rp {$cart['harga']} x {$cart['quantity']}" .
                                        '%0ANama:' .
                                        '%0AAlamat:' .
                                        '%0ANo.HP:' .
                                        '%0A %0A *ᴴᵃʳᵍᵃ ᵇᵉˡᵘᵐ ᵗᵉʳᵐᵃˢᵘᵏ ᵖᵃʲᵃᵏ ᵈᵃⁿ ᵒⁿᵍᵏᶦʳ';
                                @endphp
                            @endforeach
                        @endif
                    </tbody>

                    <tfoot>
                        <!-- Footer content -->
                        <tr>
                            <td colspan="4" class="text-right">
                                <h5><strong>Sub Total: Rp {{ $subTotal }}</strong></h5>
                                <h5><strong>Tax (5%) : Rp {{ $subTotal * 0.05 }}</strong></h5>
                            </td>
                            <td class="text-center text-dark">
                                <h5><strong>Gross Total: Rp {{ $subTotal + $subTotal * 0.05 }}</strong></h5>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <a href="{{ url('/menu') }}" class="btn btn-warning">
                                    <i class="bi bi-chevron-double-left" style="font-size: 12px; font-weight:bold;">Continue
                                        Shopping</i>
                                </a>
                            </td>
                            <td class="text-end">
                                <a href="https://api.whatsapp.com/send?phone=628983550049&text={{ $whatsappMessage }}"
                                    class="btn btn-info">
                                    <i class="bi bi-cart-check"
                                        style="font-size: 12px; font-weight:bold;">&nbsp;Checkout</i>
                                </a>
                            </td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    @endsection
