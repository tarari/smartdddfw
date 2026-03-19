<?php

namespace Domain\User;

use Domain\User\User;
use Domain\User\UserId;

interface UserRepository{
    public function save(User $user):void;
    public function byId(UserId $id):?User;
    
}