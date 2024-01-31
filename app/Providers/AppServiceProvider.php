<?php

namespace App\Providers;

use App\Services\Newsletter;
use App\Services\MailchimpNewsletter;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use MailchimpMarketing\ApiClient;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        app()->bind(Newsletter::class, function () {
            $client = new ApiClient();

            $client->setConfig([
                'apiKey' => config('services.mailchimp.key'),
                'server' => 'us21'
            ]);

            return new MailchimpNewsletter($client);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();

        Gate::define('admin', function (User $user) {
            return $user->is_admin === 1;
        });
    }
}
