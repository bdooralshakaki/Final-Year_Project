<?php
include('../Accounts/Header.php');

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Lets Chat</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
      <div id="wrapper2">
        <div id="page-wrapper">
            <div class="row">
               <div class="col-lg-2"></div>
               <div class="col-lg-8"> <!-- col-lg-4 right side setup -->
               <center><h1> Chat with other users here:</h1> </center>
               </br>
                                <div class="chat-panel panel panel-default">
                                    <div class="panel-heading">
                                        <i class="fa fa-comments fa-fw"></i> Chat as: <input class="testing" type="text" id="name" name="name" disabled value="<?php echo $row_session['userName']; ?>"/>
                                    </div>
                                    <div class="panel-body" id="shout">
                                    </div>
                                    <div class="panel-footer">
                                        <form method="post" name="chatform" id="chatform">
                                            <div class="input-group">
                                                <input type="text" id="message" name="message" class="form-control input-sm" placeholder="Type your message here..." />
                                                <span class="input-group-btn">
                                                    <input class="btn btn-warning btn-sm" type="submit" id="submit" value="Send"/>
                                                </span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <script type="text/javascript">
                                        function refresh_shoutbox() {
                                            var data = 'refresh=1';
                                            $.ajax({
                                                type: "POST",
                                                url: "chatconfig.php",
                                                data: data,
                                                success: function(html){ // this happen after we get result
                                                    $("#shout").html(html);
                                                }
                                            });
                                        }
                                        refresh_shoutbox();
                                        setInterval("refresh_shoutbox()", 2000);
                                        
                                        $("#chatform").submit(function(e) {
                                            var message = document.getElementById('message').value;
                                            if (message.length < 1) {
                                                alert("The field was empty, Input some message next time!");
                                                e.preventDefault(); // avoid to execute the actual submit of the form.
                                            } else {
                                                // getting the values that user typed
                                                var name    = $("#name").val();
                                                var message = $("#message").val();
                                                // forming the queryString
                                                var data = 'name='+ name +'&message='+ message;
                                                
                                                $.ajax({
                                                    type: "POST",
                                                    url: "chatconfig.php",
                                                    data: data,
                                                    success: function(html) { // this happen after we get result
                                                        $("#shout").slideToggle(0, function(){
                                                            $(this).html(html).slideToggle(0);
                                                            $("#message").val("");
                                                            document.getElementById('message').setAttribute('disabled', true);
                                                            setTimeout(function() {
            													document.getElementById('message').removeAttribute('disabled', false);
            												}, 10000); // <-- time in milliseconds
            
                                                        });
                                                    }
                                                });
                                                e.preventDefault(); // avoid to execute the actual submit of the form.
                                            }
                                        });
                                    </script>
                       <div class="col-lg-2"></div>
                    </div>
                </div>
            </div>
            <footer class="py-3 bg-dark">
                  <div class="container">
                    <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
                  </div>
            </footer>
</body>
</html>