<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Contact\StoreContactRequest;
use App\Services\UserService;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    protected UserService $userService;

    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function index()
    {
        return view('front.contact');
    }

    public function sendMessage(StoreContactRequest $request)
    {
        $request->validated();

        $adminEmail = $this->userService->getAdminUser()->email;

        $subject = "Website Contact Form";
        $message = "Visitor Information: <br><br>";
        $message .= "Name: <br>".$request->name."<br><br>";
        $message .= "Email: <br>".$request->email."<br><br>";
        $message .= "Message: <br>".$request->message."<br><br>";

        if($adminEmail) {
            Mail::html($message, function ($mail) use ($adminEmail, $subject) {
                $mail->to($adminEmail)->subject($subject);
            });
        }

        return redirect()->back()->with('success', 'Message sent successfully');
    }
}
