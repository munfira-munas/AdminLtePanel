@extends('layouts.master')

@section('title', 'User Accounts')

@section('pageHeading', 'Manage Accounts')

@section('breadCrumbs')
    <li class="breadcrumb-item active">Accounts</li>
@endsection


@section('content')

    

    <a href="{{ url('/createAccount') }}" class="btn btn-primary btn-sm">Add New Account</a>

    <a href="{{ url('/createUser') }}" class="btn btn-primary btn-sm">Add User Account</a>


    {{-- <button type="button" class="btn btn-primary btn-sm" data-bs-toggle="modal" data-bs-target="#accountModal">
        Add 
    </button> --}}

    <div class="container">


    </div>

    <div class="col-md-12">
        <br>

        <table class="table table-light customer_datatable" style="font-size:10pt; border-color: #000;">
            <thead style="font-size:10pt;border-color: #000;">
                <th>Id</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Company Name</th>
                <th>Suburb</th>
                {{-- <th>Country</th> --}}
                <th>Users</th>


                <th>Action</th>


            </thead>

            <tbody  style="font-size:10pt;border-color: #000;"></tbody>

        </table>

    </div>

@endsection

@if (Session::get('success'))
    <script type="text/javascript">
        function massge() {
            Swal.fire(
                'Good job!',
                '{{ Session::get('success') }}',
                'success'
            );
        }

        window.onload = massge;
    </script>
@endif


{{-- <div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="accountModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #34495E; border-color: #34495E;color:white">
                <h5 class="modal-title" id="accountModalLabel">Add New Order</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form action="" method="POST">
                    @csrf
                
                
                
                {{-- <div class="container"> --}}
                
                {{-- <div class="row">
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
                    <input type="text" id="auth_type" name="auth_type" value="{{old('auth_type')}}" class="form-control" required/><br>
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
                    <input type="radio" value="0" id="type" name="type" checked>
                    <label for="basic">Basic</label>
                    
                    &nbsp; &nbsp;
                    
                    <input type="radio" value="1" id="type" name="type">
                    <label for="pro">Pro</label>
                </div>
                
                <div class="col-md-2">
                    <label for="name">Status:</label>
                  
                  </div>
                  
                  <div class="col-md-4">
                    <input type="radio" value="0" id="status" name="status" checked>
                    <label for="inactive">Active</label>
                    
                    &nbsp; &nbsp;
                    
                    <input type="radio" value="1" id="status" name="status">
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
               



                    {{-- <button type="submit" class="btn btn-success">Submit</button> --}}

            {{-- </div>
            <div class="modal-footer" style="background-color: #34495E; border-color: #34495E;color:white">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="submitForm" class="btn btn-primary">Save changes</button>
            </div>

            </form>
        </div>
    </div>
</div>
</div> --}} 




<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header ">


                {{-- <ul class="nav nav-tabs mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                      <a
                        class="nav-link active"
                        id="ex1-tab-1"
                        data-mdb-toggle="tab"
                        href="#ex1-tabs-1"
                        role="tab"
                        aria-controls="ex1-tabs-1"
                        aria-selected="true"
                        >Tab 1</a
                      >
                    </li>
                    <li class="nav-item" role="presentation">
                      <a
                        class="nav-link"
                        id="ex1-tab-2"
                        data-mdb-toggle="tab"
                        href="#ex1-tabs-2"
                        role="tab"
                        aria-controls="ex1-tabs-2"
                        aria-selected="false"
                        >Tab 2</a
                      >
                    </li>
                    <li class="nav-item" role="presentation">
                      <a
                        class="nav-link"
                        id="ex1-tab-3"
                        data-mdb-toggle="tab"
                        href="#ex1-tabs-3"
                        role="tab"
                        aria-controls="ex1-tabs-3"
                        aria-selected="false"
                        >Tab 3</a
                      >
                    </li>
                  </ul> --}}
                  <!-- Tabs navs -->


                  
             


                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                {{-- <div class="tab-content" id="ex1-content">
                    <div
                      class="tab-pane fade show active"
                      id="ex1-tabs-1"
                      role="tabpanel"
                      aria-labelledby="ex1-tab-1"
                    >
                      Tab 1 content
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-2" role="tabpanel" aria-labelledby="ex1-tab-2">
                      Tab 2 content
                    </div>
                    <div class="tab-pane fade" id="ex1-tabs-3" role="tabpanel" aria-labelledby="ex1-tab-3">
                      Tab 3 content
                    </div>
                  </div> --}}


            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="submit" id="submit" class="btn btn-primary">Save changes</button> --}}
            </div>


        </div>
    </div>
</div>




<div class="modal fade" id="accountModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
               
                <h5 class="modal-title" id="exampleModalLabel"></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">



            </div>
            <div class="modal-footer" >
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                {{-- <button type="submit" id="submit" class="btn btn-primary">Save changes</button> --}}
            </div>


        </div>
    </div>
</div>


@if (Session::get('success'))
    <script type="text/javascript">
        function massge() {
            Swal.fire(
                'Success!',
                '{{ Session::get('success') }}',
                'success'
            );
        }

        window.onload = massge;
    </script>
@endif

@section('script')



    <script type="text/javascript">


        $(function() {
            var table = $('.customer_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('accounts') }}",

                columnDefs: [{
                        targets: 5,
                        data: 'id',
                        render: function(data, type, row, meta) {

                            return '<button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  onclick="showDetails(' +
                                row.id + ')">' + row.count + '</button>';

                        }
                    }

                    ,
                    {
                        targets: 6,
                        data: 'id',
                        render: function(data, type, row, meta) {

                            // return ' <a href="addUser/' + row.id +
                            //     '" id="edit"  class="btn btn-secondary btn-md"> Add Users</a>&nbsp<a href=" displayAccount/' +
                            //     row.id +
                            //     '" id="edit"  class="btn btn-primary btn-md"><i class="fas fa-eye"></i> View</a>&nbsp;<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#accountModal"  onclick="showAccountDetails(' +
                            //     row.id + ')">Show</button>';

                                return ' <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#accountModal"  onclick="showAccountDetails(' +
                                row.id + ')"><i class="fas fa-eye"></i></a></button>';


                        }
                    }

                ],


                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'first_name',
                        name: 'first_name'
                    },
                    {
                        data: 'last_name',
                        name: 'last_name'
                    },
                    {
                        data: 'company_name',
                        name: 'company_name'
                    },
                    {
                        data: 'suburb',
                        name: 'suburb'
                    },

                    // {
                    //     data: 'country',
                    //     name: 'country'
                    // },



                    {
                        data: 'new',
                        name: 'new',
                        orderable: false,
                        searchable: false
                    },


                    {
                        data: 'app',
                        name: 'app',
                        orderable: false,
                        searchable: false
                    },



                ]
            });
        });
    </script>



    <script>
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});


    $("#submitForm").click(function(e) {

    e.preventDefault();

        var fname = $("#fname").val();
        var lname = $("#lname").val();
        var company_name = $("#company_name").val();
        var email= $("#email").val();
        var address_1 = $("#address_1").val();
        var address_2 = $("#address_2").val();
        var postcode = $("#postcode").val();
        var suburb= $("#suburb").val();
        var country = $("#country").val();
        var auth_type = $("#auth_type").val();
        var phone = $("#phone").val();
        var mobile= $("#mobile").val();
        var type = $("#type").val();
        var status= $("#status").val();
        var package= $("#package").val();
        var max_users= $("#max_users").val();
        var web= $("#web").val();
        var domain= $("#domain").val();
        var crm_status= $("#crm_status").val();
        
    
        $.ajax({
            method: 'POST',
            url: "/ajax_request",
       
            data: {
                // "_token": "{{ csrf_token() }}",
                // Code: title,
                // Chief: details,

                fname: fname,
                lname: lname,
                company_name :company_name,
                email : email,
                address_1 :address_1,
                address_2:address_2,
                postcode:postcode,
                suburb:suburb,
                country:country,
                auth_type:auth_type,
                phone:phone,
                mobile:mobile,
                type:type,
                status:status,
                package:package,
                max_users:max_users,
                web:web,
                domain:domain,
                crm_status:crm_status

            },
            // data:data,
         
            success: function(data) {

                alert("hello");

                // $('#newform').trigger("reset");
         
            },
            error: function(error) {
                console.log(error)
            }
        });
    });


    </script>



    <script>
        function showDetails(postid) {

            $.ajax({
                url: '{{ route('getusersdata') }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    postid: postid
                },
                success: function(data) {

                    $('.modal-body').html(data)

                },

            });


        }



        function showAccountDetails(postid) {

            $.ajax({
                url: '{{ route('getAccountdata') }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                },
                data: {
                    postid: postid
                },
                success: function(data) {

                    $('.modal-body').html(data)

                },

            });


        }


  


        function myFunction(x) {
            event.preventDefault();
            const url = $(x).attr('href');


            // var storyId = $(this).find("a[href]").attr('href');
            //  console.log(storyId);


            Swal.fire({
                title: 'Are you sure?',
                // text: 'This record and it`s details will be permanantly deleted!',
            icon: 'question',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            denyButtonText: `No`,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#000',

                // cancelButtonText: 'Cancelll',

                cancelButtonText: 'Cancel',
                cancelButtonAriaLabel: 'Thumbs down'

            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = url;
                } else if (result.isDenied) { //when deny button is pressed
                    Swal.fire('Changes are not saved', '', 'info')
                }

            });
        }

        function deleteFunction(x) {
            event.preventDefault();
            const url = $(x).attr('href');

            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showDenyButton: true,
                denyButtonText: '<i class="fa fa-thumbs-down"></i>',
                confirmButtonText: '<i class="fa fa-thumbs-up"></i>',
                icon: 'warning',

                //  timer: 1500

            }).then((result) => {

                if (result.isConfirmed) {
                    window.location.href = url;
                } else if (result.isDenied) {
                    Swal.fire('Not Deleted', '', 'info')
                }

            });
        }



        function deleteUser(x) {

  
            event.preventDefault();
            const url = $(x).attr('href');
           alert(url);
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                showDenyButton: true,
                denyButtonText: '<i class="fa fa-thumbs-down"></i>',
                confirmButtonText: '<i class="fa fa-thumbs-up"></i>',
                icon: 'warning',

                //  timer: 1500

            }).then((result) => {

                if (result.isConfirmed) {
                    window.location.href = url;
                } else if (result.isDenied) {
                    Swal.fire('Not Deleted', '', 'info')
                }

            });
        }


        function editUser(x) {
            event.preventDefault();

        
            const url = $(x).attr('href');

        
            // var storyId = $(this).find("a[href]").attr('href');
            //  console.log(storyId);


            Swal.fire({
                title: 'Are you sure?',
                // text: 'This record and it`s details will be permanantly deleted!',
            icon: 'question',
            showDenyButton: true,
            showCancelButton: true,
            confirmButtonText: 'Yes',
            denyButtonText: `No`,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#000',

                // cancelButtonText: 'Cancelll',

                cancelButtonText: 'Cancel',
                cancelButtonAriaLabel: 'Thumbs down'

            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = url;
                } else if (result.isDenied) { //when deny button is pressed
                    Swal.fire('Changes are not saved', '', 'info')
                }

            });
        }




    //      function deleteItem(x){
    //     event.preventDefault();
    //         const url = $(x).attr('href');
        
    //     Swal.fire({
    //             title: 'Are you sure?',
    //             // text: 'This record and it`s details will be permanantly deleted!',
    //         icon: 'question',
    //         showDenyButton: true,
    //         showCancelButton: true,
    //         confirmButtonText: 'Yes',
    //         denyButtonText: `No`,
    //             confirmButtonColor: '#3085d6',
    //             cancelButtonColor: '#000',

    //             // cancelButtonText: 'Cancelll',

    //             cancelButtonText: 'Cancel',
    //             cancelButtonAriaLabel: 'Thumbs down'

    //         }).then((result) => {
           
    //         if (result.isConfirmed) {
                  

                    
    //         $.ajax({
    //             method: 'POST',
    //             // type:'DELETE',
    //             url:url,
    //             // data:{
    //             //     "_token": "{{ csrf_token() }}",
    //             // },
    //             success:function(data) {

    //                 if (data){
    //                     Swal.fire(
    //              'Good job!',
    //             'You clicked the button!',
    //               'success'
    //             )
    //                     // $("#"+id+"").remove(); // you can add name div to remove
    //                 }

    //             }
    //         });
    //             } else if (result.isDenied) { //when deny button is pressed
    //                 Swal.fire('Changes are not saved', '', 'info')
    //             }

    //         }

    // }




    $(function() {
            var table = $('.user_datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('getusersdata') }}",

                columnDefs: [{
                        targets: 5,
                        data: 'id',
                        render: function(data, type, row, meta) {

                            return '<button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal"  onclick="showDetails(' +
                                row.id + ')">' + row.count + '</button>';

                        }
                    }

                    ,
                    {
                        targets: 6,
                        data: 'id',
                        render: function(data, type, row, meta) {

                            // return ' <a href="addUser/' + row.id +
                            //     '" id="edit"  class="btn btn-secondary btn-md"> Add Users</a>&nbsp<a href=" displayAccount/' +
                            //     row.id +
                            //     '" id="edit"  class="btn btn-primary btn-md"><i class="fas fa-eye"></i> View</a>&nbsp;<button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#accountModal"  onclick="showAccountDetails(' +
                            //     row.id + ')">Show</button>';

                                return ' <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#accountModal"  onclick="showAccountDetails(' +
                                row.id + ')"><i class="fas fa-eye"></i></a></button>';


                        }
                    }

                ],


                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'first_name',
                        name: 'first_name'
                    },
                    {
                        data: 'last_name',
                        name: 'last_name'
                    },
                    {
                        data: 'company_name',
                        name: 'company_name'
                    },
                    {
                        data: 'suburb',
                        name: 'suburb'
                    },

                    // {
                    //     data: 'country',
                    //     name: 'country'
                    // },



                    {
                        data: 'new',
                        name: 'new',
                        orderable: false,
                        searchable: false
                    },


                    {
                        data: 'app',
                        name: 'app',
                        orderable: false,
                        searchable: false
                    },



                ]
            });
        });


      
    </script>




@endsection
