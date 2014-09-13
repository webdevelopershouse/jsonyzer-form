/*
 * Project Name : JSONyzer Form
 * Project Version : 1.0
 * Created at : September 12, 2014
 * Modified at : September 12, 2014
 * File Name : wdh.imi.jsonyzer.form.js
 * Author : Web Developers House
 * Author Website : www.wdh.im
*/

var $jWDH = jQuery.noConflict();

$jWDH.fn.extend({
    
    
    wdhFormJS:function(data){
        
        var id = $jWDH(this)['selector'],
            options = {"fields": {}},
                
        form = {
            start: function(){
                
                //Loading Data
                form.load();
                
                // Show form
                form.view();
            },
           
            load: function(){
                
                $jWDH.extend(options, data);
                
            },        
            
            view: function(){
               //Add form in container 
               $jWDH(id).append(form.generate()); 
            },
            
            generate: function(){
                var formHTML = new Array(),
                    formData = options['form'],
                    formSettings = formData['settings'];
                
                formHTML.push('<form id="'+formSettings['id']+'" name="'+formSettings['name']+'" class="'+formSettings['class']+'">');
                formHTML.push(  fields.view());
                formHTML.push('</form>');
                
                return formHTML.join('');
            }        
            
        },
                
        fields = {
            view: function(){
              return fields.generate();
                
            },
                    
            generate: function(){
                var fieldsHTML = new Array(),
                    fieldsOptions = options['fields'];
            
                for (var key in fieldsOptions){
                    fieldsHTML.push(field.view(fieldsOptions[key]['field']));
                }
                
                return fieldsHTML.join('');
            }
           
        },
                
        field = {
            view: function(fieldData){
              return field.generate(fieldData);
            },
                    
            generate:function(fieldData){
                var fieldHTML = new Array(),
                    labelData = fieldData['label'],
                    inputData = fieldData['input'],
                    fieldSettings = fieldData['settings'];
                
                fieldHTML.push('    <div id="'+fieldSettings['id']+'" class="'+fieldSettings['class']+'" name="'+fieldSettings['name']+'">');
                fieldHTML.push(         label.view(labelData));
                fieldHTML.push(         input.view(inputData));
                fieldHTML.push('    </div>');
                
                return fieldHTML.join('');
                
            }        
        },
        
        label = {
            view: function(labelData){
              return label.generate(labelData);
            },
                    
            generate:function(labelData){
                var labelHTML = new Array();
                
                labelHTML.push('    <label for="'+labelData['for']+'" class="'+labelData['class']+'">'+labelData['name']+'</label>');
                
                return labelHTML.join('');
            }   
    
        },
        
        input = {
            view: function(inputData){
               return input.generate(inputData);
            },
                    
            generate:function(inputData){
                var inputHTML = new Array();
                
                inputHTML.push('    <input id="'+inputData['id']+'" type="'+inputData['type']+'" name="'+inputData['name']+'" value="'+inputData['value']+'" placeholder="'+inputData['placeholder']+'" />');
                
                return inputHTML.join('');
            }   
    
        };        

        
        // End Plugin
        form.start();
    
    }   
    
});
