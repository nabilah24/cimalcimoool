@extends('layout.masterAdmin')

@section('content')
    <main>
        <div class="head-title">
            <div class="left">
                <h1>Dashboard</h1>
                <ul class="breadcrumb">
                    <li>
                        <a href="#">Dashboard</a>
                    </li>
                    <li><i class='bx bx-chevron-right'></i></li>
                    <li>
                        <a class="active" href="#">Home</a>
                    </li>
                </ul>
            </div>
            <!-- <a href="#" class="btn-download">
                                <i class='bx bxs-cloud-download'></i>
                                <span class="text">Download PDF</span>
                            </a> -->
        </div>

        <ul class="box-info">
            <li>
                <i class='bx bxs-calendar-check'></i>
                <span class="text">
                    @php
                        $count = 1;
                        $subTotal = 0;
                    @endphp
                    <h3>{{ $count }}</h3>
                    <p>New Order</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-group'></i>
                <span class="text">
                    <h3>{{ $userCount }}</h3>
                    <p>User</p>
                </span>
            </li>
            <li>
                <i class='bx bxs-dollar-circle'></i>
                <span class="text">
                    <h3>Rp{{ $subTotal }}</h3>
                    <p>Total Sales</p>
                </span>
            </li>
        </ul>

        <div class="table-data">
            <div class="order">
                <div class="head">
                    <h3>Recent Orders</h3>
                    <i class='bx bx-search'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <table>
                    <thead>
                        <tr>
                            <th>User</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>Total Produk</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php
                            $count = 1;
                            $subTotal = 0;
                        @endphp
                        @if (session()->has('cart') && !is_null(session('cart')))
                            @foreach (session('cart') as $cart)
                                <tr>
                                    <td>
                                <tr>
                                    <td>{{ $count }}</td>
                                    <td>{{ $cart['nama_item'] }}</td>
                                    <td>Rp {{ $cart['harga'] }}</td>
                                    <td>{{ $cart['quantity'] }}</td>
                                    <td>Rp {{ $cart['harga'] * $cart['quantity'] }}</td>
                                </tr>
                                @php
                                    $subTotal += $cart['harga'] * $cart['quantity'];
                                    $count++;
                                @endphp
                            @endforeach
                        @endif
                    <tfoot>
                        <tr>
                            <td colspan="4" class="text-right">
                                <h5><strong>Gross Total: Rp {{ $subTotal }}</strong></h5>
                            </td>
                        </tr>
                    </tfoot>
                    </tbody>
                </table>
            </div>
            {{-- <div class="todo">
                <div class="head">
                    <h3>Todos</h3>
                    <i class='bx bx-plus'></i>
                    <i class='bx bx-filter'></i>
                </div>
                <ul class="todo-list">
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                    <li class="not-completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                    <li class="completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                    <li class="not-completed">
                        <p>Todo List</p>
                        <i class='bx bx-dots-vertical-rounded'></i>
                    </li>
                </ul>
            </div> --}}
        </div>
    </main>
@endsection
