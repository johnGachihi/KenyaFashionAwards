<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 04/05/2019
 * Time: 21:16
 */

namespace App\Services;


use App\Contracts\mMailer;
use Illuminate\Support\Facades\Log;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

use PHPMailer\PHPMailer\OAuth;
use League\OAuth2\Client\Provider\Google;

class mPHPMMailer implements mMailer
{

    private $from_email;
    private $oAuth2_clientId;
    private $oAuth2_clientSecret;
    private $oAuth2_refreshToken;

    public function __construct()
    {
        $this->from_email = env('GOOGLE_FROM_EMAIL');
        $this->oAuth2_clientId = env('OAUTH2_CLIENT_ID');
        $this->oAuth2_clientSecret = env('OAUTH2_CLIENT_SECRET');
        $this->oAuth2_refreshToken = env('OAUTH2_REFRESH_TOKEN');
    }

    public function send($toAddress, $subject, $body, $name = '')
    {
        $mail = new PHPMailer(TRUE);

        try {
            $mail->setFrom($this->from_email, 'Kenya Fashion Awards HCI Team');
            $mail->addAddress($toAddress, $name);
            $mail->Subject = $subject;
            $mail->Body = $body;
            $mail->isHTML();
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
                    'clientId' => $this->oAuth2_clientId,
                    'clientSecret' => $this->oAuth2_clientSecret,
                ]
            );

            /* Pass the OAuth provider instance to PHPMailer. */
            $mail->setOAuth(
                new OAuth(
                    [
                        'provider' => $provider,
                        'clientId' => $this->oAuth2_clientId,
                        'clientSecret' => $this->oAuth2_clientSecret,
                        'refreshToken' => $this->oAuth2_refreshToken,
                        'userName' => $this->from_email
                    ]
                )
            );

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