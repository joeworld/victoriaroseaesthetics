<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\WelcomeEmail;

class MailController extends Controller
{
    public function store(Request $request)
    {
        $clientEmail = $request->all();
        $clientEmail = $clientEmail['email-2'];

        $clientName = $request->all();
        $clientName = $clientName['name'];

        $clientPhone = $request->all();
        $clientPhone = $clientPhone['Phone'];

        $clientMessage = $request->all();
        $clientMessage = $clientMessage['Message'];

        $details = [
            'name' => $clientName,
            'email' => $clientEmail,

            'phone' => $clientPhone,
            'message' => $clientMessage,

            'subject' => 'New submission!',
            'type' => 'admin'];

        //Goes to admin
        Mail::to('marco@overthink.studio')->send(new WelcomeEmail($details));


        return redirect()->to('/contact')
            ->with('message', 'Thanks for your message. We\'ll be in touch.');
    }

}

