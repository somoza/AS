<?php

class ticketCheckemailsTask extends sfBaseTask
{

    protected function configure()
    {
        // // add your own arguments here
        // $this->addArguments(array(
        //   new sfCommandArgument('my_arg', sfCommandArgument::REQUIRED, 'My argument'),
        // ));

        $this->addOptions(array(
            new sfCommandOption('application', null, sfCommandOption::PARAMETER_REQUIRED, 'The application name', 'frontend'),
            new sfCommandOption('env', null, sfCommandOption::PARAMETER_REQUIRED, 'The environment', 'dev'),
            new sfCommandOption('connection', null, sfCommandOption::PARAMETER_REQUIRED, 'The connection name', 'master'),
                // add your own options here
        ));

        $this->namespace = 'ticket';
        $this->name = 'check-emails';
        $this->briefDescription = '';
        $this->detailedDescription = <<<EOF
The [ticket:check-emails|INFO] task does things.
Call it with:

  [php symfony ticket:check-emails|INFO]
EOF;
    }

    protected function execute($arguments = array(), $options = array())
    {
        // initialize the database connection
        $databaseManager = new sfDatabaseManager($this->configuration);
        $connection = $databaseManager->getDatabase($options['connection'])->getConnection();

        /* connect to gmail */
        $hostname = sfConfig::get("app_imap_hoststring");
        $username = sfConfig::get("app_imap_username");
        $password = sfConfig::get("app_imap_password");

        var_dump($hostname);
        var_dump($username);var_dump($password);


        /* try to connect */
        $inbox = imap_open($hostname, $username, $password) or die('Cannot connect: ' . imap_last_error());

        /* grab emails */
        $emails = imap_search($inbox, 'UNSEEN');

        /* if emails are returned, cycle through each... */
        if ($emails)
        {

            /* begin output var */
            $output = '';

            /* put the newest emails on top */
            rsort($emails);

            /* for every email... */
            foreach ($emails as $email_number)
            {
                /* get information specific to this email */
                $overview = imap_fetch_overview($inbox, $email_number, 0);
                $message = imap_fetchbody($inbox, $email_number, 2);

                /* output the email header information */
                $output.= '<span class="subject">' . $overview[0]->subject . '</span> ';
                $output.= '<span class="from">' . $overview[0]->from . '</span>';
                $output.= '<span class="date">on ' . $overview[0]->date . '</span>';
                $output.= '</div>';
            }

            echo $output;
        }

        /* close the connection */
        imap_close($inbox);
    }
}
