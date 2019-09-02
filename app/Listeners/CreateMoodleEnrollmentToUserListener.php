<?php

namespace KGrecu\Listeners;

use KGrecu\Events\MoodleEnrollment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use GuzzleHttp\Client;

class CreateMoodleEnrollmentToUserListener
{
     /**
     * Handle the event.
     *
     * @param  MoodleEnrollment  $event
     * @return void
     */
    public function handle(MoodleEnrollment $event)
    {
        $order = $event->getOrder();
        $user = $order->user;
        $course = $order->course;

        $client = new Client();
        $response = $client->request('POST', env('MOODLE_URL') . "/_services/response.php", [
            'form_params' => [
                'action' => 'create_enrollment',
                'moodle_course_id' => $course->moodle_id,
                'moodle_user_id' => $user->user_moodle_id
            ]
        ]);
    }
}
