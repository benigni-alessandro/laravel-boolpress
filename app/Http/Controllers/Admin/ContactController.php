<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
  public function index(Request $request)
  {
    $data = $request->all();
    Mail::to('cliente@mail.com')->send(new ContactMail($data['email_dest'], $data['object'], $data['content_message']));
    return redirect()->route('admin.posts.index');
  }
}
