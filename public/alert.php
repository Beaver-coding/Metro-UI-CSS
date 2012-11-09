<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
     <!-- <script>
                         function ma(content) {
                            // $("#metro-alert").fadeOut("slow");
                             $("#metro-alert-content").html(content);
                             $("#metro-alert").fadeIn("slow");
                             $("#metro-black").fadeIn("slow");
                             
                         }
                         function maClose(){
                             $("#metro-alert").fadeOut("slow");
                             $("#metro-black").fadeOut("slow");
                             
                         }
         </script>  -->
    <meta charset="utf-8">
    <meta name="viewport" content="target-densitydpi=device-dpi, width=device-width, initial-scale=1.0, maximum-scale=1">
    <meta name="description" content="Modern UI CSS">
    <meta name="author" content="Sergey Pimenov">
    <meta name="keywords" content="windows 8, modern style, modern ui, style, modern, css, framework">

    <link href="css/modern.css" rel="stylesheet">
    <link href="css/modern-responsive.css" rel="stylesheet">
    <link href="css/site.css" rel="stylesheet" type="text/css">
    <link href="js/google-code-prettify/prettify.css" rel="stylesheet" type="text/css">

    <script src="js/jquery-1.8.2.min.js"></script>
    <script src="js/google-analytics.js"></script>
    <script src="js/github.info.js"></script>
    <script src="js/google-code-prettify/prettify.js"></script>

    <script src="message-dialogs.js"></script>

    <title>Modern UI CSS</title>
</head>
<body class="modern-ui" onload="prettyPrint()">
    
 
<!-- <div id="metro-black" style="display: none;" >
 
</div>  -->
    <div class="page secondary">
        <? include("header.php")?>

        <div class="page-header">
            <div class="page-header-content">
                <h1>Message Dialogs<small>Javascript</small></h1>
                <a href="/" class="back-button big page-back"></a>
            </div>
        </div>

        <div class="page-region">
            <div class="page-region-content">
                
                 <button onclick="md('Content for Alert')">
                             Demo
                         </button>
            <!--    <div id="metro-alert" style="" class="message-dialog bg-color-green fg-color-white" >
            <p id="metro-alert-content" >
                </p>
                 <button class="place-right" onclick="maClose()" >
                     Close
                 </button>
</div>  -->
                <div class="grid">
                    <div class="row">
                        <div class="span10">
                            
 <p>
     
         
                          
         
             
          To use you must 
         include <code>message-dialogs.js</code> in your <code>header</code>.  Message Diaglogs requires <a href="http://jquery.com">jQuery</a>.
        <!-- <li>
         include the following html inside the <code>page-region-content</code> class:
             
             <pre class="prettyprint linenums span10">
&lt;div id="metro-alert" style="" class="message-dialog bg-color-green fg-color-white" &gt;
            &lt;p id="metro-alert-content" &gt;
                &lt;/p&gt;
                 &lt;button class="place-right" onclick="maClose()" &gt;
                     Close
                 &lt;/button&gt;
&lt;/div&gt; 

&lt;div id="metro-black" style="display: none;" &gt;

&lt;/div&gt; 
            </pre>
         </li> -->
     
                            

                          
                     <p>
                        
                        
                       
                         <!-- <div id="metro-alert" style="" class="message-dialog bg-color-green fg-color-white">
                                    <p id="metro-alert-content">Content for message dialog</p>
                                    <button class="place-right" onclick="maClose()">Close</button>
                                </div>
                            <div style="" id="metro-black">
                                
                            </div> -->

                            <h3>
                                To Create a Messsage Dialog:
                            </h3>
                           <p>
                               Call the function <code>md( content )</code>.  The paremeter <code>content</code> is required.  
                               
                            </p>
                            <h4>
                              Example  
                            </h4>
<pre class="prettyprint linenums span10">
    md("There was an error");
</pre>
                            <button onclick="md('There was an error')">
                                Try it
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <? include("footer.php")?>

    </div>
    <?php include("counter.php");?>

</body>
</html>