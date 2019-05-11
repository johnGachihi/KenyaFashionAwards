<?php
/**
 * Created by PhpStorm.
 * User: john
 * Date: 05/05/2019
 * Time: 16:27
 */

namespace App\Events;

use Illuminate\Contracts\Broadcasting\ShouldBroadcast;

class TestEvent implements ShouldBroadcast
{

    public $vote;

    public function __construct($vote)
    {
        $this->vote = $vote;
    }

//    public function broadcastAs() {
//        return 'testerer';
//    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|\Illuminate\Broadcasting\Channel[]
     */
    public function broadcastOn()
    {
        return ['test-channel'];
    }
}