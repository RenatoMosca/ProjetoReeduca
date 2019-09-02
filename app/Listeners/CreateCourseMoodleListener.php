<?php

namespace KGrecu\Listeners;

use KGrecu\Events\MoodleCreate;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class CreateCourseMoodleListener
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
     * @param  MoodleCreate  $event
     * @return void
     */
    public function handle(MoodleCreate $event)
    {
        $course = $event->getCourse();
        $url = env('MOODLE_URL');
        $client = new Client();
        try {
            $response = $client->request('POST', $url."/_services/response.php", [
                'form_params' => [
                    'name' => $course->name,
                    'objective' => $course->description,
                    'action' => 'insert_course'
                ]
            ]);
        } catch (RequestException $e) {
            $course->status = 0;
            $course->save();
            return false;
        }
        $idMoodle = $response->getBody()->getContents();
        $course->moodle_id = $idMoodle;
        $course->save();
    }
}
