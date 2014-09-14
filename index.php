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
                                        },
                                        "fieldoptions": {
                                            "0":{
                                                "label"    : "Masculin",
                                                "value"    : "masculin"
                                            },
                                            "1":{
                                                "label"    : "Feminin",
                                                "value"    : "feminin"
                                            }
                                        }        
                                    }
                                },
                                "1": {
                                    "field": {
                                        "settings": {
                                            "name"    : "",
                                            "id"      : "",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "label": {
                                            "name"    : "Name",
                                            "for"     : "name",
                                            "position": "first",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "input": {
                                            "name"    : "name",
                                            "id"      : "name",
                                            "type"    : "text",
                                            "value"   : "",
                                            "position": "second",
                                            "css"     : "",
                                            "class"   : "",
                                            "placeholder" : "typing"
                                        },
                                        "fieldoptions": {
                                            "0":{
                                                "label"    : "Masculin",
                                                "value"    : "masculin"
                                            },
                                            "1":{
                                                "label"    : "Feminin",
                                                "value"    : "feminin"
                                            }
                                        }        
                                    }
                                },
                                "2": {
                                    "field": {
                                        "settings": {
                                            "name"    : "",
                                            "id"      : "",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "label": {
                                            "name"    : "Adress",
                                            "for"     : "adress",
                                            "position": "first",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "input": {
                                            "name"    : "adress",
                                            "id"      : "adress",
                                            "type"    : "textarea",
                                            "value"   : "",
                                            "position": "second",
                                            "css"     : "",
                                            "class"   : "",
                                            "placeholder" : "typing"
                                        },
                                        "fieldoptions": {
                                            "0":{
                                                "label"    : "Masculin",
                                                "value"    : "masculin"
                                            },
                                            "1":{
                                                "label"    : "Feminin",
                                                "value"    : "feminin"
                                            }
                                        }        
                                    }
                                },        
                                "3": {
                                    "field": {
                                        "settings": {
                                            "name"    : "",
                                            "id"      : "",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "label": {
                                            "name"    : "",
                                            "for"     : "",
                                            "position": "first",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "input": {
                                            "name"    : "",
                                            "id"      : "",
                                            "type"    : "submit",
                                            "value"   : "Submit",
                                            "position": "second",
                                            "css"     : "",
                                            "class"   : "",
                                            "placeholder" : ""
                                        },
                                        "fieldoptions": {
                                            "0":{
                                                "label"    : "Masculin",
                                                "value"    : "masculin"
                                            },
                                            "1":{
                                                "label"    : "Feminin",
                                                "value"    : "feminin"
                                            }
                                        }        
                                    }
                                },
                                "4": {
                                    "field": {
                                        "settings": {
                                            "name"    : "",
                                            "id"      : "",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "label": {
                                            "name"    : "Gender",
                                            "for"     : "gender",
                                            "position": "first",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "input": {
                                            "name"    : "gender",
                                            "id"      : "gender",
                                            "type"    : "select",
                                            "value"   : "",
                                            "position": "second",
                                            "css"     : "",
                                            "class"   : "",
                                            "placeholder" : ""
                                        },
                                        "fieldoptions": {
                                            "0":{
                                                "label"    : "Masculin",
                                                "value"    : "masculin"
                                            },
                                            "1":{
                                                "label"    : "Feminin",
                                                "value"    : "feminin"
                                            }
                                        }        
                                    }
                                },
                                "5": {
                                    "field": {
                                        "settings": {
                                            "name"    : "",
                                            "id"      : "",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "label": {
                                            "name"    : "Radio",
                                            "for"     : "radio",
                                            "position": "first",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "input": {
                                            "name"    : "radio",
                                            "id"      : "radio",
                                            "type"    : "radio",
                                            "value"   : "",
                                            "position": "second",
                                            "css"     : "",
                                            "class"   : "",
                                            "placeholder" : ""
                                        },
                                        "fieldoptions": {
                                            "0":{
                                                "label"    : "KissFm",
                                                "value"    : "kiss"
                                            },
                                            "1":{
                                                "label"    : "Zu",
                                                "value"    : "zu"
                                            }
                                        }        
                                    }
                                },
                                "6": {
                                    "field": {
                                        "settings": {
                                            "name"    : "",
                                            "id"      : "",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "label": {
                                            "name"    : "Countries",
                                            "for"     : "contries",
                                            "position": "first",
                                            "css"     : "",
                                            "class"   : ""
                                        },
                                        "input": {
                                            "name"    : "contries",
                                            "id"      : "contries",
                                            "type"    : "checkbox",
                                            "value"   : "",
                                            "position": "second",
                                            "css"     : "",
                                            "class"   : "",
                                            "placeholder" : ""
                                        },
                                        "fieldoptions": {
                                            "0":{
                                                "label"    : "France",
                                                "value"    : "france"
                                            },
                                            "1":{
                                                "label"    : "Spain",
                                                "value"    : "spain"
                                            },
                                            "2":{
                                                "label"    : "Vatican",
                                                "value"    : "Vatican"
                                            },
                                            "3":{
                                                "label"    : "London",
                                                "value"    : "london"
                                            }        
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