<?php
/*
 * Project Name : JSONyzer Form
 * Project Version : 1.0
 * Created at : September 13, 2014
 * Modified at : September 13, 2014
 * File Name : index.php
 * Author : Web Developers House
 * Author Website : www.wdh.im
*/
?>
<html>
    <head>
        <title>JSON FORM</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css">
        <script src="//code.jquery.com/jquery-1.10.2.js"></script>
        <script src="//code.jquery.com/ui/1.11.1/jquery-ui.js"></script>
        <script type="text/javascript" src="libs/js/json2.js"></script>
        <script type="text/javascript" src="js/wdh.imi.jsonyzer.form.js"></script>
        <link href="css/wdh.imi.jsonyzer.form.css" rel="stylesheet">
    </head>
    <body>
       
        <div id="wdh-form" class="wdh-form">
            
        </div>
         <script type="text/javascript">
   //         $jWDH('#ID_CONTAINER').NUMEPLUGIN();
              var options = {"fields": {
                                "0": {
                                    "field": {
                                        "settings": {
                                            "name"    : "",
                                            "id"      : "",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "label": {
                                            "name"    : "Email",
                                            "for"     : "email",
                                            "position": "first",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "input": {
                                            "name"    : "email",
                                            "id"      : "email",
                                            "type"    : "text",
                                            "value"   : "",
                                            "position": "second",
                                            "css"     : "",
                                            "class"   : "",
                                            "placeholder" : "typing"
                                        }
                                    }
                                }
                                   
                              },
                              
                                    "form": {
                                        "settings": {
                                            "name"    : "",
                                            "id"      : "",
                                            "css"     : "",
                                            "class"   : ""
                                        }
                                    }
                                   
                            };
              $jWDH('#wdh-form').wdhFormJS(options);
        </script>
    </body>
</html>