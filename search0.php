<?php
//include "header.htm";
?>

<html>
  <head>
  <script language="JavaScript"> 
           
            function doSubmit() 
            {
               if(document.report1.fnam.value == '') 
               { 
                      alert('Please enter First Name!'); 
                      document.report1.fnam.focus(); 
                       return false; 
                }             
                
                 if(document.report1.snam.value == '') 
               { 
                      alert('Please enter Surname!'); 
                      document.report1.snam.focus(); 
                       return false; 
                }     
                
                 if(document.report1.dept.value == '') 
               { 
                      alert('Please enter Dept!'); 
                      document.report1.dept.focus(); 
                       return false; 
                }                         
                 if(document.report1.reg.value == '') 
               { 
                      alert('Please select Region!'); 
                      document.report1.reg.focus(); 
                       return false; 
                }              
                 if(document.report1.telno.value == '') 
               { 
                      alert('Please enter Telephone No.!'); 
                      document.report1.telno.focus(); 
                       return false; 
                }                  
                 if(document.report1.ext.value == '') 
               { 
                      alert('Please enter Telephone Ext!'); 
                      document.report1.ext.focus(); 
                       return false; 
                }         
                    if(document.report1.email.value == '') 
               { 
                      alert('Please enter Email Address!'); 
                      document.report1.email.focus(); 
                       return false; 
                }                 
                 if(document.report1.problem.value == '') 
               { 
                      alert('Please select problem!'); 
                      document.report1.problem.focus(); 
                       return false; 
                }    
                
                  if(document.report1.descp.value == '') 
               { 
                      alert('Please enter description!'); 
                      document.report1.descp.focus(); 
                       return false; 
                }      
                
                
                  if(document.report1.urgency.value == '') 
               { 
                      alert('Please select level of urgency!'); 
                      document.report1.urgency.focus(); 
                       return false; 
                }                                
               document.report1.submit(); 
               return true;   
            } 
    </script> 
</head>

<?php

?>
<b>Search</b> 

<form method="post" name="report1" action="search1.php">
<table width="" border="0" cellspacing="8" cellpadding="5" bgcolor="#CDDFED"  align=center>
<tr>
<td>Search By</td>
<td>
<select name="fld" size="1">
<option value=""></option>
  
	<option value="engnam">English Name</option>
		<option value="botnam">Botanical Name</option>
	<option value="syn">Synonym</option>
	<option value="acts">Activities</option>
	
		<option value="ind">Indications</option>
			<option value="dos">Dosage</option>
		<option value="contra">Contraindications, Interactions, and Side Effects</option>
			<option value="sel">Selected [x]</option>
	
</select>
</td>
</tr>

<tr><td>Search Value</td><td><input type="text" size="20" name="val" value="" </td>
</tr>
<tr><td><input type="submit"  name="Submit"  value="Submit Request"></td><td><input type="reset"></td></tr>



</table>


</form>




<?php
// echo "<br> <a href='javascript:history.back(1)'><img src='BACK.BMP' width='12' height='16' border='0' alt=''><img src='back2.gif' width='47' height='16' border='0' alt=''></a>" ; 
 // include "footer.htm";
?>