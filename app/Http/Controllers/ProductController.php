<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Invoice;
use DB;

class ProductController extends Controller
{
    public function index()
    {
        return view('customer');
    }
    
    public function showInvoice(Request $request)
    {
        $data = DB::select("SELECT i.*,p.p_name,p.batch_no,p.pack FROM invoices i JOIN products p WHERE i.product_id = p.id"); 
        $users = DB::select("select * from customers");
        return view('invoice-page',['products'=>$data],['users'=>$users]);
        
    }
    
    
    public function saveCustomer(Request $request)
    {
        
        $cus = new Customer();
        $cus->invoice = $request->invoice;
        $cus->c_name = $request->c_name;
        $cus->date = $request->date;
        $cus->address = $request->address;
        $cus->phone = $request->phone;
        $cus->booked_by = $request->booked_by;
        $cus->deliver_by = $request->deliver_by;
        $cus->save();
        
        return redirect('/')
            ->with('success', 'Customer Added Successfully');
        
    }
    
    public function saveProduct(Request $request)
    {
        
        $data = new Product();
        $data->p_name = $request->p_name;
        $data->batch_no = $request->batch_no;
        $data->pack = $request->pack;
        $data->save();
       
        return redirect('/')
            ->with('product', 'Product Detail Added Successfully');
    }
    
    public function storeInvoice(Request $request)
    {
        $invoice = new Invoice();
        $invoice->customer_id = $request->customer_id;
        $invoice->product_id = $request->product_id;
        $invoice->qty = $request->qty;
        $invoice->rate = $request->rate;
        $invoice->tp = $request->tp;
        $invoice->total = $request->total;
        $invoice->save();
        
        return redirect('/')
            ->with('product', 'Invoice Detail Added Successfully');
        
    }
    
    public function Delete(Request $request)
    {
        $data = Product::truncate();
        $c = Customer::truncate();
        $i = Invoice::truncate();
        if($data)
        {
            return redirect('/');
        }
        else if(c){
            return redirect('/');
        }
        else if(i){
            return redirect('/');
        }
        else{
            return 'Faild';
        }
    }
}
