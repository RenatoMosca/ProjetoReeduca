<?php

namespace KGrecu\Listeners;

use KGrecu\Events\MoodleEnrollment;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use GuzzleHttp\Client;

class CreateUserMoodleIfNotExistsListener
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
     * @param  MoodleEnrollment  $event
     * @return void
     */
    public function handle(MoodleEnrollment $event)
    {
        $user = $event->getOrder()->user;
        if(!$user->user_moodle_id){
            $client = new Client();
            $response = $client->request('POST', env('MOODLE_URL')."/_services/response.php", [
                'form_params' => [
                    'action' => 'create_user',
                    'username' => $user->email,
                    'first_name' => $user->first_name,
                    'last_name' => $user->last_name,
                    'email' => $user->email,
                    'password' => $user->moodle_password,
                    'city' => $user->address->city
                ]
            ]);
            $user->user_moodle_id = $response->getBody()->getContents();
            $user->save();
        }
    }
}
