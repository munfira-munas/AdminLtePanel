<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

use App\Models\Accounts;
use DataTables;

class AccountsController extends Controller
{
  public function index(Request $request)
  {

    if ($request->ajax()) {

      $data=DB::table('accounts')
      ->select('accounts.id as id','accounts.first_name as first_name','accounts.last_name as last_name','accounts.company_name as company_name','accounts.suburb as suburb','accounts.country as country',DB::raw('COUNT(account_users.id) as count'))
      ->leftjoin('account_users', 'account_users.account_id', '=', 'accounts.id')   
      ->groupBy('accounts.id','account_users.account_id','accounts.first_name','accounts.last_name','accounts.company_name','accounts.suburb','accounts.country') 
      ->get();


      return Datatables::of($data)->addIndexColumn()

      ->make(true);


    }

    return view('admin.index');
  }



  function displayAccount($id)
  {

     $row = DB::table('accounts')
     ->where('id', $id)->first();

     $data = ['Info' => $row];

     return view('admin.displayAccount', $data); //return edit page with data


  }



  
  public function createAccount()
  {

     return view('admin.create');
  }



  
  function  saveAccount(Request $request)
  {

     // return $request->input();

     $request->validate([
        'fname' => 'required',
        'lname' => 'required',
        'email' => 'required|email',
        'company_name' => 'required',
        'auth_type' =>'required'

     ]);


  

     $query = DB::table('accounts')
        ->insert([
           'first_name' => $request->input('fname'), //db column name followed by input field name
           'last_name' => $request->input('lname'),
           'company_name' => $request->input('company_name'),
           'address_1' => $request->input('address_1'),
           'address_2' => $request->input('address_2'),
           'postcode' => $request->input('postcode'),
           'suburb' => $request->input('suburb'),
           'country' => $request->input('country'),
           'email' => $request->input('email'),
           'phone' => $request->input('phone'),
           'mobile' => $request->input('mobile'),
           'web' => $request->input('web'),
           'domain' => $request->input('domain'),

           'type' => $request->input('type'),
           'status' => $request->input('status'),
           'package' => $request->input('package'),
           'max_users' => $request->input('max_users'),
           'crm_status' => $request->input('crm_status'),
           'auth_type' => $request->input('auth_type')
          

        ]);


     if ($query) {
         return redirect('accounts')->with('success', 'Account has been Successfully Inserted');
  
        // Alert::success('Success', 'You\'ve Successfully Inserted');


        // return redirect('customer');

     } else {
        return back()->with('fail', 'Something went wrong');
     }
  }


  public function getAccountdata(Request $request)
  {

      $postid = $request->postid;
   
         $row = DB::table('accounts')
         ->where('id', $postid)->first();
    
         $data = ['Info' => $row];
    

      return view('admin.getAccountdata', $data);
  }




  function ajax_request(Request $request)
  {

  

      $query=DB::table('accounts')->insert([
         //  'first' => $request->Code, //This Code coming from ajax request
         //  'description' => $request->Chief, //This Chief coming from ajax request

         'first_name' => $request->fname, //db column name followed by input field name
         'last_name' => $request->lname,
         'company_name' => $request->company_name,
         'address_1' => $request->address_1,
         'address_2' => $request->address_2,
         'postcode' => $request->postcode,
         'suburb' => $request->suburb,
         'country' => $request->country,
         'email' => $request->email,
         'phone' => $request->phone,
         'mobile' => $request->mobile,
         'web' => $request->web,
         'domain' => $request->domain,

         'type' => $request->type,
         'status' => $request->status,
         'package' => $request->package,
         'max_users' => $request->max_users,
         'crm_status' => $request->crm_status,
         'auth_type' => $request->auth_type
      ]);


     
  }


 



}
