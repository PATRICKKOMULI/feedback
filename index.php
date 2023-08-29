
 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="style.css">
  <script>
      window.onload = function() {
        alert("There is an error with the ssl certificate. ");
      }
    </script>
</head>
<body>
  <div class="container">  
    <form id="contact" action="insert.php" method="post" onsubmit="this.submit(); this.reset();>
      <table>
        <tr>
          <td><img src="NHL.png" alt="logo" width="100" height="90"> </td>
          <td><h3>FEEDBACK FORM</h3>
            <div align= centre><h4> CUSTOMER CARE HELPLINE:<img src="png.png" alt="logo" width="15" height="15">
              <img src="phone.png" alt="logo" width="15" height="15"> 0776 970 220</h4></div></td>
        </tr>
      </table>
    
 <table>
   <tr>
     <td>
       <fieldset>
      <label for="name"><strong>Name</strong></label>
      <input placeholder="Your Name (optional)" name="name" type="textbox" tabindex="2">
    </fieldset>
  </td>
  <td></td>
  <td></td>
  <td></td>

     <td>
       <fieldset>
      <label for="date"><strong>Date</strong></label>
      <input  name="date" type="date" tabindex="1" autofocus>
    </fieldset>
  </td>
  </tr>
</table>
     
      
      <h4><div align="center";> <p><strong>How do you feel about the service you recieved?</strong> </p></div></h4>
      <hr>

      <fieldset id="waiting">
        <label for="date"><strong>Waiting Time</strong> </label>
        <p>
          <table border="0" >
            <tr >
            <td><h4><label><input type="radio" value="Acceptable" name="waiting">Acceptable</label></h4></td>
            <td></td> <td></td>
            <td><h4><label><input type="radio" value="Unacceptable" name="waiting">Unacceptable</label></h4></td>
          </tr>
        </table>
        
        
      </p>
      </fieldset>
    
      <fieldset id="group2">
        <label for="quality"><strong>Quality Of Customer Care</strong></label>
        <p>
          <table cellspacing="8" cellpading="0">
            <tr>
            <td><h4><label><input type="radio" value="Very Good" name="quality">Very Good</label></h4></td>
            <td><h4><label><input type="radio" value="Good" name="quality">Good</label></h4></td>
        <td><h4><label><input type="radio" value="Poor" name="quality">Poor</label></h4></td>
          </tr>
        </table>
        
        
        
      </p>
      </fieldset>

      <fieldset id="environment">
        <label for="date"><strong>Environment/Atmosphere</strong></label>
      <p>
        <table cellspacing="8" cellpading="0">
          <tr>
          <td><h4><label><input type="radio" value="Very Good" name="Environment">Very Good</label></h4></td>
          <td> <h4><label><input type="radio" value="Good" name="Environment">Good</label></h4></td>
          <td> <h4><label><input type="radio" value="Poor" name="Environment">Poor</label></h4></td>
        </tr>
      </table>
        

        
      </p>
      </fieldset>

      <fieldset id="experience">
        <label for="experience"><strong>Overall Experience</strong> </label>
      <p>
        <table cellspacing="8" cellpading="0">
          <tr>
        <td><h4><label><input type="radio" value="Very Good" name="experience">Very Good</label></h4></td>
        <td><h4><label><input type="radio" value="Good" name="experience">Good</label></h4></td>
        <td><h4><label><input type="radio" value="Poor" name="experience">Poor</label></h4></td>
        </tr>
      </table>
        
      </p>
      </fieldset>

      <fieldset id="scale">
        <h6><label for="scale"><strong>On a scale of 1-10, how likely are you to recommend the hospital?</strong></label></h6>
      <p>
        <table cellspacing="8" cellpading="0">
          <tr>
          <td><h4><label><input type="radio" value="1" name="scale">1</label></h4></td>
          <td><h4><label><input type="radio" value="2" name="scale">2</label></h4></td>
          <td><h4><label><input type="radio" value="3" name="scale">3</label></h4></td>
          <td><h4><label><input type="radio" value="4" name="scale">4</label></h4></td>
          <td><h4><label><input type="radio" value="5" name="scale">5</label></h4></td>
          <td><h4><label><input type="radio" value="6" name="scale">6</label></h4></td>
          <td><h4><label><input type="radio" value="7" name="scale">7</label></h4></td>
          <td><h4><label><input type="radio" value="8" name="scale">8</label></h4></td>
          <td><h4><label><input type="radio" value="9" name="scale">9</label></h4></td>
          <td><h4><label><input type="radio" value="10" name="scale">10</label></h4></td>
        </tr>
      </table>

        
      </p>
      </fieldset>

      <fieldset>
        <h6><label for="scale"><strong>Please let us know how we can improve</strong></label></h6>
        <textarea rows = "6" cols = "100" name = "improve"></textarea>
      </fieldset>
      
      <fieldset>
        <button type="submit" name="submit" id="contact-submit" data-submit="...Sending">Submit Now</button>
      </fieldset>
    </form>
    
     
  </div>
</body>
<SCRIPT language=JavaScript>


var message = "Right Click is Disabled by Sebwato";

function rtclickcheck(keyp){ if (navigator.appName == "Netscape" && keyp.which == 3){ alert(message); return false; }

if (navigator.appVersion.indexOf("MSIE") != -1 && event.button == 2) { alert(message); return false; } }

document.onmousedown = rtclickcheck;

</SCRIPT>
</html>