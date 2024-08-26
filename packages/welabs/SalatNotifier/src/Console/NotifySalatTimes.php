<?php 

namespace welabs\SalatNotifier\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Notification;
use welabs\SalatNotifier\Notifications\SalatTimeNotification;
use welabs\SalatNotifier\SalatTimeManager;


class NotifySalatTimes extends Command
{
    protected $signature = 'salat:notify';
    protected $description = 'Send Slack notifications for Salat times';

    public function handle(SalatTimeManager $manager)
    {
        $salatTimes = $manager->getAllSalatTimes();

        foreach ($salatTimes as $salat) {
            $notificationTime = now()->parse($salat->time)->subMinutes(10);
            
            if (now()->between($notificationTime, now()->parse($salat->time))) {
                Notification::route('slack', config('salatnotifier.slack_webhook'))
                    ->notify(new SalatTimeNotification($salat));
            }
        }
    }
}
