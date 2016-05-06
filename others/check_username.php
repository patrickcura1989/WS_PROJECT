<html>
    <head>
        <script language="javascript" type="text/javascript" src="http://code.jquery.com/jquery-1.4.4.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {

                //the min chars for username
                //http://web.enavu.com/tutorials/checking-username-availability-with-ajax-using-jquery/
                var min_chars = 3;

                //result texts
                var characters_error = 'Minimum amount of chars is 3';
                var checking_html = 'Checking...';

                //when button is clicked
                $('#check_username_availability').click(function () {
                    //run the character number check
                    if ($('#username').val().length < min_chars) {
                        //if it's below the minimum show characters_error text '
                        $('#username_availability_result').html(characters_error);
                    } else {
                        //else show the cheking_text and run the function to check
                        $('#username_availability_result').html(checking_html);
                        check_availability();
                    }
                });

            });

            //function to check username availability
            function check_availability() {

                //get the username
                var username = $('#username').val();

                //use ajax to run the check
                $.post("checkusername.php", {username: username},
                        function (result) {
                            //if the result is 1
                            if (result == 1) {
                                //show that the username is available
                                $('#username_availability_result').html(username + ' is Available');
                            } else {
                                //show that the username is NOT available
                                $('#username_availability_result').html(username + ' is not Available');
                            }
                        });
            }
        </script>
    </head>
    <body>
        <input type='text' id='username'> 
        <div id='username_availability_result'></div>
        <input type='button' id='check_username_availability' value='Check Availability'>
    </body>
</html>