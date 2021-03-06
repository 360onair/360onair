<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;

class FormController extends Controller
{
    // FORM CONTACT

    public function contact(Request $request)
    {
        $this->validate($request, [
            'naam'       => 'required|max:255',
            'email'      => 'required',
            'telefoon'   => 'max:18',
            'bericht'    => 'required'
        ]);

        $mail = Mail::send('emails.contact', compact('request'), function ($msg) use ($request) {
            $msg->from(config('mail.from.address'), config('mail.from.name'));
            $msg->to($request->email, $request->naam);
            $msg->bcc(config('mail.bcc'), config('mail.bcc'));
            $msg->subject('Jouw bericht via 360onair');
        });

        if ($mail) {
            return response()->json(['result' => true, 'response' => 'Je bericht is verstuurd. Wij nemen zo snel mogelijk contact op.']);
        } else {
            return response()->json(['result' => false, 'response' => 'Helaas is deze functie momenteel niet beschikbaar.']);
        }
    }
}
