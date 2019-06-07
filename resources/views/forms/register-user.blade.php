@extends('layout.app')
@section('title', 'User')

@section('content')

	@if(Auth::user()->is_employee)
   <div class="options">
	<button class="btn" onclick="OpenorClose()"> 
      <span id="plus" class="fa fa-plus" aria-hidden="true"></span>
      <span id="minus" class="fa fa-minus" aria-hidden="true" style="display:none"></span>       INSTRUCTION
    </button>
   </div> 

   <div id="intro" style="display: none">
     <p class="subreport-info justify"> 
		In this form the user data of the company will be filled. It is important to clarify that only administrators will have permission to register users. Press the button below to register the users. </p>
   </div>
   
	   <div class="options">
	   	 <button class="btn"> 
         <span class="fa fa-edit" aria-hidden="true"></span> 
         USER REGISTRATION 
         </button>
	   </div>

	   <div class="subreport-info col">
				   	<form action="/user" class="form-group" method="POST" enctype="multipart/form-data" onsubmit="return validar();">
				   	@csrf

				   	<h4> User Data </h4>
	   		        <br>
					
					<div class="form-group">
	   		        <select class="form-control select-subscription" name="selRole">
                          <option value="-1" disabled>Role</option>
                          <option value="0">User</option>
                          <option value="1">Admin</option>
                    </select>
                    </div>
	   		        
	   		        <label for="">Name</label>
					<div class="form-group">
						<input id="name" type="text" class="form-control input-lg" name= "name" placeholder="Name" />
					</div>

				    <label for=""> Last Name</label>
					<div class="form-group">
					    <input id= "lastName" type="text" class="form-control input-lg" name= "lastName" placeholder="Last Name" />
					</div>

 				    <label for=""> Email</label>
 					<div class="form-group">
					    <input id= "email" type="email" class="form-control input-lg" name= "email" placeholder="Email"/>
					</div>

				    <label for=""> Company Name</label>
					<div class="form-group">
					    <input id= "company"  type="text" class="form-control input-lg" name= "company" placeholder="Company"/>
					</div>

				    <label for=""> Employees</label>
					<div class="form-group">
					    <textarea id = "employees" type="text" class="form-control input-lg" name= "employees" placeholder="Employees" rows="3"/></textarea>
					</div>


				    <label for=""> Problems</label>
					<div class="form-group">
					    <textarea id = "problems" type="text" class="form-control input-lg" name= "problems" placeholder="Problems" rows="3"/></textarea>
					</div>

					<label for=""> Industry</label>
					<div class="form-group">
					    <input id = "industry" type="text" class="form-control input-lg" name= "industry" placeholder="Industry"/>
					</div>

					<label for=""> Password </label>
					<div class="form-group">
					    <input id = "password" type="password" class="form-control input-lg" name= "password" placeholder="Password" onchange="compare()"/>
					</div>

					<label for=""> Repeat Password </label>
					<div class="form-group">
					    <input id = "repeatpassword" type="password" class="form-control input-lg" name= "repeatpassword" placeholder="Password" onchange="compare()"/>
					</div>

                    <br>
	                <h4> Subscription Data</h4>
	                <br>
					
					<div class="form-group" style="padding-left: 6%">
					
					<select class="form-control select-subscription" name="selType">
                          <option value="-1" disabled>Type</option>
                          <option value="0">Design</option>
                          <option value="1">Video</option>
                          <option value="2">Hibrid</option>
                    </select>

					<select class="form-control select-subscription" name="selTime">
                          <option value="-1" disabled>Plan</option>
                          <option value="0">Annual</option>
                          <option value="1">Month</option>
                    </select>

                    <select class="form-control select-subscription" name="selCurrency">
                          <option value="-1" disabled>Currency</option>
                          <option value="0">USD</option>
                          <option value="1">EUR</option>
                          <option value="2">GBP</option>
                    </select>
                    </div>

                    <label for="">Name</label>
					<div class="form-group">
						<input id="name_sub" type="text" class="form-control input-lg" name= "name_sub" placeholder="Name" />
					</div>
					
					<label for="">Quantity</label>
                    <div class="form-group">
						<input id="quantity" type="number" class="form-control input-lg" name= "quantity" placeholder="Quality" />
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-sl">
							Save
						</button>
					</div>

				</form>
	   </div>
		@else
		    <br>
        <div class="text-center subreport-info">
            You have not access this site
        </div>
        @endif

       <br> <br>

       <script src="{{ asset('js/validar_user.js') }}"></script>
@endsection