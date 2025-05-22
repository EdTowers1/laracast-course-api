<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Filters\V1\TicketFilter;
use App\Models\Ticket;
use App\Http\Resources\V1\TicketResource;

class AuthorTicketController extends Controller
{
    public function index($authorId, TicketFilter $filters)
    {
        return TicketResource::collection(
            Ticket::where("user_id", $authorId)->filter($filters)->paginate()
        );
    }
}
