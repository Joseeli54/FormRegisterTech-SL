@extends('layout.app')
@section('title', 'No Auth')

@section('content')

		<br>
        <div class="text-center subreport-info">
            You do not have access to this site. Please, if you wish to access, you will have to write to the Technical Administrator to give him the authorization and be able to enter the route.
        </div>

        <br> <br>

       <div class="col-md-12">
      <div class="card mb-3">
          <div class="card-header" style="background-color: #f91c52; color: white; border: #f91c52">
              <i class="fa fa-envelope"></i>
              Write us!
          </div>
          
          <div class="card-body">
            <form action="">
              <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Email Adress">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject">
                    </div>
                   <button class="btn btn-sl-color float-left">Send</button>
                </div>

                <div class="form-group message">
                    <textarea placeholder="Message..." class="form-control" rows="5"></textarea>
                </div>
              </div>
            </form>
          </div>
      </div>
  </div>

       <br> <br>
@endsection