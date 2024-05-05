@extends('layout.masterbill')

@section('content')
    <div class="hero">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="intro-excerpt">
                        <h1>Receipt</h1>
                        <ol class="breadcrumb justify-content-center text-uppercase">
                            <li class="breadcrumb-item text-decoration-none"><a href="/home">Home</a></li>
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
        <div class="text-center" style="color: #000000">
            <h1>Receipt</h1>
        </div>
        <br>
        <div class="row">
            <table id="receipt_bill" class="table">
                <thead>
                    <tr>
                        <th> No.</th>
                        <th>Product Name</th>
                        <th class="text-center">Price</th>
                        <th class="text-center">Quantity</th>
                        <th class="text-center">Total</th>
                    </tr>
                </thead>
                <tbody>
                    @php $count = 1; $subTotal = 0; @endphp
                    @foreach(session('cart') as $cart)
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
                </tbody>
                <tfoot>
                    <tr>
                        <td colspan="4" class="text-right">
                            <h5><strong>Sub Total:  ₹ {{ $subTotal }}</strong></h5>
                            <h5><strong>Tax (5%) : ₹ {{ $subTotal * 0.05 }}</strong></h5>
                        </td>
                        <td class="text-center text-dark">
                            <h5><strong>Gross Total: ₹ {{ $subTotal + ($subTotal * 0.05) }}</strong></h5>
                        </td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
@endsection


<script>
    $(document).ready(function(){
    //   $('#vegitable').change(function() {
    //    var ids =   $(this).find(':selected')[0].id;
    //     $.ajax({
    //        type:'GET',
    //        url:'getPrice/{id}',
    //        data:{id:ids},
    //        dataType:'json',
    //        success:function(data)
    //          {

    //              $.each(data, function(key, resp)
    //              {
    //               $('#price').text(resp.product_price);
    //             });
    //          }
    //     });
    //   });

    //   //add to cart
    //   var count = 1;
    //   $('#add').on('click',function(){

    //      var name = $('#vegitable').val();
    //      var qty = $('#qty').val();
    //      var price = $('#price').text();

    //      if(qty == 0)
    //      {
    //         var erroMsg =  '<span class="alert alert-danger ml-5">Minimum Qty should be 1 or More than 1</span>';
    //         $('#errorMsg').html(erroMsg).fadeOut(9000);
    //      }
    //      else
    //      {
    //         billFunction(); // Below Function passing here
    //      }

         function billFunction()
           {
           var total = 0;

           $("#receipt_bill").each(function () {
           var total =  price*qty;
           var subTotal = 0;
           subTotal += parseInt(total);

           var table =   '<tr><td>'+ count +'</td><td>'+ name + '</td><td>' + qty + '</td><td>' + price + '</td><td><strong><input type="hidden" id="total" value="'+total+'">' +total+ '</strong></td></tr>';
           $('#new').append(table)

            // Code for Sub Total of Vegitables
             var total = 0;
             $('tbody tr td:last-child').each(function() {
                 var value = parseInt($('#total', this).val());
                 if (!isNaN(value)) {
                     total += value;
                 }
             });
              $('#subTotal').text(total);

             // Code for calculate tax of Subtoal 5% Tax Applied
               var Tax = (total * 5) / 100;
               $('#taxAmount').text(Tax.toFixed(2));

              // Code for Total Payment Amount

              var Subtotal = $('#subTotal').text();
              var taxAmount = $('#taxAmount').text();

              var totalPayment = parseFloat(Subtotal) + parseFloat(taxAmount);
              $('#totalPayment').text(totalPayment.toFixed(2)); // Showing using ID

          });
          count++;
         }
        });
            // Code for year

            var currentdate = new Date();
              var datetime = currentdate.getDate() + "/"
                 + (currentdate.getMonth()+1)  + "/"
                 + currentdate.getFullYear();
                 $('#year').text(datetime);



            // Code for extract Weekday
                 function myFunction()
                  {
                     var d = new Date();
                     var weekday = new Array(7);
                     weekday[0] = "Sunday";
                     weekday[1] = "Monday";
                     weekday[2] = "Tuesday";
                     weekday[3] = "Wednesday";
                     weekday[4] = "Thursday";
                     weekday[5] = "Friday";
                     weekday[6] = "Saturday";

                     var day = weekday[d.getDay()];
                     return day;
                     }
                 var day = myFunction();
                 $('#day').text(day);
      });
 </script>
 <script>
    window.onload = displayClock();

     function displayClock(){
       var time = new Date().toLocaleTimeString();
       document.getElementById("time").innerHTML = time;
        setTimeout(displayClock, 1000);
     }
</script>
