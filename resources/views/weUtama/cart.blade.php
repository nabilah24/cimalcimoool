@extends('layout.master')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>My Cart</h1>
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item text-decoration-none"><a href="/">Home</a></li>
                            <li class="breadcrumb-item"><a href="/menu">Menu</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">My Cart</li>
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

    {{-- menu --}}
    <div class="container-xxl py-5">
        <div class="container">
            <table id="cart" class="table table-hover table-conseded">
                <thead>
                    <tr>
                        <th style="width: 50%">Product</th>
                        <th style="width: 10%">Price</th>
                        <th style="width: 8%">Quantity</th>
                        <th style="width: 22%" class="text-center">Subtotal</th>
                        <th style="width: 10%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $total = 0; ?>
                    @if (session('cart'))
                        @foreach (session('cart') as $id => $details)
                            <?php $total += $details['harga'] * $details['quantity']; ?>
                            <tr rowId="{{ $id }}">
                                <td data-th="Product">
                                    <div class="row">
                                        <div class="col-sm-3 hidden-xs"><img
                                                src="{{ asset('/storage/gambar/' . $details['gambar']) }}"
                                                class="card-img-top" />
                                        </div>
                                        <div class="col-sm-9">
                                            <h4 class="nomargin">{{ $details['nama_item'] }}</h4>
                                        </div>
                                    </div>
                                </td>
                                <td data-th="Price">Rp {{ $details['harga'] }}</td>
                                <td data-th="Quantity" class="form-group">
                                    <input type="text" value="{{ $details['quantity'] }}"
                                        class="form-control text-center quantity" readonly>
                                </td>
                                <td data-th="Subtotal" class="text-center">Rp{{ $details['harga'] * $details['quantity'] }}
                                <td class="actions" data-th="">
                                    <button type="button" onclick="handleDelete({{ $id }})"
                                        class="btn btn-danger btn-sm delete-cart-item" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal" style="font-size: 20px; font-weight:bold;"><i
                                            class='bi bi-trash'></i>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </tbody>
                <tfoot>
                    <tr>
                        <td>
                            <a href="{{ url('/menu') }}" class="btn btn-warning">
                                <i class="bi bi-chevron-double-left" style="font-size: 12px; font-weight:bold;">Continue
                                    Shopping</i>
                            </a>
                            <a href="{{ url('/bill-show') }}" class="btn btn-info">
                                <i class="bi bi-cart-check" style="font-size: 12px; font-weight:bold;">&nbsp;Checkout</i>
                            </a>
                        </td>
                        <td colspan="2" class="hidden-xs"></td>
                        <td class="hidden-xs text-center">
                            <strong>Total Rp{{ $total }}</strong>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>

    <!-- Modal -->
    @if (session('cart'))
        @foreach (session('cart') as $id => $details)
            <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-body text-center">
                            <svg xmlns="http://www.w3.org/2000/svg" width="90" height="90" fill="currentColor"
                                class="bi bi-exclamation-circle" viewBox="0 0 16 16" style="color: #ffcc00">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                                <path
                                    d="M7.002 11a1 1 0 1 1 2 0 1 1 0 0 1-2 0zM7.1 4.995a.905.905 0 1 1 1.8 0l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 4.995z" />
                            </svg>
                            <br><br>
                            <h1 class="text-dark"><strong>HAPUS</strong></h1>
                            <h5 class="text-dark">Apakah Anda yakin?</h5><br>
                            <form action="{{ route('delete.cart.item', $id) }}" method="POST">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Ya! Hapus</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    @endif
@endsection

@section('scripts')
    <script>
        function handleDelete(id) {
            $('#deleteModal').modal('show')
        }
    </script>
@endsection
