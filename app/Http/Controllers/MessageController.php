<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\Reply;
use App\Mail\SupportRequestMessage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function message(){

        $messages = Message::with('replies')->get();
        return view ('user.message', compact('messages'));
    }

    public function dashboard(){

        return view ('user.message');
    }

    public function index()
    {
        $messages = Message::with('replies')->get();
        return view('user.index', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:messages,email',
            'phone'       => 'required|string|unique:messages,phone',
            'project'     => 'required|string|max:255',
            'subject'     => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create the message
        $message = Message::create($request->all());

        // Send the support request email
        try {
            Mail::to(config('mail.from.address'))->send(new SupportRequestMessage($message));
        } catch (\Exception $e) {
            \Log::error('Mail sending failed: ' . $e->getMessage());
            return redirect()->route('contact.index')->with('error', 'Failed to send email.');
        }

        return redirect()->route('user.message')->with('success', 'Message submitted successfully!');
    }

    public function replyStore(Request $request, $messageId)
    {
        $request->validate([
            'message_text' => 'required|string',
        ]);

        Reply::create([
            'messages_id'   => $messageId,
            'sender_id'     => auth()->id(),
            'receivers_id'  => null,  // Adjust as needed
            'message_text'  => $request->message_text,
        ]);

        return redirect()->route('user.message')->with('success', 'Reply added successfully!');
    }

    public function userStore(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|unique:messages,email',
            'phone'       => 'required|string|unique:messages,phone',
            'project'     => 'required|string|max:255',
            'subject'     => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Create the message
        $message = Message::create($request->all());

            // Send the support request email
    try {
        Mail::to(config('mail.from.address'))->send(new SupportRequestMessage($message));
    } catch (\Exception $e) {
        \Log::error('Mail sending failed: ' . $e->getMessage());
        return redirect()->route('contact.index')->with('error', 'Failed to send email.');
    }

        return redirect()->route('contact.index')->with('success', 'Message submitted successfully!');
    }

    public function testMail()
{
    Mail::raw('This is a test email', function ($message) {
        $message->to('refined-automation@outlook.com')
                ->subject('Test Email from Laravel');
    });

    return 'Test email sent!';
}

}
