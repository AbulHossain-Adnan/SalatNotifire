Laravel Salat Time Notifier
Overview

The Laravel Salat Time Notifier package provides a solution for managing Salat (prayer) times and sending notifications to a Slack channel 10 minutes before each Salat time. This package includes an interface to manage Salat times, integrates with a Slack channel for notifications, and can be easily integrated into a fresh Laravel project.
Features

    Manage Salat times (Fajr, Dhuhr, Asr, Maghrib, Isha) through a user-friendly interface.
    Send notifications to a Slack channel 10 minutes before each Salat time.
    Seamless integration into a Laravel project using Composer.

Installation

    Set Up the Package:

    Clone the repository and place it in the packages directory of your Laravel project.

    bash

git clone <repository-url> packages/welabs/SalatNotifier

Integrate the Package Using Symlink:

In your Laravel project root, create a symlink to the package directory.

bash

composer require <vendor/package>

Publish the Configuration:

After installation, publish the package configuration.

bash

php artisan vendor:publish --provider="Welabs\SalatNotifier\SalatNotifierServiceProvider"

Run Migrations:

Run the migrations to set up the necessary database tables.

bash

php artisan migrate

Run the Seeder:

Manually run the seeder to populate initial data.

bash

php artisan db:seed --class=Welabs\\SalatNotifier\\Seeders\\SalatTimeSeeder

Schedule Notifications:

Ensure your Laravel scheduler is running and add the following to your app/Console/Kernel.php file if it hasn't been automatically added.

php

    protected function schedule(Schedule $schedule)
    {
        $schedule->command('salat:notify')->everyMinute()->timezone('Asia/Dhaka');
    }

Usage

    Access the Salat Times Interface:

    Navigate to the Salat times management interface using the route salat-times.index in your Laravel application.

    Configure Slack Notifications:

    Set up Slack notifications by configuring the Slack channel and webhook in your .env file.

    env

SLACK_WEBHOOK_URL=https://hooks.slack.com/services/your/webhook/url
