<?php

namespace App\Http\Controllers;

use App\Http\Requests\TicketFormRequest;
use App\Models\Saving;
use App\Models\Ticket;
use Illuminate\Http\Request;

class TicketsController extends Controller
{
    public function index()
    {
        $tickets = Ticket::query()->paginate(10);;
        return view('tickets.index', compact('tickets'));
    }
    public function create()
    {
        return view('tickets.create');
    }
    public function store(TicketFormRequest $request)
    {
        $validated = $request->validate([
            'title'  => 'required|unique:tickets|max:255',
            'content' => 'required',
        ]);

        $slug = uniqid();
        $ticket = new Ticket(array(
            'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => $slug
        ));
        $ticket->save();
        return redirect()->route('tickets.create')->with('status','successfully submitted its id is:'.$slug);

    }

}
