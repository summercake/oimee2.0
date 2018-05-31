<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Tbl_post;

class Tbl_postPolicy extends Policy
{
    public function update(User $user, Tbl_post $tbl_post)
    {
        // return $tbl_post->user_id == $user->id;
        return true;
    }

    public function destroy(User $user, Tbl_post $tbl_post)
    {
        return true;
    }
}
