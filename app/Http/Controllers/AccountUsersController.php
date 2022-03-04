<?php

namespace App\Http\Controllers;

use App\Models\AccountUsers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class AccountUsersController extends Controller
{
    public function getusersdata(Request $request)
    {

        $postid = $request->postid;
        $data = [
            'list' => DB::table('account_users')
                ->where('account_users.account_id', $postid)
                ->get()
            
        ];

       return view('admin.getdata', $data);
    }




    // function addUser($id)
    // {
  
    //    $row = DB::table('accounts')
    //    ->where('id', $id)->first();
  
    //    $data = ['Info' => $row];

  
    //    return view('admin.createUser', $data); //return edit page with data
  
  
    // }


    public function  createUser()
    {
 
       $data = array(
          'list' => DB::table('accounts')
 
     
             ->get() //to display details in the table
       );
 
    
 
       // return view('customer.addorder', $data);
 
       return view('admin.createUser',$data);
    }
 



    function saveUser(Request $request)
    {
  
       // return $request->input();

      //  dd($request->all());

      $pw=$request->input('password');
      $password=  sha1($pw);
  
       $request->validate([
          'fname' => 'required',
          'lname' => 'required',
          'email' => 'required|email|unique:account_users',
          'password' => 'required|min:4| max:7',
          'confirm_password' => 'required|min:4| max:7|same:password',
      
  
       ]);

  
       $query = DB::table('account_users')
          ->insert([
             'first_name' => $request->input('fname'), //db column name followed by input field name
             'last_name' => $request->input('lname'),

             'email' => $request->input('email'),
             'phone' => $request->input('phone'),
             'mobile' => $request->input('mobile'),
             'designation' => $request->input('designation'),
             'type' => $request->input('type'),
  
             'logged_code' => $request->input('logged_code'),
             'confirmation_code' => $request->input('confirmation_code'),
             'password' => $password,
           
             'status' => $request->input('status'),
             'auth_type' => $request->input('auth_type'),
             'account_id' => $request->input('account_id'),
            
  
          ]);
  

  
       if ($query) {
           return redirect('accounts')->with('success', 'Account User has been Successfully Inserted');
    
       } 
       
       else {
          return back()->with('fail', 'Something went wrong');
       }
    }
  


    function deleteUser($id)
    {
     
       $delete = DB::table('account_users')
          ->where('id', $id)
          ->delete(); //no need to pass anything inside ()
       return redirect('accounts')->with('success', 'Record deleted successfully'); //route name
 
    }


    
function editUser($id)
{

   $row = DB::table('account_users')->where('id', $id)->first();
   $data = ['Info' => $row];

   return view('admin.editUser', $data); //return edit page with data

  

}





function updateUser(Request $request)
{

  

   $request->validate([
      'fname' => 'required',
      'lname' => 'required',
      'email' => 'required|email',
      'password' => 'required|min:4| max:7',
      'confirm_password' => 'required|min:4| max:7|same:password',

   ]);


   dd($request->all());

   $updating = DB::table('account_users')
      ->where('id', $request->input('uid')) //the name value
      ->update([
         'first_name' => $request->input('fname'), //db column name followed by input field name
         'last_name' => $request->input('lname'),

         'email' => $request->input('email'),
         'phone' => $request->input('phone'),
         'mobile' => $request->input('mobile'),
         'designation' => $request->input('designation'),
         'type' => $request->input('type'),

         'logged_code' => $request->input('logged_code'),
         'confirmation_code' => $request->input('confirmation_code'),
         'password' => $request->input('password'),
       
         'status' => $request->input('status'),
         'auth_type' => $request->input('auth_type'),
      ]);



   if ($updating) {
      return redirect('acconts')->with('success', 'Data has been Updated');

      // Alert::success('Success', 'Record Updated Successfully');  
      // return redirect('customer');

   } else {
      return back()->with('fail', 'Something went wrong');
   }
}





public function updUser(Request $request, $id)
{
    $user = AccountUsers::find($id);
    $user->first_name = $request->input('fname');
    $user->last_name = $request->input('lname');

    $user->email =$request->input('email');
    $user->phone =$request->input('phone');
    $user-> mobile =$request->input('mobile');
    $user->designation=$request->input('designation');
    $user->type = $request->input('type');

    $user->logged_code =$request->input('logged_code');
    $user->confirmation_code =$request->input('confirmation_code');
    $user->password= $request->input('password');
    $user-> status =$request->input('status');
    $user-> auth_type= $request->input('auth_type');
  
    $user->update();
    return redirect('accounts')->with('success', 'Data has been Updated');
}




function inactivateUser($id)
{
  

      $updating = DB::table('account_users')
      ->where('id', $id) //the name value
      ->update([
         'status' => 0,
        
      ]);

   return redirect('accounts')->with('success', 'User Deactivated successfully'); //route name


}


function activateUser($id)
{
  

      $updating = DB::table('account_users')
      ->where('id', $id) //the name value
      ->update([
         'status' => 1,
        
      ]);

   return redirect('accounts')->with('success', 'User Activated successfully'); //route name


}



public function act(Request $request, $id)
{
  
   // $postid = $request->id;
   $updating = DB::table('account_users')
   ->where('id', $id) //the name value
   ->update([
      'status' => 1,
     
   ]);


   //print 1;

   //  return response()->json(array('success' => true));

   // return response()->json('success');

   //   return redirect('accounts')->with('success', 'User Activated successfully'); //route name


   //   return redirect('accounts')->with('success'); //route name



}



  
}







// 'list' =>DB::table('account_users')
// // ->join('accounts', function ($join) {
// // $join->on('account_users.account_id', '=', 'accounts.id')
//      ->where('account_users.account_id', $postid)
// // })
// ->get()