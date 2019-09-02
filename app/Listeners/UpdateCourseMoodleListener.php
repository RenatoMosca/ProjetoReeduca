<?php

namespace KGrecu\Listeners;

use KGrecu\Events\MoodleUpdate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class UpdateCourseMoodleListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  MoodleUpdate  $event
     * @return void
     */
    public function handle(MoodleUpdate $event)
    {
        $course = $event->getCourse();
        $url = env('MOODLE_URL');
        $client = new Client();
        try {
            $response = $client->request('POST', $url . "/_services/response.php", [
                'form_params' => [
                    'moodle_id' => $course->moodle_id,
                    'name' => $course->name,
                    'objective' => $course->description,
                    'action' => 'update_course'
                ]
            ]);
        } catch (RequestException $e) {
            return false;
        }
    }
}
