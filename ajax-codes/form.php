<!DOCTYPE html>
<html>
<head>
	  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

<link rel="icon" type="" href="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRMjVHR1w_8cHt-G4CUb_rNe9xUEY7ZmzAIdfQhpO_mjLsMMJqAZUeQOzuiFhAjuJUmBOQ&usqp=CAU">

	<title>AJAX</title>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>


<style type="text/css">
	
</style>

</head>
<body>


 	<form action="#" method="POST">
   <div class="container" style="height: 100%; width: 100%; margin-left: 25px; margin-right: 350;">
    <h2 class="alert alert-dark" style="color: #99ffdd; height: 65px; margin-top: 1px; margin-right: 52px; width: 930px; font-size: 30px; text-shadow: 2px 2px ; border-radius: none; margin-left: 0px; "><p>INQUIRY PAGE</p></h2>
    
      <div class="row">


        <div class="col-md-6">
          Full Name:
            <input type="text" id="id_name" class="form-control" placeholder="Enter Name">
            <br><br>
            Mobile No. :
            <input type="number" id="id_mobile" class="form-control" placeholder="Enter Mobile Number">
            <br><br>
            Wattsapp No. :
            <input type="number" id="id_watts_no" class="form-control" placeholder="Enter Wattsapp Number">
            <br><br>
            Address:
            <textarea class="form-control" id="id_address" placeholder="Enter Your Exect/Parmanent Address"></textarea>
            <br><br>
            Date Of Inquiry :
            <input type="date" id="id_date" class="form-control">
        </div><!-- col-md-6 closed (1) -->

        <div class="col-md-6">
          Institution :
            <textarea class="form-control" placeholder="Enter School / College Name" id="id_institutuion"></textarea>
            <br><br>
            Class :
            <input type="text" id="id_class" class="form-control" placeholder="Enter Class">
            <br><br>
            Cources :
            <select class="form-control" id="id_cources">
              <option>Choose Cources</option>
              <option>Computer Basic</option>
              <option>CCC</option>
              <option>MS-CIT</option>
              <option>Linux</option>
              <option>Software/Web Development + 11 cources-</option>
              <option>App Development</option>
              <option>C Language </option>
              <option>C++ </option>
              <option>Java </option>
              <option>Adv.Java </option>
              <option>Python</option>
              <option>Python-Django,Flash</option>
              <option>Software Dev. Using Java</option>
              <option>Mongodb, Express, Angular, React, Node, MEARN , MEAN- Full Stack</option>
            </select>
            <br><br>
            Fees:
            <input type="text" id="id_fees" class="form-control" placeholder="Enter Fees">
           
            <br><br>
            Father Occupation:
            <input type="text" id="id_occupation" class="form-control" placeholder="Enter Occupation">
            <br><br><br>
      
      
        </div><!-- col-md-6 closed (1) -->


      </div><!-- row closed -->

      <center>
          <input id="id_submit" type="button" class="btn btn-info" style="margin-top: -25px;" value="Save">
      </center>


</form>

<div id="result">
  
</div>

 <script>
        $(document).ready(function() {

            show();
            
            function show()
            {
                // alert('show');
                  var response = '';
                    $.ajax({
                        type: "GET",
                        url: "show.php",
                        // async: false,
                        success: function(text) {
                            response = text;
                            // alert('hi');
                    document.getElementById('result').innerHTML = response;
                        }
                        
                    });
            }

            
           	 $("#id_submit").click(function() {

                show();
                
	                var varname = $("#id_name").val();
	                var varmobile = $("#id_mobile").val();
                  var varwatts_no = $("#id_watts_no").val();
                  var varaddress = $("#id_address").val();
                  var vardate = $("#id_date").val();
                  var varinstitution = $("#id_institutuion").val();
                  var varclass = $("#id_class").val();
                  var varcources = $("#id_cources").val();
                  var varfees = $("#id_fees").val();
                  var varoccupation = $("#id_occupation").val();

                  if((varname == "") || (varmobile == "") || (varwatts_no == "") || (varaddress == "") || (vardate == "") || (varinstitution == "") || (varclass == "") || (varcources == "")  || (varfees == "") || (varoccupation == ""))
                  {
                    alert('Please Enter Data'); 
                  }
                  else{


	              $.ajax({
	                    type: "POST",
	                    url: "save.php",
	                    data: {
	                        name:       varname,
	                        mobile:     varmobile,
                          watts_no:   varwatts_no,
                          address:    varaddress,
                          date:       vardate,
                          institution:varinstitution,
                          class:      varclass,
                          cources:    varcources,
                          fees:       varfees,
                          occupation: varoccupation
                    	}, 

                   	 	success: function(data) {
                       
	                        alert('Data saved');
	                         $("#id_name").val('');
	                         $("#id_mobile").val('');
                           $("#id_watts_no").val('');
                           $("#id_address").val('');
                           $("#id_date").val('');
                           $("#id_institutuion").val('');
                           $("#id_class").val('');
                           $("#id_cources").val('');
                           $("#id_fees").val('');
                           $("#id_occupation").val('');

                           show();
                   		 },  


                  });
              
                }// else closed

      		 });

        });
 </script>

</body>
</html>