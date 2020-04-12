<!DOCTYPE html>
<html>
<head>
<style>
button{
	width:160px;
}	
</style>
</head>
<title>Fees payment </title>
<p  style="color:pink;"><b>Fill in the fees payment </b></p>


<body style="background-color:#1f1b24; color:white">

     <form name ="register_form" action="savePayment" method="POST" id="rf">
    {{ csrf_field()  }}
      <p>
<!--label>First Name</label><br /-->
   <label>Student Number</Label><br/>
    <input type="number" name ="student_number" placeholder="Student number" required="required"/>
       </p>
          <p>
            <label>Amount<label><br/>
          <input type="number" name = "amount" placeholder="amount" required="required" />
</p>
<label>Date of Birth</Label><br/>
    <input type="date" name ="date_of_payment" placeholder="Date of payment" required="required"/>
 <p>
 <button type="submit" class="regbtn">Register</button>
 <p></p>
 <button onclick="window.location = '/';">Back</button>
 </form>