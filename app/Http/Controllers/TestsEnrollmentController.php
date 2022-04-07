<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Notifications\TestEnrollment;
use Illuminate\Support\Facades\Notification;

class TestsEnrollmentController extends Controller
{
    public function sendTestNotification()
    {
        $user = User::first();

        $enrollmentData = [
            'body' => 'Je heb een nieuwe melding ontvangen',
            'enrollmentText' => 'Je kan je nu inschrijven',
            'url' => url('/'),
            'thankyou' => 'Je hebt 14 dagen om je in te schrijven',
        ];

       // $user->notify(new TestEnrollment($enrollmentData));
       Notification::send($user, new TestEnrollment($enrollmentData));
    }
}
