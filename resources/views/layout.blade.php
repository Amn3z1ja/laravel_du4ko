<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
  
    
    <!-- fancybox_master -->
     <link rel="stylesheet" type="text/css" href="js\fancybox-master\dist\jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/main.css" text="text/css">

    <!-- slider -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    
<header>
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-3 main-logo">
                    <a href="/">
                        <img src="http://www.uaefinder.com/assets/images/logo/travel-logo.png" alt="">
                    </a>
                </div>
                <div class="col-xs-9">
                    <ul class="main-menu">
                        <li class="main-menu-item active <?php echo $page == 'index' ? 'active' : ''; ?>">
                            <a href="/">Home</a>
                        </li>
                        <li class="main-menu-item <?php echo $page == 'articles' ? 'active' : ''; ?>">
                            <a href="/articles">Articles</a>
                        </li>
                        <li class="main-menu-item <?php echo $page == 'chat' ? 'active' : ''; ?>">
                            <a href="/chat">Chat</a>
                        </li>
                        <li class="main-menu-item <?php echo $page == 'register' ? 'active' : ''; ?>">
                            <a href="/registration">Register</a>
                        </li>
                        <li class="main-menu-item<?php echo $page == 'about us' ? 'active' : ''; ?>">
                            <a href="/about_us">About us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>
   
   @yield('content')

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    &copy; Tour, Since 1999, All rights reserved
                </div>
            </div>    
        </div>
    </footer>
    
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
    

   
      
    <!-- fancybox_master -->
        <script src="//code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script src="js\fancybox-master\dist\jquery.fancybox.min.js"></script>
    <!-- fancybox_master -->
    
    <script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>   
    
    </script type="text/javascript" src="js/main.js">
    
<!-- registration -->
     <script>

      $('#reg-form').submit(function(){
            var errors = [];
            $('.errors ul').html('');
            $('.has-error').removeClass('has-error');

            if ($('input[name="username"]').val() == '') {
                errors.push('Please enter username');
                $('input[name="username"]').addClass('has-error');
            }
            if ($('input[name="password"]').val() == '') {
                errors.push('Please enter password');
                $('input[name="password"]').addClass('has-error');
            }
            if ($('input[name="password"]').val().length < 8) {
                errors.push('Password must be at least 8 symold');
                $('input[name="password"]').addClass('has-error');
            }
            if ($('input[name="password2"]').val() == '') {
                errors.push('Please retype the password');
                $('input[name="password2"]').addClass('has-error');
            }
            if ($('input[name="password2"]').val() != $('input[name="password"]').val()) {
                errors.push('Passwords must match');
                $('input[name="password"]').addClass('has-error');
                $('input[name="password2"]').addClass('has-error');
            }
            if ($('input[name="first_name"]').val() == '') {
                errors.push('Please enter first name');
                $('input[name="first_name"]').addClass('has-error');
            }
            if ($('select[name="country"]').val() == 0) {
                errors.push('Please select coutnry');
                $('select[name="country"]').addClass('has-error');
            }
            if ($('input[name="agree"]').is(":checked") == false) {
                errors.push('Please agree with this amazng stuff');
                $('input[name="agree"]').addClass('has-error');
            }
            if (errors.length > 0) {
                // handle errors
                for (var index = 0; index < errors.length; index++) {
                    var element = errors[index];
                    $('.errors ul').append('<li>' + element + '</li>');
                }
                $('.errors').show();
                return false;
            }
        });
    </script> 

<!-- Chat  -->
    <script>
        var app = new Vue({
            el: '#chat',
            data: {
                messages: [
                ],
                newMessageUsername: "",
                newMessageText: "",
            },
            created:function(){
                var that = this;
                $.getJSON('/chat/get-messages', function(resp){
                    for (var index = 0; index <resp.lenght; index++) {
                        var element =resp[index];
                        console.log(element);
                        var newAdd = {
                        username: element.username,
                        text: element.created_at
                       
                    }
                    
                  this.messages.push(newAdd);
                    }
                })

            },
            methods: {
                sendMessage: function(){
                    var newAdd = {
                        username: this.newMessageUsername, // Peteris
                        text: this.newMessageText, // some text
                        date: new Date()
                    }
                    
                    this.messages.push(newAdd);
                    this.newMessageText = '';
                    $.post('/chat/save-message', newAdd, function(res){
                        console.log(res);
                    });
                }
            }
        });
    
    </script>
<!-- about_us -->
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> 

    <script>
        $('#tabs').tabs();
    </script>

   
    <!-- Google map -->
<script>
    function initMap() {
  var uluru = {lat: -25.363, lng: 131.044};
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 4,
    center: uluru
  });
  var marker = new google.maps.Marker({
    position: uluru,
    map: map
  });
}

</script>
     <script> 
     $('[data-fancybox="gallery"]').fancybox({
	
});
    </script> 
    </body>
</html>  
    