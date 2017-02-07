<?php
// echo "<head>
//             <meta charset=\"UTF-8\">
//             <title> Profile</title>
//         </head>";
echo "<script src=\"javascript/my_script.js\"></script>";
echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js\"></script>";
echo "<script type=\"text/javascript\" src=\"javascript/smoothscroll.js\"></script>";
echo "<script type=\"text/javascript\" src=\"javascript/smoothscroll.js\"></script>";
echo " <link rel=\"stylesheet\" href=\"css/cssstyle.css\" >";
?>


    <link href='fullCalendar/fullcalendar.min.css' rel='stylesheet' />
    <link href='fullCalendar/fullcalendar.print.min.css' rel='stylesheet' media='print' />
    <script src='fullCalendar/lib/moment.min.js'></script>
    <script src='fullCalendar/lib/jquery.min.js'></script>
    <script src='fullCalendar/fullcalendar.min.js'></script>
    <script>
        $(document).ready(function() {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay,listWeek'
                },
                defaultDate: '<?php echo date("Y-m-d"); ?>',
                navLinks: true, // can click day/week names to navigate views
                editable: true,
                eventLimit: true, // allow "more" link when too many events
                events: [
                    {
                        title: 'All Day Event',
                        start: '2016-12-01'
                    },
                    {
                        title: 'Long Event',
                        start: '2016-12-07',
                        end: '2016-12-10'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-12-09T16:00:00'
                    },
                    {
                        id: 999,
                        title: 'Repeating Event',
                        start: '2016-12-16T16:00:00'
                    },
                    {
                        title: 'Conference',
                        start: '2016-12-11',
                        end: '2016-12-13'
                    },
                    {
                        title: 'Meeting',
                        start: '2016-12-12T10:30:00',
                        end: '2016-12-12T12:30:00'
                    },
                    {
                        title: 'Click for Google',
                        url: 'http://google.com/',
                        start: '2016-12-28'
                    }
                ]
            });
        });
    </script>

    <div class='container' onresize="floatFunction()">
        <div id='top' >
            <a href="#top2" class="smoothScroll"><div class="halfDiv adjust">Your Name</div></a>
            <div class="halfDiv adjust">
                <a href="#acts" class="smoothScroll"><div class="thirdDiv adjust">Activities</div></a>
                <a href="#projects" class="smoothScroll"><div class="thirdDiv adjust">Projects</div></a>
                <a href="images/resume.pdf" class="smoothScroll"><div class="thirdDiv adjust">Resume</div></a>
            </div>
        </div>

        <a name='top2' class="floaty">
            <br>
        </a>

        <div class='middle' class="floaty">
            <br>
            <br>
            <img id="toMakeFly" src="images/fake.png">
            <br>
            <div id='summary'>
                <br>

                DERP DERP

            </div>
            <br>
        </div>

        <div class='acts' class="floaty">
            <a name="acts" >
                <br>
                <br>
            </a>
            <h1>Things I do</h1>
            <br>
            <br>

            <div id="activitiesdiv">
               <div class="thirdDiv columnDiv">
                  <div><p>Activity 1</div>
                  <div><img src="images/fake.png" class='img'></div>
                  <div><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quas</p></div>
               </div>
               <div class="thirdDiv columnDiv">
                  <div><p>Activity 2</div>
                  <div><img src="images/fake.png" class='img'></div>
                  <div><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quas</p></div>
               </div>
               <div class="thirdDiv columnDiv">
                  <div><p>Activity 3</div>
                  <div><img src="images/fake.png" class='img'></div>
                  <div><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quas</p></div>
               </div>
            </div>
            <br>

        </div>

        <div class='projects' class="floaty">
            <a name="projects"><br><br></a>
            <h1>Projects</h1>
            <br>
            <div id="projectdiv">
               <div class="halfDiv columnDiv">
                  <div><p>Project 1</div>
                  <div><img src="images/fake.png" class='img'></div>
                  <div><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quas</p></div>
               </div>
               <div class="halfDiv columnDiv">
                  <div><p>Project 2</div>
                  <div><img src="images/fake.png" class='img'></div>
                  <div><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quas</p></div>
               </div>
            </div>

            <br>

        </div>

        <div class='middle' class="floaty">
            <div id='form' style="margin-left:20%; margin-right:20%;">
                <br>
                <b>Contact Me</b>
                <br>
                <form method="post" action="email.php" name="myemailform" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="email">Email Address or Other Contact Info:</label>
                        <input type="text" class="form-control" id="email" placeholder="Email" name="email">
                    </div>
                    <div class="form-group">
                        <label for="org">Name or Organization:</label>
                        <input type="text" class="form-control" id="org" placeholder="Name/Organization" name="name">
                    </div>
                    <div class="form-group">
                        <label for="msg">Message:</label>
                        <textarea class="form-control" rows="3" type="text" id="msg" placeholder="Message" name="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" id='form-submit'>Send to my Email</button>
                    </div>
                </form>
            </div>

            <div style="clear:both; width:80%; margin: 0 auto;"  id='calendar'></div>

        </div>



        <div id="footer">
            <br>
            <br>
            Copyright © <?php echo date("Y"); ?> Leelabari Fulbel
        </div>

    </div>

    </html>


<?php ?>
