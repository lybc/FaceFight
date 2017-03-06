<?php

namespace App\Mail;

use App\Model\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ActiveUser extends Mailable
{
    use Queueable, SerializesModels;

    private $_user;

    /**
     * ActiveUser constructor.
     *
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->_user = $user;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('email.activeUser')
            ->subject(config('app.name'))
            ->with('user', $this->_user)
            ->with('url', $this->createActiveUrl());
    }

    private function createActiveUrl()
    {
        return sprintf('%s?email=%s', url('/activeUser'), encrypt($this->_user->email));
    }
}
