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
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>


@endsection