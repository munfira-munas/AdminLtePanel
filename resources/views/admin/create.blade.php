@extends('layouts.master')

@section('title', 'Add Account')

@section('pageHeading', 'Add Account')

@section('content')

{{-- @if(Session::get('fail'))
<div class="alert alert-danger">
{{Session::get('fail')}}
</div>
@endif --}}

<form action="saveAccount" method="post">
    @csrf



<div class="container">

<div class="row">
    <div class="col-md-2">
  <label for="fname">First Name:</label>

</div>

<div class="col-md-4">
    <input type="text" id="fname" name="fname" value="{{old('fname')}}" class="form-control" required/><br>
    <span style="color:red">@error('fname'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="lname">Last Name:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="lname" name="lname" value="{{old('lname')}}" class="form-control" required/><br>
      <span style="color:red">@error('lname'){{$message}}@enderror</span>
  </div>
  
</div>



<div class="row">
    <div class="col-md-2">
  <label for="company_name">Company Name:</label>

</div>

<div class="col-md-4">
    <input type="text" id="company_name" name="company_name" value="{{old('company_name')}}" class="form-control" required/><br>
    <span style="color:red">@error('company_name'){{$message}}@enderror</span>
</div>


<div class="col-md-2">
    <label for="name">Email:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="email" name="email" value="{{old('email')}}" class="form-control" required/><br>
      <span style="color:red">@error('email'){{$message}}@enderror</span>
  </div>
  
</div>


<div class="row">
    <div class="col-md-2">
  <label for="address_1">Address 1:</label>

</div>

<div class="col-md-4">
    <input type="text" id="address_1" name="address_1" value="{{old('address_1')}}" class="form-control" /><br>
    <span style="color:red">@error('address_1'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="address_2">Address 2:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="address_2" name="address_2" value="{{old('address_2')}}" class="form-control"/><br>
      <span style="color:red">@error('address_2'){{$message}}@enderror</span>
  </div>
  
</div>



<div class="row">
    <div class="col-md-2">
  <label for="postcode">Post Code:</label>

</div>

<div class="col-md-4">
    <input type="text" id="postcode" name="postcode" value="{{old('postcode')}}" class="form-control" /><br>
    <span style="color:red">@error('postcode'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="suburb">Suburb:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="suburb" name="suburb" value="{{old('suburb')}}" class="form-control"/><br>
      <span style="color:red">@error('suburb'){{$message}}@enderror</span>
  </div>
  
</div>



<div class="row">
    <div class="col-md-2">
  <label for="country">Country:</label>

</div>

<div class="col-md-4">
    <input type="text" id="country" name="name" value="{{old('country')}}" class="form-control"/><br>
    <span style="color:red">@error('country'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
  <label for="auth_type">Auth Type:</label>

</div>

<div class="col-md-4">
  
    <select class="form-select" id="auth_type" name="auth_type" value="{{old('auth_type')}}" required>
      <option value=""></option>
      <option value="Google">Google</option>
      <option value="Facebook">Facebook</option>
      <option value="Gmail">Gmail</option>
     
    </select>
    <span style="color:red">@error('auth_type'){{$message}}@enderror</span>
</div>
</div>



<div class="row">
    <div class="col-md-2">
  <label for="phone">Phone:</label>

</div>

<div class="col-md-4">
    <input type="text" id="phone" name="phone" value="{{old('phone')}}" class="form-control" /><br>
    <span style="color:red">@error('phone'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="mobile">Mobile:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="mobile" name="mobile" value="{{old('mobile')}}" class="form-control" /><br>
      <span style="color:red">@error('mobile'){{$message}}@enderror</span>
  </div>
  
</div>







<div class="row">
    <div class="col-md-2">
  <label for="name">Type:</label>

</div>

<div class="col-md-4">
    <input type="radio" value="0" id="basic" name="type" checked>
    <label for="basic">Basic</label>
    
    &nbsp; &nbsp;
    
    <input type="radio" value="1" id="pro" name="type">
    <label for="pro">Pro</label>
</div>

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
  
</div>

<br>

<div class="row">
    <div class="col-md-2">
  <label for="package">Package:</label>

</div>

<div class="col-md-4">
    <input type="text" id="package" name="package" value="{{old('package')}}" class="form-control" /><br>
    <span style="color:red">@error('package'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="max_users">Max Users:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="max_users" name="max_users" value="{{old('max_users')}}" class="form-control" required/><br>
      <span style="color:red">@error('max_users'){{$message}}@enderror</span>
  </div>
  
</div>






<div class="row">
    <div class="col-md-2">
  <label for="name">Web:</label>

</div>

<div class="col-md-4">
    <input type="text" id="web" name="web" value="{{old('web')}}" class="form-control"/><br>
    <span style="color:red">@error('web'){{$message}}@enderror</span>
</div>

<div class="col-md-2">
    <label for="domain">Domain:</label>
  
  </div>
  
  <div class="col-md-4">
      <input type="text" id="domain" name="domain" value="{{old('domain')}}" class="form-control" required/><br>
      <span style="color:red">@error('domain'){{$message}}@enderror</span>
  </div>
  
</div>



<div class="row">
    <div class="col-md-2">
  <label for="crm_status">CRM Status:</label>

</div>

<div class="col-md-10">
    <input type="text" id="crm_status" name="crm_status" value="{{old('crm_status')}}" class="form-control" required/><br>
    <span style="color:red">@error('crm_status'){{$message}}@enderror</span>
</div>


  
</div>


<div class="row">
    <div class="col-md-5"></div>

    <div class="col-md-3">
  <button type="submit" class="btn btn-success">Submit</button>
  <button type="reset" class="btn btn-danger">Reset</button>
    </div>

  <div class="col-md-4"></div>

  <div class="row">&nbsp;</div>

</form>


</div>







@endsection