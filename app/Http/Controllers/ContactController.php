<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Notifications\MailContact;
use App\Notifications\MailReserva;
use App\User;
class ContactController extends Controller
{
    public function contact(Request $request)
    {
    	$users = User::first();

    	\Notification::send($users, new MailContact($request->input('name'),$request->input('email'),$request->input('phone'),$request->input('message')));

        return back();
    }

    public function reserva(Request $request)
    {

    	$users = User::first();

    	\Notification::send($users, new MailReserva(
    		$request->input('booking-name'),
    		$request->input('booking-email'),
    		$request->input('booking-phone'),
    		$request->input('booking-date'),
    		$request->input('booking-comments'),
    		$request->input('booking-adults'),
    		$request->input('booking-country')
    	));

        return back();
    }
}
