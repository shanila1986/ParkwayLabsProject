@extends('master')
@section('content')
<div  class="row">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">
  <h2>Employee</h2>
  </div>
  <div class="col-sm-4">
  </div>
  </div>
<div class="container employeeMain">
  <h3>Add New Employee</h3>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New Employee</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Employee</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="inputName"  placeholder="Full Name">
  </div>
  <div class="form-group">
    <label for="exampleInputName">Email</label>
    <input type="email" class="form-control" id="inputEmail"  placeholder="Email">
  </div>
  <div class="form-group">
    <label for="exampleDescription">Address</label>
    <textarea class="form-control" id="inputAddress" rows="3"></textarea>
  </div> <div class="form-group">
    <label for="exampleDescription">Telephone</label>
   <input type="text" class="form-control" id="inputTP"  placeholder="Telephone">
  </div>
   <div class="form-group">
    <label for="exampleDescription">Date Of Birth</label>
    <input type="text" class="form-control" id="inputdb"  placeholder="Date of birth">
  </div>


<div class="form-group" id='subDepartmentOpction' >
    <label for="selectParent">Department</label>
   

    <select  class="form-control"  id="selectParent">
     <option value="-1">select department</option>
    @foreach ($departments as $department)
      <option value="{{ $department['id'] }}">{{ $department['name'] }}</option>
      @endforeach
    </select>
  </div>

        </div>
        <div class="modal-footer">
        <button type="button" id="btnAddEmployee" class="btn btn-default" >ADD</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>


<div  class="row">
 @foreach ($departments as $department)
<div class="col-sm-6 department">
<label><h1>{{$department['name']}}</h1></label>
<table  class="display dataTable" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Address</th>
            </tr>
        </thead>
        
        <tbody>
            
            @foreach ($employees as $employee)

             @if ($employee['department_id'] === $department['id'] )
            <tr>
                <td>{{$employee['name']}}</td>
                <td>{{$employee['email']}}</td>
                <td>{{$employee['date_of_birth']}}</td>
                <td>{{$employee['address']}}</td>
            </tr>
             @endif

            @endforeach    
            
           
        </tbody>
    </table>
</div>

@endforeach    
	</div>
@stop
 