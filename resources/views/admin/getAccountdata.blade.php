<div class="container">



    <div class="row">
        <div class="col-md-4">&nbsp;</div>
             <div class="col-md-6">
                  <label class="control-label h4" style="font-family:copperplate;color:navy;">{{Str::upper($Info->first_name)}}&nbsp;{{Str::upper($Info->last_name)}}</label>
              </div>
        <div class="col-md-1">&nbsp;</div>
        &nbsp;
        <div class="col-md-2">
         
         </div>
     </div>
        
         
         <hr>


        <div style="font-size: 9pt">

         <div class="row">&nbsp;</div>


         <div class="row">           
            <div class="col-md-1"></div>
                  
            <div class="col-md-2"><label class="control-label">Company Name:</label></div>
             <div class="col-md-3">{{$Info->company_name}}</div>
             
              <div class="col-md-2"><label class="control-label">Address:</label></div>
             <div class="col-md-3">{{$Info->address_1}}&nbsp;{{$Info->address_2}}&nbsp;{{$Info->suburb}}</div>
              
             <div class="col-md-1"></div>
             
          
         </div>


         <div class="row">&nbsp;</div>


         <div class="row">           
            <div class="col-md-1"></div>
                  
            <div class="col-md-2"><label class="control-label">Country:</label></div>
             <div class="col-md-3">{{$Info->country}}</div>
             
              <div class="col-md-2"><label class="control-label">Post Code:</label></div>
             <div class="col-md-3">{{$Info->postcode}}</div>
              
             <div class="col-md-1"></div>
             
          
         </div>


         <div class="row">&nbsp;</div>


         <div class="row">           
            <div class="col-md-1"></div>
                  
            <div class="col-md-2"><label class="control-label">Email:</label></div>
             <div class="col-md-3">{{$Info->email}}</div>
             
              <div class="col-md-2"><label class="control-label">Web:</label></div>
             <div class="col-md-3">{{$Info->web}}</div>
              
             <div class="col-md-1"></div>
             
          
         </div>


         
         <div class="row">&nbsp;</div>


         <div class="row">           
            <div class="col-md-1"></div>
                  
            <div class="col-md-2"><label class="control-label">Domain:</label></div>
             <div class="col-md-3">{{$Info->domain}}</div>
             
              <div class="col-md-2"><label class="control-label">Package:</label></div>
             <div class="col-md-3">{{$Info->package}}</div>
              
             <div class="col-md-1"></div>
             
          
         </div>


         <div class="row">&nbsp;</div>


         <div class="row">           
            <div class="col-md-1"></div>
                  
            <div class="col-md-2"><label class="control-label">Mobile:</label></div>
             <div class="col-md-3">{{$Info->mobile}}</div>
             
              <div class="col-md-2"><label class="control-label">Phone:</label></div>
             <div class="col-md-3">{{$Info->phone}}</div>
              
             <div class="col-md-1"></div>
             
          
         </div>



         <div class="row">&nbsp;</div>


         <div class="row">           
            <div class="col-md-1"></div>
                  
            <div class="col-md-2"><label class="control-label">Type:</label></div>
             <div class="col-md-3">
                @if ($Info->type==0)  
                Basic
                @else
                Pro
                @endif
             </div>
             
              <div class="col-md-2"><label class="control-label">Status:</label></div>
             <div class="col-md-3">
                @if ($Info->status==0)  
                InActive
                @else
                Active
                @endif
             </div>
              
             <div class="col-md-1"></div>
             
          
         </div>


        </div>


</div>