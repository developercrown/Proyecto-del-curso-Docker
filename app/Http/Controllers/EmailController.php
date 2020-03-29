<?php

namespace App\Http\Controllers;
use App\Models\Email;
use Illuminate\Support\Facades\Mail;


use Illuminate\Http\Request;

class EmailController extends Controller
{
    public function sendEmail(Request $request) {
        $email = Email::updateOrCreate($request->all());
        Mail::raw(sprintf('bienvenido! %s, tu subscripcion se ha completado', $email->email), function ($message) use ($email){
            $message->from('us@example.com', 'Laravel');
            $message->to($email->email);

        });
        return sprintf('Se ha recibido el correo %s, Gracias por registrarte! <a href="/">Inicio</a>', $email->email);
    }
}
