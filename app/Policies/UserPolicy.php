<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    /**
     * este método se ejecutará antes que cualquier otro y si 
     * devuelve verdadero ninguno de los otros métodos se ejecutará
     */
    public function before($user, $ability) 
    {
        if ( $user->isAdmin() ) 
        {
            return true;
        }
    } 

    /*puedo ir al form de editar solo si es mi usuario 
    a menos que sea admin como en la condicion de before*/
    public function edit(User $authUser, User $user)
    {
        return $authUser->id === $user->id;
    }
    /*puedo guardar la edicion solo si es mi usuario 
    a menos que sea admin como en la condicion de before*/
    public function update(User $authUser, User $user) 
    {
        return $authUser->id === $user->id;
    } 
    /*puedo eliminar solo si es mi usuario 
    a menos que sea admin como en la condicion de before*/
    public function destroy(User $authUser, User $user) 
    {
        return $authUser->id === $user->id;
    } 
}
