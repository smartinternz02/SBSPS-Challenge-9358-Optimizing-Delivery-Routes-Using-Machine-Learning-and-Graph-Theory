$(document).ready(function() {

    $('.jq_submit_button').click(function(){
            var returns = true;
            $('#error_name').html('');
            $('#error_email').html('');
            $('#error_description').html('');
            $('#error_contact_no').html('');
       
            if($.trim($('#name').val()) == ""){
                $('#error_name').html('Please enter your name');
                returns = false;
            }

            if($('#email').val() == ''){
                $('#error_email').html('Please enter your email');
                returns = false;
            }else if(!validateEmail($('#email').val())){
                $('#error_email').html('Please enter valid email');
                returns = false;
            }
       
            if($.trim($('#description').val()) == ""){
                $('#error_description').html('Please enter your description');
                returns =  false;
            }
            if($.trim($('#contact_no').val()) == ""){
                $('#error_contact_no').html('Please enter your contact');
                returns =  false;
            }else if(!validatePhone($('#contact_no').val())){
                $('#error_contact_no').html('Invalid mobile number');
                returns = false;
            }
             
            if(returns == true){ 
              var ajaxOptions = {
                  url         : "dev_mail.php",  
                  resetForm   : false,
                  datatype    : 'json',
                  success     : ajaxSuccess,
              };
                
              $( '#contactForm' ).ajaxForm( ajaxOptions );
              $( '#contactForm' ).on('submit',function(){
                 //$('#lodingimg').show();
                 $('#submit').attr('disabled', "disabled");
              });
               
              function ajaxSuccess( response , responseCode , xhr ){
                //$('#lodingimg').hide();
                $('#submit').removeAttr('disabled');
                var response = $.parseJSON( response );
                if(response.success == true){
                  $('.text-success').text(response.msg).show();
                  $( '#contactForm' ).each(function(){
                      this.reset();
                  });
                }else if(response.success == false){
                  
                }
              }
            }else{
              return returns
            }   
          });
})
function validateEmail(email){
   var reg = /^\w+([-+.']\w+)*@\w+([-.]\w+)*\.\w+([-.]\w+)*$/
   if (reg.test(email)){
    return true;
   }
   else{
    return false;
   }
}
function validatePhone(txtPhone){
    var filter = /^[0-9-+]+$/;
    if (filter.test(txtPhone)) {
        return true;

    }
    else {
        return false;

    }

}