<?php

namespace Jetwes\TelposAppraisalInterview;

use Illuminate\Support\ServiceProvider;
use Jetwes\TelposAppraisalInterview\Commands\TelposAppraisalInterviewCommand;

class TelposAppraisalInterviewServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__ . '/../config/telpos-appraisal-interview.php' => config_path('telpos-appraisal-interview.php'),
            ], 'config');

            $this->publishes([
                __DIR__ . '/../resources/views' => base_path('resources/views/vendor/telpos-appraisal-interview'),
            ], 'views');

            $migrationFileName = 'create_telpos_appraisal_interview_table.php';
            if (! $this->migrationFileExists($migrationFileName)) {
                $this->publishes([
                    __DIR__ . "/../database/migrations/{$migrationFileName}.stub" => database_path('migrations/' . date('Y_m_d_His', time()) . '_' . $migrationFileName),
                ], 'migrations');
            }

            $this->commands([
                TelposAppraisalInterviewCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'telpos-appraisal-interview');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__ . '/../config/telpos-appraisal-interview.php', 'telpos-appraisal-interview');
    }

    public static function migrationFileExists(string $migrationFileName): bool
    {
        $len = strlen($migrationFileName);
        foreach (glob(database_path("migrations/*.php")) as $filename) {
            if ((substr($filename, -$len) === $migrationFileName)) {
                return true;
            }
        }

        return false;
    }
}
