<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 04/05/2019
 * Time: 21:15
 */

namespace App\Contracts;


interface mMailer
{

    /**
     * @param string $toAddress Address email will be sent to
     * @param string $subject Subject of the email
     * @param string $body The body of the email
     * @param string $name Name of the recipient
     */
    public function send($toAddress, $subject, $body, $name='');

}