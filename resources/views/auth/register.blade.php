@extends('layouts.dashboard')

@section('section')
<div class="container">
    <div class="row">
<h1 class="card-header text-left col-md-12" style="background:none;">User</h1>


</div>
</div>
<div class="card col-md-12" style="margin-right: 0;margin-left: 0; padding-left:0; padding-right:0;">
        <div class="card-header">
          <i class="fa fa-table "></i> Data Table
          <button type="button" class="btn btn-primary text-center" style="border-radius:10px;float:right;" data-toggle="modal" data-target="#adduser">
  <i class="fa fa-user"> Add User</i>
</button>
</div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered " id="dataTable" style="width:100%;" cellspacing="0">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </thead>
              <tfoot>
                <tr>
                  <th>Name</th>
                  <th>Position</th>
                  <th>Office</th>
                  <th>Age</th>
                  <th>Start date</th>
                  <th>Salary</th>
                </tr>
              </tfoot>
              <tbody>
                 <tr>
                  <td>Donna Snider</td>
                  <td>Customer Support</td>
                  <td>New York</td>
                  <td>27</td>
                  <td>2011/01/25</td>
                  <td>$112,000</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
    </div>


     <div class="modal fade" id="adduser" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Create new user</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body"><div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                    <form id="registeruser" class="form-horizontal" method="POST" action="{{ url('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group has-feedback">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                                    <span class="text-danger">
                                        <strong id="name-error"></strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                               
                                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                                    <span class="text-danger">
                                        <strong id="email-error"></strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="job_title" class="col-md-4 control-label">job_title</label>

                            <div class="col-md-6">
                                <input id="job_title" type="text" class="form-control" name="job_title" value="{{ old('job_title') }}" required autofocus>

                                    <span class="glyphicon glyphicon-job form-control-feedback"></span>
                                    <span class="text-danger">
                                        <strong id="job-error"></strong>
                                    </span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                               <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                            <span class="text-danger">
                                <strong id="password-error"></strong>
                            </span>
                            </div>
                        </div>

                        <div class="form-group has-feedback">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                            <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
        </div>
    </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

<script type="text/javascript">
    $('body').on('click', '#submitForm', function(){
        var registerForm = $("#registeruser");
        var formData = registerForm.serialize();
        $( '#name-error' ).html( "" );
        $( '#email-error' ).html( "" );
        $( '#password-error' ).html( "" );

        $.ajax({
            url:'/register',
            type:'POST',
            data:formData,
            success:function(data) {
                console.log(data);
                if(data.errors) {
                    if(data.errors.name){
                        $( '#name-error' ).html( data.errors.name[0] );
                    }
                    if(data.errors.email){
                        $( '#email-error' ).html( data.errors.email[0] );
                    }
                    if(data.errors.password){
                        $( '#password-error' ).html( data.errors.password[0] );
                    }
                    
                }
                if(data.success) {
                    }, 3000);
                }
            },
        });
    });
</script>

@endsection