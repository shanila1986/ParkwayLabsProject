@extends('master')
@section('content')
<div  class="row">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">
  <h2>Welcome To DashBord</h2>
  </div>
  <div class="col-sm-4">
  </div>
  </div>
<div class="row">
<div class="col-sm-4">
</div>
    <div class="col-sm-4">
    <div class="row dashbordBtn" >
    <div class="col-sm-6">
      <a class='button' href="{{  url('/')."/department" }}">Department</a>
      </div>
       <div class="col-sm-6">
<a class='button' href="{{  url('/')."/employees" }}">Employees</a>
</div>
</div>
    </div>
    <div class="col-sm-4">
</div>
</div>
<style>.button {
  font: bold 15px Arial;
  text-decoration: none;
  background-color: #EEEEEE;
  color: #333333;
  padding: 12px 12px 12px 12px;
  border-top: 1px solid #CCCCCC;
  border-right: 1px solid #333333;
  border-bottom: 1px solid #333333;
  border-left: 1px solid #CCCCCC;
}
	</style>

	
@stop
 