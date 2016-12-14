

jQuery(document).ready(function(e) {


    $( "#checkSubDepartment" ).click(function() {

	      if($('#checkSubDepartment').prop('checked')) {
            $("#subDepartmentOpction").show();
        } else {
            $("#subDepartmentOpction").hide();
        }

	});


/**
* insert new department
*/

  $( "#btnAddDepartment" ).click(function() {

  	var departmentName=$('#inputName').val();
  	var departmentDescription=$('#inputDescription').val();
  	var departmentStates=$('#inputDescription').val();
  	var subDepartment='false';
  	var parentDepartment=false;
    var validate=false;

  	if($('#checkSubDepartment').prop('checked')) {

    	 subDepartment='true';
  	 	 parentDepartment=$('#selectParent').val();

	 }

   if(departmentName.length !=0 ){
      if(departmentDescription.length < 500){
         validate=true;
      }else{
         alert("Please Add Description within 0-500 Cheracters");
         
      }
   }else{
      alert("Please Enter Department Name");
      
   }

   if(validate==true){

       $.ajax({
          url  : "addDepartment",
          type : "GET",
          cache: false ,
          data : {  'departmentName':departmentName,
              			 'departmentDescription':departmentDescription,
              			  'departmentStates':departmentStates, 
              			  'subDepartment':subDepartment,
              			  'parentDepartment':parentDepartment,  
              			},
          success: function(data){
                  location.reload();
          }
       });
   } 

  });


/**
* insert new employee
*/

  $( "#btnAddEmployee" ).click(function() {

    var employeeName=$('#inputName').val();
    var employeeEmail=$('#inputEmail').val();
    var employeeAddress=$('#inputAddress').val();
    var employeeTelephone=$('#inputTP').val();
    var employeeDb=$('#inputdb').val();
    var employeeDepartment=$('#selectParent').val();
    var validate=false;

    if(employeeName.length !=0){
      if(validateEmail(employeeEmail)){
        if(employeeDepartment != -1){
          validate=true;
        }else{
          alert("Please Select Department");
        }   
      }else{
        alert("Please Enter Valid Email Address");
        
      }
    }else{
       alert("Please Enter Employee Name");
       
    }
   
   if(validate==true){

      $.ajax({
        url  : "addEmployee",
        type : "GET",
        cache: false ,
        data : { 'employeeName':employeeName,
                 'employeeEmail':employeeEmail,
                 'employeeAddress':employeeAddress,
                 'employeeTelephone':employeeTelephone, 
                 'employeeDb':employeeDb,
                 'employeeDepartment':employeeDepartment,  
                },
        success : function(data){
                  location.reload();
                 }
      });
   }
 
});



/**
* validate email address
* @method validateEmail
* @param {String} email address
* @return {bool} true or false
*/


function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

$( function() {
    $( "#inputdb" ).datepicker();
  } );

 $('.dataTable').DataTable();
});