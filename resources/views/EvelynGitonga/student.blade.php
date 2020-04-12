<!DOCTYPE html>
<html>
<head>
<style>
button{
	width:160px;
}	
</style>
</head>
<title>Registration form</title>
<p  style="color:pink;"><b>Please fill in this form to register </b></p>


<body style="background-color:#1f1b24; color:white">

      <form name ="register_form" action="savestudent" method="POST" id="rf">
      {{ csrf_field()  }}
<p>
<!--label>First Name</label><br /-->
   <label>First Name</Label><br/>
    <input type="text" name ="first_name" placeholder="first name" required="required"/>
       </p>
          <p>
            <label>Last Name<label><br/>
          <input type="text" name = "last_name" placeholder="Last name" required="required" />
</p>
<label>Date of Birth</Label><br/>
    <input type="date" name ="date_of_birth" placeholder="Date of Birth" required="required"/>
 <p>
    <label>Address</label><br/>
    <input type="text" name ="address" placeholder="Address" required="required"/>
</p>
<p>
</p>
<p>
<label>Student Number</label><br/>
<input type="number" name="student_number" required/>

</p>
 <div class="clearfix">
      
      
      <button type="submit" class="regbtn">Register</button>
      <p></p>
      <button onclick="window.location = '/';">Back</button>
      
    </div>
  </div>
</form>

