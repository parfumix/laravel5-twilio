<?php namespace Parfumix\Laravel5Twilio;

use Illuminate\Support\ServiceProvider;

class Laravel5TwilioServiceProvider extends ServiceProvider {

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot() {

        /** Publish configuration file . */
        $this->publishes([
            __DIR__.'/../config/connections.php', 'twilio'
        ], 'config');
    }



    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register() {
        $this->app['twilio'] = $this->app->share(function($app) {
            return new Twilio;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides() {
        return [];
    }

}
