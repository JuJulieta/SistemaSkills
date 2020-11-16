<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Http\Requests\UpdateUserRequest;
use Illuminate\Http\Request;
use App\User;
use Auth;
use Flash;
use Response;

class ProfileController extends Controller
{

    /** @var  UserRepository */
    private $userRepository;

    public function __construct(UserRepository $userRepo)
    {
        $this->userRepository = $userRepo;
    }

    public function getAuthUser ()
    {
        return Auth::user();
    }

    public function index(){
        $user = $this->getAuthUser ();
        return view('profile.profile')->with('user', $user);
    }

    public function update ($id, UpdateUserRequest $request)
    {
        
        $user = $this->userRepository->find($id);

        if (empty($user)) {
            Flash::error('User not found');

            return redirect(route('profile.profile'));
        }

        $user = $this->userRepository->update($request->all(), $id);

        Flash::success('Profile updated successfully.');

        $user = $this->getAuthUser ();

        return redirect(route('profile.index'));
    }    
}
