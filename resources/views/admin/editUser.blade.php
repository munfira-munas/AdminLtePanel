@extends('layouts.master')

@section('title', 'Edit User')

@section('pageHeading', 'Edit User')

@section('content')

{{-- @if(Session::get('fail'))
<div class="alert alert-danger">
{{Session::get('fail')}}
</div>
@endif --}}

<form action="{{ url('updUser/'.$Info->id) }}" method="POST">
    @csrf
    @method('PUT')

<div class="container">

    {{-- <input type="text" id="account_id" name="account_id" value="{{$Info->id}}" class="form-control"/><br> --}}

    {{-- <input type="hidden" name="uid" value="{{$Info->id}}"> --}}


    <div class="row">
        {{-- <div class="col-md-2">
      <label for="company_name">Account:</label>
    
    </div>
    
    <div class="col-md-4">
        {{-- <input type="text" id="company_name" name="company_name" value="{{$Info->company_name}}" class="form-control" readonly="readonly" required/><br> --}}
      
        {{-- <select class="form-select"  id="account_id" name="account_id">
       
            <option value="">
         
            </option>
        
        
            </select>
       
       
        <span style="color:red">@error('company_name'){{$message}}@enderror</span> --}}

   
    {{-- </div> --}}
     {{-- --}} 
    
    <div class="col-md-2">
        <label for="name">Email:</label>
      
      </div>
      
      <div class="col-md-10">
          <input type="text" id="email" name="email" value="{{$Info->email}}" class="form-control" required/><br>
          <span style="color:red">@error('email'){{$message}}@enderror</span>
      </div>
      
    </div>

<div class="row">
    <div class="col-md-2">
  <label for="fname">First Name:</label>

</div>

<div class="col-md-4">
    <input type="text" id="fname" name="fname" value="{{$Info->first_name}}" class="form-control" required/><br>
    <span style="color:red">@error('fname'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="lname">Last Name:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="lname" name="lname" value="{{$Info->last_name}}" class="form-control" required/><br>
      <span style="color:red">@error('lname'){{$message}}@enderror</span>
  </div>
  
</div>




<div class="row">
    <div class="col-md-2">
  <label for="phone">Phone:</label>

</div>

<div class="col-md-4">
    <input type="text" id="phone" name="phone" value="{{$Info->phone}}" class="form-control" /><br>
    <span style="color:red">@error('phone'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="mobile">Mobile:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="mobile" name="mobile" value="{{$Info->first_name}}" class="form-control" /><br>
      <span style="color:red">@error('mobile'){{$message}}@enderror</span>
  </div>
  
</div>





<div class="row">
    <div class="col-md-2">
  <label for="designation">Designation:</label>

</div>

<div class="col-md-4">
    <input type="text" id="designation" name="designation" value="{{$Info->designation}}" class="form-control" /><br>
    <span style="color:red">@error('designation'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="type">Type:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="type" name="type" value="{{$Info->type}}" class="form-control"/><br>
      <span style="color:red">@error('type'){{$message}}@enderror</span>
  </div>
  
</div>


<div class="row">
    <div class="col-md-2">
  <label for="logged_code">Logged Code:</label>

</div>

<div class="col-md-4">
    <input type="text" id="logged_code" name="logged_code" value="{{$Info->logged_code}}" class="form-control"/><br>
    <span style="color:red">@error('logged_code'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="confirmation_code">Confirmation Code:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="confirmation_code" name="confirmation_code" value="{{$Info->confirmation_code}}" class="form-control" required/><br>
      <span style="color:red">@error('confirmation_code'){{$message}}@enderror</span>
  </div>
  
</div>


<div class="row">
    <div class="col-md-2">
        <label for="name">Status:</label>
      
      </div>
      
      <div class="col-md-4">
        <input type="radio" value="0" id="inactive" name="status" checked>
        <label for="inactive">Active</label>
        
        &nbsp; &nbsp;
        
        <input type="radio" value="1" id="active" name="status">
        <label for="active">Inactive</label>
      </div>
      
 

<div class="col-md-2">
    <label for="auth_type">Auth Type:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="auth_type" name="auth_type" value="{{$Info->auth_type}}" class="form-control" required/><br>
      <span style="color:red">@error('auth_type'){{$message}}@enderror</span>
  </div>
  
</div>



<div class="row">
    <div class="col-md-2">
  <label for="password">Password:</label>

</div>

<div class="col-md-4">
    <input type="password" id="password" name="password" value="{{$Info->password}}" class="form-control" /><br>
    <span style="color:red">@error('password'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="confirm_password">Confirm Password:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="password" id="confirm_password" name="confirm_password" value="{{$Info->password}}" class="form-control"/><br>
      <span style="color:red">@error('confirm_password'){{$message}}@enderror</span>
  </div>
  
</div>



<div class="row">
    <div class="col-md-5"></div>

    <div class="col-md-3">

  <button type="submit" class="btn btn-primary">Update</button>&nbsp;
  <button type="reset" class="btn btn-danger">Reset</button>

    </div>

    <div class="col-md-4"></div>

    
</div>

  <div class="row">&nbsp;</div>

</form>









@endsection