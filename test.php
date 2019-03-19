<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>KEEP FIT</title>
<script src="jquery-3.3.1.js"></script>
<script src="ripple.js"></script>
<script src="bootstrap.min.js"></script>
<link rel="stylesheet" href="bootstrap.min.css">  
<style>
@font-face {
  font-family: 'Glyphicons Halflings';
  src: url('glyphicons-halflings-regular.eot');
  src: url('glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),
   url('glyphicons-halflings-regular.woff') format('woff'), 
   url('glyphicons-halflings-regular.ttf') format('truetype'),
url('glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg');
}
 
.glyphicon {
  position: relative;
  top: 1px;
  display: inline-block;
  font-family: 'Glyphicons Halflings';
  -webkit-font-smoothing: antialiased;
  font-style: normal;
  font-weight: normal;
  line-height: 1;
  -moz-osx-font-smoothing: grayscale;
}
 p{font-family: "Times New Roman","宋体",sans-serif;
  font-size: 150%;
  color: rgba(6, 10, 5, 0.692);}
input,button,select,textarea{outline:none;}
table,td,th{
border:1px solid black;}
table{
width:100%;}
th{
height:30px;}
body{ text-align:center} 
.div{ padding: 3%; margin:0 auto; width:50%; height:100%; border:1px soli} 
h1{text-shadow: 5px 5px 5px #FFFAF0;}
h1 {font-size:50px;}
h3 {font-size:30px;}
body{
background:url(sport.jpg)  no-repeat center center;
background-size:cover;
background-attachment:fixed;
background-color:rgba(121, 116, 134, 0.267);}

.ripple-container .ripple{
background-color: rgba(255,255,255,0.4);
animation: ripple 2s forwards cubic-bezier(0, 0, 0.2, 1);
}
@keyframes ripple {
0% {
transform: scale(0);
opacity: 1;
}
80% {
transform: scale(1);
}
100% {
opacity: 0;
}
}  
</style> 
</head>

<body>
<div class="div">
<h1><font color="#87CEFA">Welcome to Keep Fit</font><br>
<small>YOUR PERSONAL TRAINER</small></h1>
<font color="#000000">
<fieldset>
<?php 
echo "Hello World!"; 
?> 

<legend align="center" style="width:100%;text-align:center"><b>Personal information</b></legend>
<p text-align="justify">
    <div class="input-group col-md-3 col-md-offset-3" style="width: 50%">
    <span class="input-group-addon" id="basic-addon2">select the type you want: 
    <select id="tap">
        <option id="int">int</option>
        <option id="double">double</option>
        <option id="string">string</option>
        <option id="date">date</option>
    </select></span></div>
 <div class="input-group col-md-3 col-md-offset-3" style="width:50%"><span class="input-group-addon" id="basic-addon2">Your weight:</span>
<input type="number"  class="form-control" placeholder="Must between 30 to 200" aria-describedby="basic-addon2" id="weight">
<span class="input-group-addon" id="basic-addon2">KG</span>
  </div>
   <span class="label label-warning" id="span1" style="display:none;">Must between 30 to 200</span><br>
   <div class="input-group col-md-3 col-md-offset-3" style="width:50%"><span class="input-group-addon" id="basic-addon2">Your waist:</span>
<input type="number"  class="form-control" placeholder="Must between 30 to 200" aria-describedby="basic-addon2" id="waist">
<span class="input-group-addon" id="basic-addon2">CM</span>
  </div>
  <span class="label label-warning" id="span2" style="display:none;">Must between 30 to 200</span><br>
  <div class="input-group col-md-3 col-md-offset-3" style="width:50%"><span class="input-group-addon" id="basic-addon2">Your height:</span>
<input type="number"  class="form-control" placeholder="Must between 150 to 250" aria-describedby="basic-addon2" id="height">
<span class="input-group-addon" id="basic-addon2">CM</span>
  </div>
  <span class="label label-warning" id="span3" style="display:none;">Must between 150 to 250</span><br>
  <div class="input-group col-md-3 col-md-offset-3" style="width:50%"><span class="input-group-addon" id="basic-addon2">Your age:</span>
<input type="number"  class="form-control" placeholder="Must between 10 to 100" aria-describedby="basic-addon2" id="age">
<span class="input-group-addon" id="basic-addon2">YEAR</span>
  </div>
  <span class="label label-warning" id="span4" style="display:none;">Must between 10 to 100</span></p>
<form name="sexform">
<p>Your gender: <input type="radio" name="sex" value="male">Male &nbsp;
<input type="radio" name="sex" value="female">Female<br><span class="label label-warning" id="span5" style="display:none;">You need choice your sex</span></p>
</form>
<button data-ripple  style=" width:130px; height:30px; border:0; background:url(buttonback.png) no-repeat center;background-size:100%"
onmouseover="this.style.backgroundImage='url(buttonback3.png)'"
 onmouseout="this.style.backgroundImage='url(buttonback.png)'"><span class="glyphicon glyphicon-upload" aria-hidden="true"></span>&nbsp;Submit </span></button>
<p id="txet"></p>
<ul id="txet1"></ul>
<script>
function RandomNumBoth(Min,Max){
      var Range = Max - Min;
      var Rand = Math.floor((Math.random()*Range)+1);
      var num =  Max-Rand;
      return num;
}
    $(document).ready(function(){
     $("button").click(function(){
        value=$("#tap option:selected").val();
        min=$("#weight").val();
        max=$("#waist").val();
        number=$("#height").val();
        $("#txet").text("you select "+value);
    if(value=="int"){
         for(i==number;i>0;i--){
            $("#txet1").text("rando"+RandomNumBoth(min,max));
          }    
    }
  });
});
</script>
</body>
</html>