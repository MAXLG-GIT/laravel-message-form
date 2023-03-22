<?php declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class MessageController extends Controller
{

    public function __invoke(Request $request):RedirectResponse
    {

        $messageModel = new Message;

        $messageModel->name = $request->input('name');
        $messageModel->email = $request->input('email');
        $messageModel->message = $request->input('message');

        if ($messageModel->save()) return redirect('/')->with('success', 'Saved!');
        return redirect('/')->with('danger', 'Error during saving!');

    }
}
