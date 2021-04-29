<!DOCTYPE html>
<html lang="en">
<style>
    body {
        overflow-x: hidden
    }

    p.signature {
        margin-left: 50rem;
    }

</style>

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>3H Enterprises</title>
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
    <!-- js -->
    <script src="{{asset('assets/js/jquery.min.js')}}"></script>
    <script src="{{asset('assets/js/mdb.min.js')}}"></script>
    <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
</head>

<body>

    <div class="row">
        <div class="col-md-2">
            <button class="btn btn-primary" id="printpagebutton" onclick="printPage()" style="margin-top: 20px; mrgin-bottom: 10px; float: right">Print</button>
        </div>
        <div class="col-md-2 mb-3">
            <a href="{{url('/')}}" class="btn btn-success" id="Back" style="margin-top: 20px; mrgin-bottom: 10px;">Back</a>
        </div>

        <div class="col-md-8 mb-3">
            <a href="{{url('delete')}}" class="btn btn-danger" id="Delete" style="margin-top: 20px; margin-left: 650px;">Delete</a>
        </div>

    </div>

    <div class="container" style="border: 1px solid black">
        <div class="upper-header">
            <div class="row">
                <div class="col-lg-4">
                    <!-- <img src="logo.jpg" alt="" class="logo" /> -->
                    <h1 class="logo">3H</h1>
                </div>
                <div class="col-lg-4 text-center">
                    <h3 style="font-weight: 700">3H Enterprises</h3>
                    <p><strong>Phone: 03214668175, 03234812863</strong></p>
                    <p><strong>Address Kot Murad Khan kausar</strong></p>
                </div>
                <div class="col-lg-4">
                    <h2 class="invoice">INVOICE</h2>
                </div>
            </div>
        </div>
        <hr class="hr" />

        <div class="container mt-5">

            @foreach ($users as $user)
            <table class="table upper-table">

                <tr>
                    <td><strong>Invoie#</strong></td>
                    <td>{{$user->invoice}}</td>
                    <td><strong>Date</strong></td>
                    <td>{{$user->date}}</td>
                </tr>

                <tr>
                    <td><strong>Customer Name</strong></td>
                    <td>{{$user->c_name}}</td>
                    <td><strong>Phone</strong></td>
                    <td>{{$user->phone}}</td>
                </tr>
                <tr>
                    <td><strong>Address:</strong></td>
                    <td>{{$user->address}}</td>
                </tr>

                <tr>
                    <td><strong>Booked By</strong></td>
                    <td>{{$user->booked_by}}</td>
                    <td><strong>Delvired By</strong></td>
                    <td>{{$user->deliver_by}}</td>
                </tr>

            </table>
            @endforeach

        </div>

        <hr class="hr" />
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr style="background-color: #bbb">
                                        <td><strong>SR</strong></td>
                                        <td class="text-center"><strong>Proudct Name</strong></td>
                                        <td class="text-center"><strong>Batch No</strong></td>
                                        <td class="text-right"><strong>Pack</strong></td>
                                        <td class="text-right"><strong>Qty</strong></td>
                                        <td class="text-right"><strong>Rate</strong></td>
                                        <td class="text-right"><strong>TP</strong></td>
                                        <td class="text-right"><strong>Total</strong></td>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach($products as $item)

                                    <tr>

                                        <td>{{$item->id}}</td>
                                        <td class="text-center">{{$item->p_name}}</td>
                                        <td class="text-center">{{$item->batch_no}}</td>
                                        <td class="text-right">{{$item->pack}}</td>
                                        <td class="text-right">{{$item->qty}}</td>
                                        <td class="text-right">{{$item->rate}}</td>
                                        <td class="text-right">{{$item->tp}}</td>
                                        <td class="text-right">{{$item->total}}</td>

                                    </tr>

                                    @endforeach

                                    <tr>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line"></td>
                                        <td class="thick-line text-center bg-light" style=" font-weight: bold">
                                            <strong>Total</strong>
                                        </td>
                                        <?php $data = DB::select("select sum(total) as total from invoices");
                                        foreach($data as $total)
                                        {
                                            $totalamount = $total->total;
                                        }
                                        ?>
                                        <td class="thick-line text-right bg-light" style=" font-weight: bold">{{$totalamount}}</td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr class="hr">
        <h5 class="text-center">Read Carefully:-</h5>
        <hr style="background-color: black;height:0.7px;width:20%">

        <div class="row">
            <div class="col-lg-12">
                <p style="text-align:justify;">
                    Warranty Under section 23 (1) (i) of the drugs act 1976, I, Muhammad Rasheed resident in Mushtaq Colony KASUR.
                    Under the name of AHM TRADERS do hearby give this warranty that drugs described in this invoice as sold by us do not
                    contravene in any way the provisions of sections 23 of the drug Act 1976.(ALOPATHIIC MEDICINE ONLY)
                </p>
                <p><strong>Note:</strong></p>
                <ul>
                    <li>- EXPIRY CLAUSE: Intimation should reach our office before 6 months to replace
                        near expiry products.</li>
                    <li>
                        This warranty does not apply to general items including syrings, medical disposables
                        any mentioned in this invoice.
                    </li>
                </ul>
                <p style="text-align:justify;">
                    Please ensure that you have received the stock according to the quantities printed.
                    Moreover, please check the values and calculations and inform immediately if any deviation
                    is observed. We do not accept any responsibility afterwards
                </p>
            </div>

            <div class="row mb-3">
                <div class="col-lg-12 mt-5">
                    <img src="assets/images/sig.png" style="width:100px; height:100px; margin-left:820px;">
                    
                    <p class="mt-3 mr-3 signature"><strong>Signature & Stamp</strong></p>
                </div>
            </div>
        </div>
    </div>
</body>

</html>



<script type="text/javascript">
    function printPage() {
        //Get the print button and put it into a variable
        var printButton = document.getElementById("printpagebutton");
        var newButton = document.getElementById("Back");
        var del = document.getElementById("Delete");
        //Set the print button visibility to 'hidden' 
        printButton.style.visibility = 'hidden';
        newButton.style.visibility = 'hidden';
        del.style.visibility = 'hidden';
        //Print the page content
        window.print()
        //Set the print button to 'visible' again 
        //[Delete this line if you want it to stay hidden after printing]
        printButton.style.visibility = 'visible';
        newButton.style.visibility = 'visible';
        del.style.visibility = 'visible';
    }

</script>
