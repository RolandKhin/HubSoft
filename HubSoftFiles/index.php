<?php ob_start();?>
<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Palladium Shoes - HubSoft Customer Page</title>



<style type="text/css">
<!--





/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@   BEGIN PART 1: GENERAL DECLARATION  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  */


/* ----------- Reset All CSS to neutral ---------- */
*{
  margin:0;
  padding:0;
  border:0;
  text-indent:0;
  list-style:none; 
}


html,body{
  height:100% ;
  width:100%;
  min-height:100%;
  max-height:100%;
  text-align:left;
  color:#404040;
  font-size:12px;
  font: 100.01% verdana, arial, sans-serif;  
  /* font-family:"Trebuchet MS",Helvetica,sans-serif; */
  font-family: Consolas, monaco, monospace;
  background: #222222 url("images/bg-palladium-hs.jpg") no-repeat left top;  
  background-size: 100% 100%;
  background-repeat: no-repeat;
  margin:0;
  padding:0;
 }
 
 
 /* ------ Vertical Push-Down on Floating objects ------ */
 .clear {
	clear: both;
        width:1px;
        height:1px;
	padding:0px;
	margin:0px;
  }

 /* More Powerful Vertical Push-down on Floating objects ( If above Push-Down failed )  --------------------*/
  .clearfix:after {
    content: ".";              /* the period is placed on the page as the last thing before the div closes */
    display: block;          /* inline elements don't respond to the clear property */
    height: 0;                  /* ensure the period is not visible */
    clear: both;               /* make the container clear the period */
    visibility: hidden;	     /* further ensures the period is not visible */
   } 

   
   
 /* --------- PSEUDO-CLASS Elements Declaration ------------ */  
   a:link{
    color:#4682B4;
    text-decoration:none;
   }

    a:visited{
     color:#6996AD;
     text-decoration:none;
    }

    a:hover{
     color:#0EBFE9;
     text-decoration:none;
    }

   
   /* ~~~~~~~~ Special Links ~~~~~~~~~~~~ */
   #links a:link{
    color:#222222 ;  
    text-decoration:none;
    border:1px solid #fff;
   }
   #links a:hover { 
       color:#00f; 
       text-decoration:none;
       border:1px solid #E0EEEE;
   } 
   #links a:visited{
     color:#707070;
     text-decoration:none;
     border:1px solid #fff;
    }
   /* ~~~~~ end - Special Links ~~~~~~~~~~~~ */ 
  
  
  
  
    h1{
    color:#404040;
    font-size:150%;
    }


   .div_inline{
       float:left;
       width:auto;
       height:auto;
       margin:0px;
       padding:0px;
       position:relative;
    }
    
    
/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@  END PART 1: GENERAL DECLARATION  @@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@@ */












/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@   BEGIN PART 2: PAGE Elements  @@@@@@@@@@@@@@@@@@@@@@@@@@@  */






/* @@@@@@@@@@@@@@@@@@@@@@@@@@@@@   END PART 2: PART 2: PAGE Elements  @@@@@@@@@@@@@@@@@@@@@@@@@@@@  */










#main {
  width:100%;
  height:auto;    
  margin-left:auto;
  margin-right:auto;	
  margin-top:0px;
  margin-bottom:0px;     
  border:0px solid #03f;	
  position:relative;

 } 

  
#pageDiv1,#pageDiv2,#pageDiv3,#pageDiv4,#pageDiv5 {
  width:100%;
  height:auto;    
  margin-left:auto;
  margin-right:auto;	
  margin-top:2%;
  margin-bottom:30px;  
  padding:0px;
  text-align:center;
  position:relative;
  display:none;
 } 

 
 .login_header{
     float:left;
     width:100%;
     height:12%;
     margin:0px;
     padding:0px;
     background-color:#222222;     
     position:relative;
     clear:both;
 }
 
 .palladium_form_label{
    float:left;
    width:70%;
    height:auto;
    margin:-3px 0px 0px 0px;
    padding:0px;
    clear:both; 
 } 
 
 
 .palladium_form_style{
     width:auto;
     height:10%;
     margin:0px;
     padding:0px;
     color:#900;
     font-size:80%;
     font-weight:bold;
     background-color:#F0F0F0;
     border-width: thin;
     border-style:inset;
     border-color:#F0F0F0;
     border-right:1px solid #C0C0C0;
     border-bottom:1px solid #C0C0C0;
     position:relative; 
 }
 
 
 #bg_submit1,#bg_submit2,#bg_submit3,#bg_submit4{
    float:left;
    width:98%;
    height:auto;
    border:0px solid #3f0;
    margin:0%;
    padding:0%;           
    position:relative; 
 }
 

 
 .submit_button{
    float:left;
    width:100%;
    height:auto;
    top:0;
    left:0;    
    margin:0px 0px 0px 0px;
    margin:0%;
    padding:0px;
    padding:0%;
    border:0px solid #fc0;
    background-color:transparent;
    cursor:auto;
    opacity:0;
    -moz-opacity:0;
    /*filter:alpha(opacity:0);*/
    position:absolute;
    z-index:3000; /* To bring the real upload interactivity up front */ 
    } 
 
 
 #ulistItem li{
    width:100%;
    height:auto;
    margin:1% 0% 1% 0%;
    padding:0%;
    list-style-type: square;
    position:relative;
 }
    
    
 
    
    
    
 
 
 /*  ----- Responsive containers --------- */ 
 @media only screen and (min-width : 1224px) { #main { width: 1000px; } } /* For Desktop & Laptop ----- */ 
 @media only screen and (max-width : 1024px) { #main { width: 1000px; } } /* For iPad ----- */
 @media only screen and (max-width : 960px) { #main { width: 950px; } } /* For iPhone4 ----- */
 @media only screen and (max-width : 480px){ #main { width: 420px; } } /* For Smart phones ----- */
 @media only screen and (max-width : 321px) { #main { width: 300px; } } /* For Smart phones (portrait) ----- */
 
 
 
-->
</style>










<!-- ########################### PHP Section ######################################## -->
<?php
// Making correction according to Browser type ......
   $u_agent = $_SERVER['HTTP_USER_AGENT'];
   echo "<script> var LTS = 1.36; </script>";
   
    if(preg_match('/MSIE/i',$u_agent) && !preg_match('/Opera/i',$u_agent)) 
    {  // When browser is IE Internet Explorer ......         
          $browser = "IE";  
          //echo "<script> var LTS = 1.3; </script>";        
          $need_help_top ="margin-top:46%;";
          //echo "<style type=\"text/css\"> #courses_display{ height:450px; }   </style>";   
    } 
    elseif(preg_match('/Firefox/i',$u_agent)) 
    {  // When browser is Mozilla FireFox ...... 
        $browser = "FF";  
        echo "<script> var LTS = 1.41; </script>";
        $need_help_top ="margin-top:46%;";
	//echo "<style type=\"text/css\"> #footer_row{margin-left:0px;}   </style>";		   	   	    
    } 
    elseif(preg_match('/Chrome/i',$u_agent)) 
    { // When browser is IE Google Chrome ......
        $browser = "CH";  
        echo "<script> var LTS = 1.33; </script>";
        $need_help_top ="margin-top:46%;";
	 //echo "<style type=\"text/css\"> #footer_row{ margin-left:10%; }   </style>";	   
    } 
    elseif(preg_match('/Safari/i',$u_agent)) 
    { // When browser is Safari ...... 
        $browser = "SF";  
        echo "<script> var LTS = 1.44; </script>";     
        $need_help_top ="margin-top:100px;";
	  //echo "<style type=\"text/css\"> #footer_row{ margin-left:10%; }   </style>";	   
    } 
    elseif(preg_match('/Opera/i',$u_agent)) 
    {  // When browser is Opera ...... 
        $browser = "OP";  
        echo "<script> var LTS = 1.33; </script>"; 
        $need_help_top ="margin-top:46%;";
	  //echo "<style type=\"text/css\"> #footer_row{ margin-left:10%; }   </style>";           
    } 
    elseif(preg_match('/Netscape/i',$u_agent)) 
    { // When browser is NetScape ...... 
        $browser = "NS";  
        echo "<script> var LTS = 1.33; </script>";
        $need_help_top ="margin-top:46%;";
	 //echo "<style type=\"text/css\"> #footer_row{ margin-left:10%; }   </style>";	 
    } 
    
	
?>
<!-- ########################### End - PHP Section ######################################## -->









<!-- ########################### Begin - JavaScript Section ############################### -->

<script type="text/javascript">
  
// Declare Global variables .....  
  var cPage = []; 
  var LPage =0;
  
  
//>>>>>>>>>>>>> Is in Array >>>>>>>>>>>>>>>
    function isValueInArray(arr, val) {
       var inArray = 0;
	for (i = 0; i < arr.length; i++){
            if (val == arr[i]){
                inArray = 1;
            }
        }
        return inArray;
     }
//>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
    
    
    
    
//>>>>>>>>>>>>>> Check Cookies >>>>>>>>>>>>>>>>>//

    function setCookie(cname,cvalue,exdays) {
        var d = new Date();
        d.setTime(d.getTime() + (exdays*24*60*60*1000));
        var expires = "expires=" + d.toGMTString();
        document.cookie = cname+"="+cvalue+"; "+expires;
    }

    function getCookie(cname) {
        var name = cname + "=";
        var ca = document.cookie.split(';');
        for(var i=0; i<ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1);
            if (c.indexOf(name) != -1) {
                return c.substring(name.length, c.length);
            }
        }
        return "";
    }

    function checkCookie(cc) {
       var cpa = cc;
        var ksCookie=getCookie(cpa);
        if (ksCookie != "") {
           // Old visit ....
            
        } else {
           // New visit ....
            ksCookie = "pageDiv1";
            setCookie(cpa, ksCookie, 90);
           
        }
    }

    
        
//>>>>>>>>>>>>>> End -  Check Cookies >>>>>>>>>>>>>>>>//
  
  
  
  
  
     
 //~~~~~~~~~~~~~~ Mouse Events ~~~~~~~~~~~~~~~//
 
  //------------ Mouse on -----------------
    function onImage(nx){   
      var ix = nx;          
      document.getElementById("submit"+ix).src = "images/submit"+ ix +"b.jpg"; 
    }    
   
   //------------------------------------------
   
   
   
   //-------------- Mouse Off --------------
    function offImage(fx){          
        var ox = fx;    
        document.getElementById("submit"+ox).src = "images/submit"+ ox +".jpg";         
    }
     
    //------------------------------------------------

  
 //~~~~~~~~~~~~~~~ End - Button Events ~~~~~~~~~~~~~~//
        
 
  
</script>








<!-- ~~~~~~~~~~~~~~~ Form Validation ~~~~~~~~~~~~~~ -->
<script type="text/javascript">
 
 
 
 function agreeTNC(agt){
    var atn = agt;    
    document.getElementById("agTNC").value = (document.getElementById("agTNC").value == 0 ? atn : 0 );
    document.getElementById("agTNCi").src =  (document.getElementById("agTNC").value == 2 ? "images/icon-checkbox-grey2.png" : "images/icon-checkbox-grey0.png" );    
 }
 
 
 // Email validation ......
function echeck(str) {

 // script below works better than Regular Expression check which
 //  does not work when people were using Thai or Chinese keyboard...

    var at="@";
    var dot=".";
    var lat=str.indexOf(at);
    var lstr=str.length;
    var ldot=str.indexOf(dot);
    if (str.indexOf(at)==-1){
        alert("Invalid Email ");
        return false;
    }
    if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr){
        alert("Invalid Email ");
        return false;
    }
    if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr){
        alert("Invalid Email ");
        return false;
    }
    if (str.indexOf(at,(lat+1))!=-1){
    alert("Invalid Email ");
    return false;
    }
    if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot){
    alert("Invalid Email ");
    return false;
    }
    if (str.indexOf(dot,(lat+2))==-1){
    alert("Invalid Email ");
    return false;
    }
    if (str.indexOf(" ")!=-1){
    alert("Invalid Email ");
    return false;
    }
        return true	;
}
    
function Submits(iQ){

    var iQv = iQ; // form number ...
    
    if(iQv == 1){// ----------- Form 1 ---------------//
        
        var userOb = document.getElementById("userName"); 
        var pwdOb = document.getElementById("password");    

        if ((userOb.value==null)||(userOb.value=="")){
            alert("Please Enter User Name!.....  ");
            userOb.focus();                
            userOb.style.backgroundColor = "#f00"; 
            userOb.style.color = "#fff";
            return false;
        }

        if ((pwdOb.value==null)||(pwdOb.value=="")){
            alert("Please Enter Password!.....  ");
            pwdOb.focus();                
            pwdOb.style.backgroundColor = "#f00"; 
            pwdOb.style.color = "#fff";
            return false;
        }

        var uOb = (userOb.value).trim(); // user name
        var pOb = (pwdOb.value).trim(); // pwd

        if(uOb !="" && pOb !=""){
            return true;
        }    
    
    }// end -----------Form 1--------------//
    
    
    
    
    
    
    
    //------------Form 2 or 3-----------//
    if(iQv == 2 || iQv == 3 || iQv == 4){// Form 2 or 3 or 4.....
                     
        var formObject = "";
        if(iQv == 2){ formObject=document.createLoginForm; }
        if(iQv == 3){ formObject=document.createNewAccountForm; }
        if(iQv == 4){ formObject=document.ForogtPasswordForm; }
        
        // Looping through all form field to check entry .....
          for(var i=0; i<formObject.elements.length; i++){ //  Loop all form element ....
              if(formObject.elements[i].type=="text" || formObject.elements[i].type=="password"  || formObject.elements[i].type== "textarea"){ //  if it is text field ....

                if(formObject.elements[i].value==""){ //  if empty ....

                    alert("     Please Enter value for this field ! \n Data entry is required for every field \n  (Now high-lighted with red color) ");
                    formObject.elements[i].focus();
                    formObject.elements[i].style.backgroundColor = "#f00";
                    formObject.elements[i].style.color = "#fff";                    
                    return false;

                  }else{
                      formObject.elements[i].style.backgroundColor = "#fff";
                      formObject.elements[i].style.color = "#900";
                  }
                  
                    //Try Email validation ....
                    if(formObject.elements[i].name =="emailExistCustomer" || formObject.elements[i].name =="emailNewCustomer"){
                        if (echeck(formObject.elements[i].value)==false){
                            formObject.elements[i].focus();
                            formObject.elements[i].style.backgroundColor = "#f00";
                            formObject.elements[i].style.color = "#fff";
                            return false;
                        }
                    }
              }
          }
                        
          
            
        if(iQv == 2){
            if(document.getElementById("agTNC").value == 2) {
                return true;
            }else{
                alert(" Please tick the checkbox to confirm that \n you agree to our Terms and Condition \n (Now high-lighted with yellow)");
                document.getElementById("agTnCT").style.backgroundColor = "#ff0";
                document.getElementById("agTnCT").style.color = "#c00";
                return false;
            }
        }
        
        if(iQv == 3){
           return true; 
        }
        
        if(iQv == 4){
           return true; 
        }
        
        
        
        
        
    }// end - -------Form 2 or 3 or 4--------------//
    
    
    
    
    
    
    
}
</script>
<!-- ~~~~~~~~~~~~~~~ End - Form Validation ~~~~~~~~~~~~~~ -->








<script src="js/jquery.min.resize.js"></script>
<script>
 
   function windowChanged(){ 
       
      // var LTS = <?php echo $LTC; ?>;
    // Detect browser width ....
      var mainW= 0.631*($(window).width());  
      var textW = 0.012*($(window).width());
      var chkBoxW = 0.012*($(window).width());
      var submitW = Math.round(0.067*($(window).width())); 
     
    // Detect browser height ....
      //var submitH= 0.038*($(window).height()); 
      var submitH = Math.round(0.294* submitW);      
      //var LinksHt = Math.round(1.4* submitW);
      var LinksHt = Math.round(LTS* submitW);
      var needHelpHt = Math.round(1.31* LinksHt);
      
      
      document.getElementById("main").style.width=mainW+"px";
      document.getElementById("loginGirl").style.width=mainW+"px"; 
      
      if(LPage == 1){  
      document.getElementById("links_div").style.marginTop=LinksHt+"px";
      document.getElementById("need_help_div").style.marginTop=needHelpHt+"px";
      }
      
      for (var b = 1; b <= 5; b++) {     
        if(document.getElementById("pageDiv"+b).style.display=='block'){
           document.getElementById("pageDiv"+b).style.font=textW+"px Trebuchet MS,serif"; 
           if(b==1){ 
               submitW = Math.round(submitW*0.83);
               submitH = Math.round(submitH*0.83);              
           }else{
               submitW =submitW; 
               submitH = submitH;
           } 
           
           if(b==1 || b==2 || b==3 || b==4){
           document.getElementById("submit"+b).style.width=submitW+"px";
           document.getElementById("bg_submit"+b).style.width=submitW+"px";
           document.getElementById("sbutton"+b).style.width=submitW+"px";
           
           document.getElementById("submit"+b).style.height=submitH+"px";
           document.getElementById("bg_submit"+b).style.height=submitH+"px";
           document.getElementById("sbutton"+b).style.height=submitH+"px";           
           }
        }
      }
      
   }// End - windowChanged .....
   
    $(document).ready(function(){        
          windowChanged();
      $(window).resize(function(){
          windowChanged();         
      });

    });
 
</script>



<!-- ########################### End - JavaScript Section ############################### -->










</head>

<body>
    
    <div id="main">
        
        <noscript>
           <h1 style="color:red; font-weight:bold; font-size:200%;">Java Script is required to use this form. Please enable Java script on your browser.</h1>
        </noscript>       
        
        
        <div id="pageDiv1">
            
            <div id="login-form" style=" width:41%; height:auto; margin-top:10%; margin-left:5%; padding:0px; background-color:#fff;  position:absolute; z-index:1000; ">
               
                <form action="https://palladium-us.hubsoft.com/login.hub" method="post" name="loginForm" id="loginForm" onsubmit="return  Submits(1)" >
                   
                <input type="hidden" name="m" value="login"/>
                <input type="hidden" name="c" value="xxxmAOtly0mdz4zzzjavaeA33n8IPFHjSKi" />
                
                <div style="position:absolute; z-index:1200; width:100%; height:auto; margin:0px; padding:0% 0% 9% 0%; background-color:#fff;  ">
                
                    <div class="login_header">
                        <img id="loginGirl" src="images/p-header.jpg"  style=" max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Customer - Login"   />          
                    </div>
                    <div class="palladium_form_label" style="margin-top:5px; margin-left:3%; text-align:left; ">
                        <span style="font-family: Consolas, monaco, monospace; font-size:79%; font-weight:bold; color:#222222; ">
                        USER NAME
                       </span>                    
                    </div>
                    <div class="palladium_form_label" style="margin-left:0px; ">
                        <input type="text" name="userName" id="userName" maxlength="100" size="20" value="" class="palladium_form_style" style="width:90%; "  />
                    </div>
                    <div class="palladium_form_label" style="margin-top:5px; margin-left:3%; text-align:left;">
                        <span style="font-family: Consolas, monaco, monospace; font-size:79%; font-weight:bold; color:#222222; ">
                         PASSWORD
                       </span>
                    </div>
                    <div class="palladium_form_label" style="margin-left:0px; ">
                        <input type="password" name="password" id="password" maxlength="100" size="20" value="" class="palladium_form_style" style="width:90%; " />
                    </div>

                        <div class="clear"></div>

                    <div class="div_inline" style="width:28%; margin-left:3%; margin-top:10px; padding:0px; border:0px solid #9f9;">
                        <div class="div_inline" style="display:none; width:15%; margin-left:2px;">
                           <input type="checkbox" id="rememberMe"style="width:100%;"  />
                        </div>
                        <div class="div_inline" style="display:none; width:82%; margin-top:2%;">
                           <img src="images/remember-me.png"  style="float:left; margin-left:2px; max-width:85%; height:auto;  border:0px solid #c3c; "  alt ="Palladium Shoes - Remember me"   />
                        </div>
                             <div class="clear"></div>
                         <div class="div_inline" style="margin-top:3%; margin-left:1px;">
                            <div id="bg_submit1" >  
                                <a href="#" title="Palladium Shoes - Login" >
                                   <input type="submit" name="sbutton1" id="sbutton1" value="" class="submit_button"  onmouseover="onImage(1)"  onmouseout="offImage(1)"  style="margin-left:2px; max-width:98%; height:auto;"  />
                                </a>
                                <img id="submit1" src="images/submit1.jpg"  style="float:left; max-width:100%; height:auto;  border:0px solid #c3c; "  alt ="Palladium Shoes - Login"   />                            
                            </div>                         
                         </div>
                             <div class="clear"></div>
                    </div> 
                        
                </div>                
                    
                </form>
                
                
                  
                <div id="links_div"  style="float:right; width:70%; position:absolute; z-index:1300; margin-top:36%; right:1%;  padding:0px; background-color:transparent;  ">                    
                   
                    <div id="links" class="div_inline" style="float:right; width:100%;  margin-right:3%; padding:0px;   ">                    
                     
                        <div class="div_inline" style="width:100%; margin:1% 0% 0% 0%; padding:0px; text-align:right; ">  
                            <a href="javascript:CallPage(2)" title="Palladium Shoes - Existing Customer" style=" font-family: Trebuchet MS, sans-serif; font-size:65%; font-weight:bold; " >
                               Existing Customer: Create User/Password
                            </a>                       
                        </div>
                            <div class="clear"></div>

                        <div class="div_inline" style="width:100%; padding:0px; text-align:right; margin-top:-2%; ">
                            <a href="javascript:CallPage(3)" title="Palladium Shoes - New Account Inquiry" style=" font-family: Trebuchet MS, sans-serif; font-size:65%; font-weight:bold; " >
                               New Account Inquiry
                            </a> 
                        </div>
                            <div class="clear"></div>

                        <div class="div_inline" style="width:100%; padding:0px; text-align:right;  margin-top:-2%; ">                        
                            <a href="javascript:CallPage(4)" title="Palladium Shoes - Forgot Password" style=" font-family: Trebuchet MS, sans-serif; font-size:65%; font-weight:bold; "  >
                               Forgot Password
                            </a>
                        </div>
                            <div class="clear"></div>   
                    </div>
                   
                </div>
                
                
                <div id="need_help_div" class="div_inline" style="position:absolute; z-index:1400; width:60%; margin-top:46%; margin-bottom:2%; margin-left:3%;  ">
                    <div class="div_inline" >
                        <span style="font-size:60%; font-weight:bold; color:#A0A0A0; ">Need Help Login? 1-800-938-8000</span>
                    </div>
                    
                </div>                
                        <div class="clear"></div>
                
            </div><!-- end login-form div -->
            
          <img id="loginGirl" src="images/palladium_login_girl.jpg"  style=" max-width:100%; height:auto;  "  alt ="Palladium Shoes - Login"   />          
        
        </div>
        
        
        
        
        
        
        
        
        
        <div id="pageDiv2"><!-- ---------- Div 2 Existing Customer --------- -->            
            
            <div class="div_inline" style="width:100%; margin-top:2%; background-color:#222222;">
                <div class="div_inline" style="width:77%; margin-left:1%; margin-top:2px; ">
                   <img id="ExistingCustomer" src="images/existing-customer-header1.jpg"  style=" max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Shoes - Existing Customers"   />          
                </div>
                <div class="div_inline" style="float:right; width:17%; margin-top:3px; ">
                    <img id="ExistingCustomer" src="images/logoP.jpg"  style="float:right; max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Shoes - Logo"   />          
                </div>
                      <div class="clear"></div>
               
            </div>
                    <div class="clear"></div>
                    
                    
                    
                    
                    
            <!-- ---------Personal Info section -------- -->        
            <div class="div_inline" style="width:100%; background-color:#fff; "> 
                
                
                <form action="https://palladium-us.hubsoft.com/login.hub" method="post" name="createLoginForm" id="createLoginForm" onsubmit="return  Submits(2)" >
                <input type="hidden" name="m" value="login"/>
                <input type="hidden" name="c" value="aqmAOtly0mdz4zzzjavaeVM44Dn8IPFHcjSKi" />
                
                <div class="div_inline" style="width:90%; margin:2% 0% 0% 7%; ">
                   <span style="font-family:Consolas, monaco, monospace;  font-size:110%; font-weight:bold; color:#222222; ">
                        PERSONAL INFORMATION
                    </span>
                </div>
                        <div class="clear"></div>                        
                <div class="div_inline" style="width:100%; margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        FIRST NAME
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="firsNameExistCustomer" id="firsNameExistCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div> 
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        LAST NAME
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="lastNameExistCustomer" id="lastNameExistCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>                        
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        PHONE
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="phoneExistCustomer" id="phoneExistCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>                        
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        EMAIL
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="emailExistCustomer" id="emailExistCustomer" maxlength="200" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>
                        
                        
                        
                        
                        
                <!-- ---------Store Info section -------- -->        
                <div class="div_inline" style="width:90%; margin:3% 0% 0% 7%; ">
                    <span style="font-family:Consolas, monaco, monospace;  font-size:110%; font-weight:bold; color:#222222; ">
                        STORE OR COMPANY INFORMATION
                    </span>
                </div>
                        <div class="clear"></div>
                <div class="div_inline" style="width:90%; margin-top:-0.9%; margin-left:7%; ">                    
                    <span style="font-size:73%; color:#808080 ; ">
                        If you don&#39;t know this number, please contact your  Palladium Sale rep. This number is required.
                    </span>  
                </div>
                        <div class="clear"></div> 
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        PALLADIUM CUSTOMER NO.
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; text-align:right; ">                    
                       <input type="text" name="numberExistCustomer" id="numberExistCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div> 
                
                     
                        
                        
                        
                        
                <!-- ---------Login Info section -------- -->        
                <div class="div_inline" style="width:90%; margin:3% 0% 0% 7%; ">
                    <span style="font-family:Consolas, monaco, monospace;  font-size:110%; font-weight:bold; color:#222222; ">
                        LOGIN INFORMATION
                    </span>
                </div>
                        <div class="clear"></div>
                <div class="div_inline" style="width:90%; margin-top:-0.9%; margin-left:7%; ">                    
                    <span style="font-size:73%; color:#808080 ; ">
                        Please enter your preferred password
                    </span>  
                </div>
                         <div class="clear"></div>
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        PASSWORD
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="password" name="passwordExistCustomer" id="passwordExistCustomer" maxlength="100" size="20" value="" class="palladium_form_style" style="width:98%; " />
                    </div>
                </div>
                        <div class="clear"></div>
                <div class="div_inline" style="width:100%;  margin-top:0.3%;  ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right;  ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        CONFIRM PASSWORD
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="password" name="cpasswordExistCustomer" id="cpasswordExistCustomer" maxlength="100" size="20" value="" class="palladium_form_style" style="width:98%; " />
                    </div>
                </div>
                        <div class="clear"></div>
                        
                        
                        
                        
                        
                        
                <!-- ---------Invoice Info section -------- -->
                <div class="div_inline" style="width:90%; margin:3% 0% 0% 7%; ">
                    <span style="font-family:Consolas, monaco, monospace;  font-size:110%; font-weight:bold; color:#222222; ">
                        USER VALIDATION
                    </span>
                </div>
                        <div class="clear"></div>
                <div class="div_inline" style="width:90%; margin-top:-0.9%; margin-left:7%; ">                    
                    <span style="font-size:73%; color:#808080 ; ">
                        In order to verify your identity and create an account, we will ask for some additional data. 
                    </span>  
                </div>
                         <div class="clear"></div>  
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        INVOICE NUMBER RECEIVED IN THE LAST 12 MONTHS
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="inv12mExistCustomer" id="inv12mExistCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>                        
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        INVOICE DATE
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="invoiceExistCustomer" id="invoiceExistCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div> 
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:52%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        TOTAL AMOUNT OF INVOICE
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:38%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="tinvoiceExistCustomer" id="tinvoiceExistCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div> 
                        
                <div class="div_inline" style="width:100%;  margin-top:1%; ">        
                    <div class="div_inline" style="width:31%; margin-top:2px; ">
                        <img id="agTNCi" src="images/icon-checkbox-grey0.png" onclick="agreeTNC(2)"  style="float:right; max-width:90%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Customer - Agree Terms and Condition"   />          
                        <input type="hidden" id="agTNC" value="0" />
                        <!--<input type="checkbox" id="agTNC" style=" float:right; "  />--> <!-- required="required" --> 
                    </div>
                    <div id="agTnCT" class="div_inline" style="width:57%; margin-left:3px; padding-top:1px; text-align:left; font-size:75%; color:#808080 ; ">
                       Please check this box to confirm that you have read program 
                       <a href="javascript:CallPage(5)" title="Palladium Shoes - Terms and Condition" >
                       terms and conditions.  
                       </a>
                    </div>
                         <div class="clear"></div>        
                </div>        
                        <div class="clear"></div>  
                 
                        
                        
                
                        
                <div class="div_inline" style="width:100%; margin:3% 0% 3% 0%; "  >
                    
                    <div style="position:absolute; width:7%; height:auto; margin:0% 0% 0% 10%; font-size:120%; text-align:center; font-weight:bold; padding:1px 3px 1px 3px; border:1px solid #D9D9F3; ">
                        <a href="javascript:CallPage(1)" title="Palladium Shoes - back to home page" >
                           Back
                        </a>
                    </div>
                    
                    <div id="bg_submit2" style="margin-left:47%; " >  
                        <a href="#" title="Palladium Shoes - Submit" >
                           <input  type="submit" name="sbutton2" id="sbutton2" value="" class="submit_button"  onmouseover="onImage(2)"  onmouseout="offImage(2)"  style="margin-left:2px; max-width:98%; height:auto;"  />
                        </a>
                        <img id="submit2" src="images/submit2.jpg"  style="float:left; max-width:100%; height:auto;  border:0px solid #c3c; "  alt ="Palladium Shoes - Submit Data"   />                            
                    </div> 
                   
                </div>
                        <div class="clear"></div>       
                        
                    
                </form>        
                        
            </div>
                    <div class="clear"></div>
                    
                    
                    
            
        </div><!-- ---------- End - Div 2 Existing Customer --------- -->
        
        
        
        
        
        
        
        
        
        
        
        <div id="pageDiv3"><!-- ---------- Div 3 New Customer --------- -->            
            
            <div class="div_inline" style="width:100%; margin-top:2%; background-color:#222222;">
                <div class="div_inline" style="width:77%; margin-left:1%; margin-top:2px; ">
                    <img id="ExistingCustomer" src="images/new-customer-header1.jpg"  style=" max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Shoes - New Customers"   />          
                </div>
                <div class="div_inline" style="float:right; width:17%; margin-top:3px; ">
                    <img id="ExistingCustomer" src="images/logoP.jpg"  style="float:right; max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Shoes - Logo"   />          
                </div>
                      <div class="clear"></div>               
            </div>
                    <div class="clear"></div>
                    
                    
            <div class="div_inline" style="width:100%; background-color:#fff; "> 
                
                <div class="div_inline" style="width:100%; margin:1% 0% 0% 0%;padding:0px;  border:0px solid #f0f; text-align:center; ">
                   <span style="font-family:Consolas, monaco, monospace;  font-size:90%; font-weight:bold; color:#222222; ">
                        Interested in becoming a Palladium Account?<br />
                        Please complete the form below and a sales rep will contact you shortly.
                    </span>
                </div>
                        <div class="clear"></div>         
            </div>        
                    
            
            <form action="https://palladium-us.hubsoft.com/login.hub" method="post" name="createNewAccountForm" id="createNewAccountForm"  onsubmit="return  Submits(3)">
            <input type="hidden" name="m" value="login"/>
            <input type="hidden" name="c" value="yu33Gy030FHbs1k10Dn8IPSV002Mnlj" />       
                    
            
            <!-- ---------Personal Info section -------- -->        
            <div class="div_inline" style="width:100%; background-color:#fff; "> 
                
                <div class="div_inline" style="width:85%; margin:2% 0% 0% 0%; margin-left:auto; margin-right:auto; text-align:center; border:0px solid #0c0; ">
                   <span style="font-family:Consolas, monaco, monospace;  font-size:120%; font-weight:bold; color:#222222; ">
                        PERSONAL INFORMATION
                    </span>
                </div>
                        <div class="clear"></div>                        
                <div class="div_inline" style="width:100%; margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        FIRST NAME
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="firsNameNewCustomer" id="firsNameNewCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div> 
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        LAST NAME
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="lastNameNewCustomer" id="lastNameNewCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>
                 <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        TITLE
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="titleNewCustomer" id="titleNewCustomer" maxlength="50" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        PHONE
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="phoneNewCustomer" id="phoneNewCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>                        
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        EMAIL
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="emailNewCustomer" id="emailNewCustomer" maxlength="200" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>
                        
                        
                        
                        
                        
                <!-- ---------Store Info section -------- -->        
                <div class="div_inline" style="width:88%; margin:3% 0% 0% 0%; margin-left:auto; margin-right:auto; text-align:center;  border:0px solid #f0f; ">
                    <span style="font-family:Consolas, monaco, monospace;  font-size:120%; font-weight:bold; color:#222222; ">
                        STORE OR COMPANY INFORMATION
                    </span>
                </div>
                        <div class="clear"></div>                
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        STORE OR COMPANY NAME
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; text-align:right; ">                    
                       <input type="text" name="storeNewCustomer" id="storeNewCustomer" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div> 
                        
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        STREET ADDRESS
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; "> 
                       <textarea rows="4" cols="50" name="streetNewCustomer"  id="streetNewCustomer" class="palladium_form_style" style="float:left; width:98%; height: 20%;  "></textarea>                     
                    </div>
                </div>
                        <div class="clear"></div>
                        
                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        CITY
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="cityNewCustomer" id="cityNewCustomer" maxlength="200" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>
                        
                 <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        STATE/PROVINCE
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="stateNewCustomer" id="stateNewCustomer" maxlength="200" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>
                        
                 <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        ZIP CODE
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="zipNewCustomer" id="zipNewCustomer" maxlength="50" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div>
                        
                
                <div class="div_inline" style="width:100%; margin:3% 0% 3% 0%; "  >
                    
                    <div style="position:absolute; width:7%; height:auto; margin:0% 0% 0% 10%; font-size:120%; text-align:center; font-weight:bold; padding:1px 3px 1px 3px; border:1px solid #D9D9F3; ">
                        <a href="javascript:CallPage(1)" title="Palladium Shoes - back to home page" >
                           Back
                        </a>
                    </div>
                    
                    <div id="bg_submit3" style="margin-left:45%; " >  
                        <a href="javascript:Submits(3)" title="Palladium Shoes - Login" >
                           <input type="submit" name="sbutton3" id="sbutton3" value="" class="submit_button"  onmouseover="onImage(3)"  onmouseout="offImage(3)"  style="margin-left:2px; max-width:98%; height:auto;"  />
                        </a>
                        <img id="submit3" src="images/submit3.jpg"  style="float:left; max-width:100%; height:auto;  border:0px solid #c3c; "  alt ="Palladium Shoes - Submit Data"   />                            
                    </div> 
                   
                </div>
                        <div class="clear"></div>  
                      
                
            </div>        
                         
            </form>       
                    
                    
        </div><!-- ---------- End - Div 3 New Customer --------- --> 
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        <div id="pageDiv4"><!-- ---------- Div 4 Forgot Password --------- -->            
            
            <div class="div_inline" style="width:100%; margin-top:2%; background-color:#222222;">
                <div class="div_inline" style="width:77%; margin-left:1%; margin-top:2px; ">
                    <img id="ExistingCustomer" src="images/forgot-password-header1.jpg"  style=" max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Shoes - New Customers"   />          
                </div>
                <div class="div_inline" style="float:right; width:17%; margin-top:3px; ">
                    <img id="ExistingCustomer" src="images/logoP.jpg"  style="float:right; max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Shoes - Logo"   />          
                </div>
                      <div class="clear"></div>               
            </div>
                    <div class="clear"></div>
                    
                    
            <div class="div_inline" style="width:100%; background-color:#fff; "> 
                
                <div class="div_inline" style="width:100%; margin:1% 0% 0% 0%;padding:0px;  ">
                   
                    <div class="div_inline" style= "width:20%; margin-left:36%; text-align:right; padding-top:1%; border:0px solid #f0f; ">
                        <span style="font-family:Consolas, monaco, monospace;  font-size:110%; font-weight:bold; color:#222222; ">
                           Forgot Password
                        </span>
                    </div>
                    <div class="div_inline" style= "width:10%; margin-left:3px; padding-top:1%; border:0px solid #0f0; ">
                        <img id="ExistingCustomer" src="images/icon-question-mark-red.png"  style="float:left; max-width:100%; height:auto; border:0px solid #ccc; "  alt ="Palladium Shoes - Logo"   />          
                    </div>
                </div>
                
                
                        <div class="clear"></div>         
                        
                <div class="div_inline" style="width:90%; margin:1% 0% 0% 0%; padding:0% 5% 3% 6%; text-align:center; ">
                   <span style=" font-size:80%; font-weight:500; color:#222222; ">
                       Please enter your user name or email below

                    </span>
                </div>
                        <div class="clear"></div>
                        
                
                <form action="https://palladium-us.hubsoft.com/login.hub" method="post" name="ForogtPasswordForm" id="ForogtPasswordForm"  onsubmit="return  Submits(4)">
                    <input type="hidden" name="m" value="login"/>
                    <input type="hidden" name="c" value="pw77ouYYX6HG013BBKfxlj866FGdt" />

                <div class="div_inline" style="width:100%;  margin-top:0.3%; ">                    
                    <div class="div_inline" style="width:44%; margin:0% 0% 0% 0%; text-align:right; ">                    
                       <span style="font-family: Consolas, monaco, monospace; font-size:95%; font-weight:700; color:#222222; ">
                        USER NAME OR EMAIL
                       </span>
                    </div>                    
                    <div class="div_inline" style="width:30%; margin:0% 0% 0% 1%; ">                    
                       <input type="text" name="emailForgotPassword" id="emailForgotPassword" maxlength="100" size="40" value="" class="palladium_form_style" style="float:left; width:98%; "   />
                    </div>
                </div>
                        <div class="clear"></div> 
                        
                <div class="div_inline" style="width:100%; margin:3% 0% 5% 0%; "  >
                    
                    <div style="position:absolute; width:7%; height:auto; margin:0% 0% 0% 10%; font-size:120%; text-align:center; font-weight:bold; padding:1px 3px 1px 3px; border:1px solid #D9D9F3; ">
                        <a href="javascript:CallPage(1)" title="Palladium Shoes - back to home page" >
                           Back
                        </a>
                    </div>
                    
                    <div id="bg_submit4" style="margin-left:45%; " >  
                        <a href="javascript:Submits(4)" title="Palladium Shoes - forgot password" >
                           <input type="submit" name="sbutton4" id="sbutton4" value="" class="submit_button"  onmouseover="onImage(4)"  onmouseout="offImage(4)"  style="margin-left:2px; max-width:98%; height:auto;"  />
                        </a>
                        <img id="submit4" src="images/submit4.jpg"  style="float:left; max-width:100%; height:auto;  border:0px solid #c3c; "  alt ="Palladium Shoes - Submit Data"   />                            
                    </div> 
                   
                </div>
                        <div class="clear"></div>          
            
                </form>                
              
                        
            </div> 
                    
                    
               
                    
                    
        </div><!-- ---------- End - Div 4 Forgot Password --------- --> 
         
        
        
        
        
        
        
        
        
        
        
        
        
        <div id="pageDiv5"><!-- ---------- Div 5 Terms and Conditions --------- -->            
            
            <div class="div_inline" style="width:100%; margin-top:2%; background-color:#222222;">
                <div class="div_inline" style="width:77%; margin-left:1%; margin-top:2px; ">
                    <img id="ExistingCustomer" src="images/terms-condition-header1.jpg"  style=" max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Shoes - New Customers"   />          
                </div>
                <div class="div_inline" style="float:right; width:17%; margin-top:3px; ">
                    <img id="ExistingCustomer" src="images/logoP.jpg"  style="float:right; max-width:100%; height:auto;  border:0px solid #ccc; "  alt ="Palladium Shoes - Logo"   />          
                </div>
                      <div class="clear"></div>               
            </div>
                    <div class="clear"></div>
                    
                    
            <div class="div_inline" style="width:100%; background-color:#fff; "> 
                
                <div class="div_inline" style="width:100%; margin:1% 0% 0% 0%;padding:0px;  border:0px solid #f0f; text-align:center; ">
                   <span style="font-family:Consolas, monaco, monospace;  font-size:100%; font-weight:bold; color:#222222; ">
                        Terms and Conditions
                    </span>
                </div>
                        <div class="clear"></div>         
                        
                <div class="div_inline" style="width:90%; margin:1% 0% 0% 0%; padding:0% 5% 3% 6%; text-align:left; ">
                   <span style=" font-size:74%; font-weight:300; color:#222222; ">
                       <ul id="ulistItem">
                           <li style="margin-top:0%;">
                              To be eligible for on line ordering, the applicant must be an existing retail customer of Palladium
                           </li>
                           <li>
                              The Store Manager or Buyer must complete the on line registration process.  
                              You will be asked to enter in some recent Palladium invoice information during this process.  
                              If your Information can be verified on line, you can complete the set up process, receive a user ID and Password for immediate ordering.                           </li>
                           
                           <li>
                              If your account cannot be verified on line, 
                              you may contact Customer service at 1-800-938-8000 and they will assist you with the registration process
                           </li>
                           <li>
                              At once orders begin processing through our system immediately so revisions and cancellations cannot be accepted for this type of order.  
                              Additionally, orders for future delivery dates submitted on line cannot be modified on line once submitted. 
                              You may however contact customer service and they will review the status of your order to see if revisions can be accommodated.  
                           </li>
                           <li>
                              At once orders begin processing through our system immediately so revisions and cancellations cannot be accepted for this type of order.  
                              Additionally, orders for future delivery dates submitted on line cannot be modified on line once submitted. 
                              You may however contact customer service and they will review the status of your order to see if revisions can be accommodated.  
                           </li>
                           <li>
                              Palladium Standard returns Policy Applies. 
                           </li>
                           <li>
                              Existing Account payment terms will apply. 
                           </li>
                           <li>
                              Pre Pay accounts may only place orders for at once shipments (1 to 7 days from order date ) and must provide payment 
                              information via the secure cybersource gateway before an order is submitted. 
                              When paying by credit card, the card must be in possession at the time of purchase, as we require the CVV number from the card. 
                           </li>
                           <li>
                              Please do not phone, fax or e-mail orders placed on line to our customer service department as that will result in duplicate shipments.
                           </li>
                           <li>
                              We will use each accounts standard ship via information as already recorded in our systems.  
                              This will be visible to you at the time you are placing your order.  Shipping charges will be added to the invoice.
                           </li>
                       </ul>

                    </span>
                </div>
                        <div class="clear"></div>
                        
                        
                <div style=" width:7%; height:auto; margin:0% 0% 5% 47%; font-size:120%; text-align:center; font-weight:bold; padding:1px 3px 1px 3px; border:1px solid #D9D9F3; ">
                    <a href="javascript:CallPage(1)" title="Palladium Shoes - back to home page" >
                       Back
                    </a>
                </div>  
                            <div class="clear"></div>
                        
            </div> 
                    
                    
               
                    
                    
        </div><!-- ---------- End - Div 5 Terms and Conditions --------- --> 
        
        
        
        
        
        
        
        
        
       
        
        
        
        
        
    </div><!-- end main div -->
    

    
    
    
<script type="text/javascript">
    
        
    
  if(LPage == 0){ //Fresh page Load .... 
     LPage = 1;          
  }else{ //Old page Load .... 
     LPage = LPage;  
  }
    
    //checkCookie('ksHubsoftLogInPage');
    CallPage(LPage);
    
    
  function CallPage(cp) {
    var apl = cp;  
    LPage = apl;
    for (var p = 1; p <= 5; p++) {     
       if(p == apl){
          document.getElementById("pageDiv"+p).style.display='block';
       }else{
          document.getElementById("pageDiv"+p).style.display='none'; 
       }
    }
    windowChanged();    
  }  
    
 
 
 
</script>

</body>

</html>
<?php ob_end_flush(); ?>