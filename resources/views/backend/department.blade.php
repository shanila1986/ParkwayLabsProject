@extends('master')
@section('content')
  <div  class="row">
  <div class="col-sm-4">
  </div>
  <div class="col-sm-4">
  <h2>Department</h2>
  </div>
  <div class="col-sm-4">
  </div>
  </div>
  <div  class="row">
  <div class="col-sm-6">
  <ul class="tree">
 @foreach ($departments as $department)
    <li><a href="#{{$department['name']}}">{{$department['name']}}</a>
     
     <?php $subDpt=''; ?>
      @foreach ($subDepartments as $subDepartment)
        @if ($subDepartment['department_id'] === $department['id'] )
        <?php $subDpt.='<li><a href="#'.$subDepartment['name'].'">'.$subDepartment['name'].'</a></li>';?>
         
        @endif
      @endforeach
      <?php 
      if($subDpt!=''){
          echo '<ul>'.$subDpt.'</ul>';
      }
      ?>
      
      </li>
   @endforeach
</ul>
</div>
<div class="col-sm-6">
<div class="container">
    <h3>Add New Department</h3>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">New Department</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">New Department</h4>
        </div>
        <div class="modal-body">
        <div class="form-group">
    <label for="exampleInputName">Name</label>
    <input type="text" class="form-control" id="inputName" aria-describedby="emailHelp" placeholder="Full Name">
    <small id="errorName" class="form-text text-muted"></small>

  </div>
  <div class="form-group">
    <label for="exampleDescription">Department Description</label>
    <textarea class="form-control" id="inputDescription" rows="3"></textarea>
  </div>

<div class="form-check">
    <label class="form-check-label">
      <input type="checkbox" id="checkSubDepartment" class="form-check-input">
      Active Sub Department  
    </label>
  </div>
<div class="form-group" id='subDepartmentOpction' style="display:none;">
    <label for="selectParent">Sub Department</label>
   

    <select  class="form-control"  id="selectParent">
     @foreach ($departments as $department)
      <option value="{{ $department['id'] }}">{{ $department['name'] }}</option>
      @endforeach
    
    </select>
  </div>

        </div>
        <div class="modal-footer">
        <button type="button" id="btnAdd" class="btn btn-default" >ADD</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
 </div> 
</div>
</div>
<script type="text/javascript">
  $(".tree").treemenu({delay:500}).openActive();
  
</script>
@stop
 