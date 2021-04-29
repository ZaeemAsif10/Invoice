<!DOCTYPE html>
<html lang="en">

<head>
    <title>3H Enterprises</title>


    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/all.min.css')}}" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="{{asset('assets/css/google.css')}}" rel="stylesheet" />
    <!-- MDB -->
    <link href="{{asset('assets/css/mdb.min.css')}}" rel="stylesheet" />
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/mdb.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>

</head>

<body>
    <div class="container">
        <div class="card" style="background: #d1d1d1; margin-top: 30px;">
            <div class="card-body">
                <form class="insert-form" id="insert-form" method="post" action="{{url('save-customer')}}">
                    @csrf
                    <hr>
                    <h1 class="text-center">Customer Detail</h1>
                    <hr>

                    @if($message=Session::get('success'))

                    <div class="alert alert-success alert-block" style="background: green; color: white;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong> {{ $message}}</strong>
                    </div>
                    @endif

                    <div class="form-row">
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">Invoice#</label>
                                <input type="text" id="invoice" name="invoice" placeholder="Enter Invoice..." class="input form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">Customer Name</label>
                                <input type="text" id="c_name" name="c_name" placeholder="Enter Customer Name..." class="input form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">Date</label>
                                <input type="date" id="date" name="date" placeholder="Enter Date..." class="input form-control" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">Address</label>
                                <input type="text" id="address" name="address" placeholder="Enter Phone Number..." class="input form-control" required>
                            </div>
                        </div>
                        
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">Phone</label>
                                <input type="text" id="phone" name="phone" placeholder="Enter Phone Number..." class="input form-control" required>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">Booked By</label>
                                <input type="text" id="booked_by" name="booked_by" placeholder="Booked By Name..." class="input form-control" required>
                            </div>
                        </div>
                        
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="num1">Deliver By</label>
                                <input type="text" id="deliver_by" name="deliver_by" placeholder="Deliver By Name..." class="input form-control" required>
                            </div>
                        </div>
                        
                        
                    </div>

                    <div class="row">
                        <div class="col-md-4"></div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-block" type="submit"><i class="fab fa-telegram-plane fa-2x">&nbsp
                                    Submit</i></button>
                        </div>


                        <div class="col-md-4"></div>
                    </div>
                </form>
            </div>
        </div>



        <div class="card" style="background: #d1d1d1; margin-top: 30px;">
            <div class="card-body">
                <form class="insert-form" id="insert-form" method="post" action="{{url('save-product')}}">
                    @csrf
                    <hr>
                    <h1 class="text-center">Product Detail</h1>
                    <hr>

                    @if($message=Session::get('product'))

                    <div class="alert alert-success alert-block" style="background: green; color: white;">
                        <button type="button" class="close" data-dismiss="alert">×</button>
                        <strong> {{ $message}}</strong>
                    </div>
                    @endif

                    <div class="form-row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">Product Name</label>
                                <input type="text" id="p_name" name="p_name" placeholder="Enter Product Name..." class="input form-control" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="num1">Batch No</label>
                                <input type="text" id="batch_no" name="batch_no" placeholder="Enter Batch No..." class="input form-control" required>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="num1">Pack</label>
                                <input type="text" id="pack" name="pack" placeholder="Enter Pack..." class="input form-control" required>
                            </div>
                        </div>

                    </div>



                    <tr>
                        <td>

                        </td>
                    </tr>

                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-4">
                            <button class="btn btn-primary btn-block" type="submit"><i class="fab fa-telegram-plane fa-2x">&nbsp
                                    Submit</i></button>
                        </div>
                        <div class="col-md-4">
                            <a href="{{url('show-invoice')}}" class="btn btn-primary btn-block">Go to Invoice</a>
                        </div>

                        <div class="col-md-2"></div>
                    </div>
                    <br>
                    <br>
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal" style="margin-left: 450px;">
                        Gererate Invoice
                    </button>

                </form>
            </div>
        </div>
    </div>

</body>

</html>



<!--Modal Start-->
<!-- Large modal -->

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Invoice Detail</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{url('store-invoice')}}" method="post">
                    @csrf
                    <div class="row">
                    <div class="form-group">
                        <label for="">Select Customer Name </label>
                        <select name="customer_id" id="" class="form-control" required>
                            <option value="" disabled selected hidden>Select Customer Name</option>
                            <?php $role =DB::select('select * from customers'); ?>
                            @foreach($role as $role)
                            <option value="{{$role->id}}">{{$role->c_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Select Product Name </label>
                        <select name="product_id" id="" class="form-control" required>
                            <option value="" disabled selected hidden>Select Product Name</option>
                            <?php $role =DB::select('select * from products'); ?>
                            @foreach($role as $role)
                            <option value="{{$role->id}}">{{$role->p_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row" id="next">
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="num1">Quantity</label>
                            <input type="text" id="num1" name="qty" class="input form-control" required>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="num2">Rate</label>
                            <input type="text" id="num2" class="input form-control" style="margin-left:10px;" required>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="form-group">
                            <label for="result">Total Price</label>
                            <input type="text" id="result" name="rate" readonly class="form-control" required>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="num2">TP%</label>
                            <input type="text" id="chDiscount" class="input form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="result">Total TP</label>
                            <input type="text" id="result1" name="tp" readonly class="form-control" style="margin-left:10px;" required>
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="form-group">
                            <label for="num2">Discount%</label>
                            <input type="text" id="tp" class="input form-control" required>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="form-group">
                            <label style="margin-left:20px;" for="result">Total Amount</label>

                            <input type="text" id="result3" name="total" readonly class="form-control" style="margin-left:10px;" required>
                        </div>
                    </div>

                </div>
                    <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Save Invoice</button>
            </div>
                </form>
            </div>
            
        </div>
    </div>
</div>
<!--End Modal-->



<style>
    @media(max-width:767px) {

        input {
            margin-left: 10px;
        }

        label {
            margin-left: 10px;
        }

        button {
            margin-left: 10px;
        }
    }

</style>


<script type="text/javascript">
    $('.input').on('input', function() {

        var x = document.getElementById('num1').value;
        x = parseFloat(x);

        var y = document.getElementById('num2').value;
        y = parseFloat(y);


        if (Number.isNaN(x))
            x = 0;
        else if (Number.isNaN(y))
            y = 0;

        document.getElementById('result').value = x * y;

    });

    $(document).on("change keyup blur", "#chDiscount", function() {
        var main = $('#result').val();
        var disc = $('#chDiscount').val();
        var dec = (disc / 100).toFixed(2); //its convert 10 into 0.10
        var mult = main * dec; // gives the value for subtract from main value
        var discont = main - mult;
        $('#result1').val(discont);
    });

    $(document).on("change keyup blur", "#tp", function() {
        var main1 = $('#result1').val();
        var disc1 = $('#tp').val();
        var dec1 = (disc1 / 100).toFixed(2); //its convert 10 into 0.10
        var mult1 = main1 * dec1; // gives the value for subtract from main value
        var discont1 = main1 - mult1;
        $('#result3').val(discont1);
    });


    //    $(document).ready(function() {
    //
    //        var html = '<tr><td><div class="row"><div class="col-md-1"><div class="form-group"><label for="num1">Quantity</label><input type="text" id="num1" class="input form-control"></div></div><div class="col-md-1"><div class="form-group"><label for="num2">Rate</label><input type="text" id="num2" class="input form-control" style="margin-left:10px;"></div></div><div class="col-md-2"><div class="form-group"><label for="result">Total Price</label><input type="text" id="result" readonly class="form-control" margin-left:20px;></div></div><div class="col-md-1"><div class="form-group"><label for="num2">TP%</label><input type="text" id="chDiscount" class="input form-control"></div></div><div class="col-md-3"><div class="form-group"><label for="result">Total TP</label><input type="text" id="result1" readonly class="form-control" style="margin-left:10px;"></div></div><div class="col-md-1"><div class="form-group"><label for="num2">Discount%</label><input type="text" id="tp" class="input form-control"></div></div><div class="col-md-2"><div class="form-group"><label for="result">Total Amount</label><input type="text" id="result3" readonly class="form-control" style="margin-left:10px;"></div></div><div class="col-md-1"><div class="form-group"><button class="btn btn-danger mt-4" type="button" name="remove" id="remove">Remove</button></div></div></div></td></tr>';
    //
    //
    //        var max = 5;
    //        var x = 1;
    //
    //        $('#add').click(function() {
    //            if(x <= max){
    //                $('#next').append(html);
    //                x++;
    //            }
    //        });
    //
    //        $('#next').on('click', '#remove', function() {
    //            $(this).closest('tr').remove();
    //            x--;
    //        });
    //
    //    });

</script>
