<?php

namespace App\Http\Controllers;

use App\Services\MailchimpNewsletter;

class NewsletterController extends Controller
{
    public function __invoke(MailchimpNewsletter $newsletter)
    {
        request()->validate(['email' => 'required|email']);

        try {
            $newsletter->subscribe(request('email'));
        } catch (\Exception $e) {
            return redirect('/#newsletter')
                ->with('error', 'This email could not be added to our newsletter list.');
        }

        return redirect('/')
            ->with('success', 'You are now signed up for our newsletter!');
    }
}
