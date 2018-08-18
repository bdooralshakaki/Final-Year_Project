<?php
    ob_start();
    session_start();

    include '../Accounts/navbar.php';
    include '../Database/dbconnect.php';
    
    
?>

<!DOCTYPE html>
<html>
<head>
    <title>College C&S </title> 
    <link rel="stylesheet" type="text/css" href="../css/events.css">
    <link rel="stylesheet" href="../css/bootstrap1.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <div id="wrapper">
        <div id="page-wrapper">
        	<div class="row">
        	<div class="col-lg-12">
                <div class="hero">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div id="content">
                                    <h1>Colleges Events</h1>
                                    <h3>Scroll down to see all Events</h3>
                                    <hr>
                                    <hr>
                                    <button class="btn btn-default btn-lg"><i class="fa fa-hand-o-right" aria-hidden="true"></i><a href="events.php">Take me to Events Calendar</a></button>

                                </div><!-- /.content -->
                            </div><!-- /.col-lg-12 -->
                        </div><!-- /.row -->
                    </div><!-- /.container -->
                    
                </div><!-- /.Hero -->
                    <div id="offers">
                        <h3 class="events">Have an event to promote? Contact us at <a href="mailto:andremacnamara12@gmail.com?Subject=Hello%20again" target="_top">info@collegecs.ie</a></h3>
                    </div>
                <div class="container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Colleges</th>
                                <th>When</th>
                                <th>Event</th>
                                <th>Where</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>NCI</td>
                                <td>July 20th</td>
                                <td>All Pints 4 euro with NCI student card.</td>
                                <td>Custom House Square, Mayor Street Lower, North Dock, Dublin</td>
                            </tr>
                            <tr>
                                <td>DIT</td>
                                <td>July 21th</td>
                                <td>Talbot St, Mountjoy, Dublin</td>
                                <td>20% before 5pm with valid student card.</td>
                            </tr>
                            <tr>
                                <td>DCU</td>
                                <td>July 25th</td>
                                <td>40 Mary St, North City, Dublin 1</td>
                                <td>Back to college offer. 50% of all sports bags with valid student card,</td>
                            </tr>
                            <tr>
                                <td>UCD</td>
                                <td>July 29th</td>
                                <td>26 Wexford St, Dublin 2</td>
                                <td>Free Entry and half price drinks with student card.</td>
                            </tr>
                            <tr>
                                <td>TCD</td>
                                <td>August 1st</td>
                                <td>Phoenix Park, Dublin 8</td>
                                <td>Half price admission</td>
                            </tr>
                            <tr>
                                <td>Maynooth</td>
                                <td>August 9th</td>
                                <td>St James's Gate, Ushers, Dublin 8</td>
                                <td>Free admission for 3rd level students.</td>
                            </tr>
                            <tr>
                                <td>DIT</td>
                                <td>August 10th - 13th</td>
                                <td>The Parnell Centre, Parnell St, Rotunda, Dublin 1</td>
                                <td>2nd Ticket half price.</td>
                            </tr>
                            <tr>
                                <td>NCI</td>
                                <td>August 22nd</td>
                                <td>Jervis Shopping Centre Mary Street, North City, Dublin</td>
                                <td>30% off any burger with valid student card,</td>
                            </tr>
                            <tr>
                                <td>TCD</td>
                                <td>August 22nd</td>
                                <td>Get your student leap card on the spot for 12 euro. More details on the <a href="http://www.leapcard.ie">Leap Card Website</a> </td>
                                <td>Trinity College Dublin, College Green, Dublin 2</td>
                            </tr>
                            <tr>
                                <td>Maynooth</td>
                                <td>Ongoing</td>
                                <td>Various Location</td>
                                <td>20 euro per month membership with student card.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
          </div>
        </div>
    </div>
    <footer class="py-3 bg-dark">
                  <div class="container">
                    <p class="m-0 text-center text-light">Copyright &copy; College C&S 2018</p>
                  </div>
            </footer>
</body>
<html>