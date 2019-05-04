<?php

namespace App\Listeners;

use App\Events\ApplicationRespondedToEvent;
use App\Contracts\mMailer;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Log;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

class SendApplicationResponseEmail
{

    private $mailer;

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct(mMailer $mailer)
    {
        $this->mailer = $mailer;
    }

    /**
     * Handle the event.
     *
     * @param  ApplicationRespondedToEvent  $event
     * @return void
     */
    public function handle(ApplicationRespondedToEvent $event)
    {
        $application = $event->application;

        if($application->decision != null && !empty($application->decision)) {
            $decision = $application->decision;

            if($decision === 'approved') {
                /*$this->sendApplicationResponseEmail(
                    $application->applicant->email,
                    $application->applicant->name,
                    'Acceptance of Kenya Fashion Awards competition application.',
                    "We are happy to inform you that your application has been acceptance."
                );*/
                $this->mailer->send(
                    $application->applicant->email,
                    'Approval of Kenya Fashion Awards competition application.',
                    $event->request->input('emailBody'),
                    $application->applicant->name
                );
            } else if($decision === 'rejected') {
                /*$this->sendApplicationResponseEmail(
                    $application->applicant->email,
                    $application->applicant->name,
                    'Rejection of Kenya Fashion Awards competition application.',
                    "We are sorry to inform you that your application has been rejected."
                );*/
                $this->mailer->send(
                    $application->applicant->email,
                    'Rejection of Kenya Fashion Awards competition application.',
                    $event->request->input('emailBody'),
                    $application->applicant->name
                );
            }
        }
    }

    private function sendApplicationResponseEmail($toAddress, $subject, $body, $name='') {
        $google_email = 'gachihiwaithaka@gmail.com';
        $oauth2_clientId = '32466991061-hk0ugij46p859643mrgh1rvd1u9muvqe.apps.googleusercontent.com';
        $oauth2_clientSecret = 'yEXspgeffBlJ8cGQK1aFjwxS';
        $oauth2_refreshToken = '1/KoMJD0JvCGeSKAOH_eLX1OgjQHELqGELU4RV8q31vnI';

        $mail = new PHPMailer(TRUE);

        try {
            $mail->setFrom($google_email, 'Kenya Fashion Awards HCI Team');
            $mail->addAddress($toAddress, $name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->isSMTP();
            $mail->Port = 587;
            $mail->SMTPAuth = TRUE;
            $mail->SMTPSecure = 'tls';

            /* Google's SMTP */
            $mail->Host = 'smtp.gmail.com';

            /* Set AuthType to XOAUTH2. */
            $mail->AuthType = 'XOAUTH2';

            /* Create a new OAuth2 provider instance. */
            $provider = new Google(
                [
                    'clientId' => $oauth2_clientId,
                    'clientSecret' => $oauth2_clientSecret,
                ]
            );

            /* Pass the OAuth provider instance to PHPMailer. */
            $mail->setOAuth(
                new OAuth(
                    [
                        'provider' => $provider,
                        'clientId' => $oauth2_clientId,
                        'clientSecret' => $oauth2_clientSecret,
                        'refreshToken' => $oauth2_refreshToken,
                        'userName' => $google_email,
                    ]
                )
            );

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
