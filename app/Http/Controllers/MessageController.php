<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $message = Message::all();
        return $message;
    }

    /**
     * Show the form for creating a new resource.
     */

    public function store(Request $request)
    {
        $message = Message::create([
            'text' => $request->text??null,
            'reply_id' => $request->reply_id??null,
        ]);

        return $message;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Message $message)
    {
        $message->update([
            'text' => $request->text??null,
            'reply_id' => $request->reply_id??null,
        ]);

        return true;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Message $message)
    {
        $message->delete();
        return 'delete the message';
    }
}
