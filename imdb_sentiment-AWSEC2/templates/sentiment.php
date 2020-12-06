<?php header('Access-Control-Allow-Origin: *');
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script>
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    //alert(this.responseText);
   // document.getElementById("div1").innerHTML = this.responseText;
   var responseText = this.responseText;
   if(responseText == "-1"){
   document.getElementById("div1").innerHTML =  "The entered movie review is NEGATIVE";
   document.getElementById("div1").style.color = "red";
   }
   if(responseText == "1"){
   document.getElementById("div1").innerHTML =  "The entered movie review is POSITIVE";
   document.getElementById("div1").style.color = "green";
   }

  }
};

	function foo(){
    xhttp.open("POST", "/predict", true);
    xhttp.setRequestHeader("Content-Type", "application/json");
    var p = document.getElementById("inputTextField").value;
    var name = JSON.stringify({"input": p });
    xhttp.send(name);
  }


   </script>
	</head>
<body style="background-color:#1a1a1a">
<h1 style="color:yellow; font-family: Helvetica ;text-align:center; "> Sentiment Analysis of IMDB reviews on AWS Elastic Beanstalk </h1>

  <center> <textarea rows="15" cols="80" placeholder="Enter your movie review here to check it's sentiment....." id = "inputTextField"></textarea> </center>


 <button style="width:100px;margin:0 50%; padding:10px; position:relative;left:-50px;top:30px; color:black;background-color:yellow;font-family: Helvetica" id = "b1" onclick="foo()" type="submit">SUBMIT</button>
  <br />
  <br />
  <br />
  <div id= "div1" style = "position:relative; text-align:center; font-size:30px; font-family: Helvetica"></div>

</body>
</html>

