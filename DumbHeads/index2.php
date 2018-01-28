<html>
    <head>
        <link href="main.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script type="text/javascript" src="main.js"></script>
    </head>
    <body>
        
        <?php
            $hostname = '{imap.gmail.com:993/imap/ssl}INBOX';
            $username = 'dumbheads11@gmail.com';
            $password = 'rohanshah_1997';
            /* try to connect */
            $inbox = imap_open($hostname,$username,$password) or die('Cannot connect to Gmail: ' . imap_last_error());
            /* grab emails */
            $emails = imap_search($inbox,'ALL');
            /* if emails are returned, cycle through each... */
            if($emails) {
                /* begin output var */
                $output = '';
                /* put the newest emails on top */
                rsort($emails);
                /* for every email... */
                foreach($emails as $email_number) {
                    /* get information specific to this email */
                    $overview = imap_fetch_overview($inbox,$email_number,0);
                    $message = imap_fetchbody($inbox,$email_number,2);
                    /* output the email header information */
                    $output.='<div class=\'contain-fluid\'>';
                    $output.= '<div class="toggler inbox">';
                    $output.= '<span class="from btn btn-danger">From: '.$overview[0]->from.'</span></br>';
                    $output.= '</br><span class="subject btn btn-primary " style="">Subject: '.$overview[0]->subject.'</br></span></br> ';
                   
                    $output.= '</br><span class="date btn btn-success">Date: '.$overview[0]->date.'</span></br>';
                    $output.= '</br><div class="message"><div class="body">Message: '.$message.'</div></div>';
                    $output.= '</div></hr';
                    $output.= '</div>';
                    /* output the email body */
                   
                }
                echo $output;
            } 
            /* close the connection */
            imap_close($inbox);
        ?>
       
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core-compat.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/mootools/1.6.0/mootools-core.min.js"></script>
        </body>
</html>