<?php

namespace App\Services;

use \MailchimpMarketing\ApiClient;

class Newsletter
{
    public function subscribe(string $email)
    {
        $mailchimp = new ApiClient();

        $mailchimp->setConfig([
            'apiKey' => config('services.mailchimp.key'),
            'server' => 'us21'
        ]);

        return $mailchimp->lists->addListMember("0bc7612bbd", [
            "email_address" => $email,
            "status" => "subscribed",
        ]);
    }
}
