<?php

namespace App\Listeners;

use App\Events\ApplicationRespondedToEvent;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
//require 'C:\xampp\composer\vendor\autoload.php';

class SendApplicationResponseEmail
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ApplicationRespondedToEvent  $event
     * @return void
     */
    public function handle(ApplicationRespondedToEvent $event)
    {
        $mail = new PHPMailer(TRUE);

        try {

            $mail->setFrom('darth@empire.com', 'Darth Vader');
            $mail->addAddress('johngachihi3@gmail.com', 'john gachihi');
            $mail->Subject = 'Force';
            $mail->Body = 'There is a great disturbance in the Force.';

            /* SMTP parameters. */

            /* Tells PHPMailer to use SMTP. */
            $mail->isSMTP();

            /* SMTP server address. */
            $mail->Host = 'smtp.gmail.com';

            /* Use SMTP authentication. */
            $mail->SMTPAuth = TRUE;

            /* Set the encryption system. */
            $mail->SMTPSecure = 'tls';

            //* Username (email address). */
            $mail->Username = 'johngachihi3@gmail.com';

            /* Google account password. */
            $mail->Password = 'kbt134pp';

            /* Set the SMTP port. */
            $mail->Port = 587;

            /* Finally send the mail. */
            $mail->send();
        }
        catch (Exception $e)
        {
            echo $e->errorMessage();
            Log::error($e->errorMessage());
        }
        catch (\Exception $e)
        {
            echo $e->getMessage();
            Log::error($e->errorMessage());
        }
    }
}
