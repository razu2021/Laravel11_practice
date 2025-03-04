<?php

namespace App\Policies;

use App\Models\User;
use App\Models\PostComponent;

class PostComponentPolicy
{

    /**
     * Create a new policy instance.
     */

    /**------- create post policy ------ */
    public function editRole(User $user , PostComponent $post ){

        return  $user->id === $post->creator;
   
       
     }
 

















}
