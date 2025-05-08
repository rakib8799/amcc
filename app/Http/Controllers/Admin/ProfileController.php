<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProfileUpdateRequest;
use App\Services\Core\HelperService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class ProfileController extends Controller
{   
    /**
     * Display the user's profile form.
     */
    public function edit(Request $request): View
    {
        return view('admin.profile.edit', [
            'user' => $request->user(),
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(ProfileUpdateRequest $request): RedirectResponse
    {
        $request->user()->fill($request->validated());

        if ($request->user()->isDirty('email')) {
            $request->user()->email_verified_at = null;
        }

        $photo = request()->file('photo');
        if($photo) {
            $request->user()->photo = HelperService::uploadPhoto($photo, 'admin');
        }

        $user = $request->user()->save();
        $status = $user ? 'success' : 'error';
        $message = $user ? 'Your profile is updated successfully' : 'Your profile could not be updated';
        return Redirect::route('admin.profile.edit')->with($status, $message);
    }
}
