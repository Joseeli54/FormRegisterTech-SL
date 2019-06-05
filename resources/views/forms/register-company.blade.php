@extends('layout.app')
@section('title', 'Company')

@section('content')

	<div class="options">
	<button class="btn" onclick="OpenorClose()"> 
      <span id="plus" class="fa fa-plus" aria-hidden="true"></span>
      <span id="minus" class="fa fa-minus" aria-hidden="true" style="display:none"></span>       INSTRUCTION
    </button>
   </div> 

   <div id="intro" style="display: none">
     <p class="subreport-info justify"> 
		In this form the company data will be filled. It is important to clarify that only administrators will have permission to register users. Press the button below to register the users. </p>
   </div>

   <div class="options">
	   	 <button class="btn"> 
         <span class="fa fa-edit" aria-hidden="true"></span> 
         USER REGISTRATION 
         </button>
	   </div>

	   <div class="subreport-info col">
				   	<form action="/company" class="form-group" method="POST" enctype="multipart/form-data" onsubmit="return validar();">
				   	@csrf
	   		        
	   		        <label for="">User ID</label>
					<div class="form-group">
						<input id="user_id" type="text" class="form-control input-lg" name= "user_id" placeholder="User ID" />
					</div>

				    <label for="">Name</label>
					<div class="form-group">
					    <input id= "name" type="text" class="form-control input-lg" name= "name" placeholder="Name" />
					</div>

 				    <label for="">Phone</label>
 					<div class="form-group">
					    <input id= "phone" type="numeric" class="form-control input-lg" name= "phone" placeholder="Phone"/>
					</div>

				    <label for="">Email</label>
					<div class="form-group">
					    <input id= "email"  type="text" class="form-control input-lg" name= "email" placeholder="Email"/>
					</div>

				    <label for="">Find Out</label>
					<div class="form-group">
					    <textarea id = "findout" type="text" class="form-control input-lg" name= "findout" placeholder="Find Out" rows="3"/></textarea>
					</div>


				    <label for=""> Obstacle</label>
					<div class="form-group">
					    <textarea id = "obstacle" type="text" class="form-control input-lg" name= "obstacle" placeholder="Obstacle" rows="3"/></textarea>
					</div>

					<label for=""> Revenueve</label>
					<div class="form-group">
					    <input id = "revenueve" type="text" class="form-control input-lg" name= "revenueve" placeholder="Revenueve"/>
					</div>

					<label for=""> Team </label>
					<div class="form-group">
					    <input id = "team" type="text" class="form-control input-lg" name= "team" placeholder="Team"/>
					</div>

					<label for=""> Bussines </label>
					<div class="form-group">
					    <input id = "business" type="text" class="form-control input-lg" name= "business" placeholder="Business"/>
					</div>

					<div class="form-group">
						<button type="submit" class="btn btn-sl">
							Save
						</button>
					</div>

				</form>
	   </div>
       <br> <br>
	<script src="{{ asset('js/validar_company.js') }}"></script>

@endsection