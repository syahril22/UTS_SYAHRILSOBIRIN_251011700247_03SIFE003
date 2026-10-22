<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DestinationController extends Controller
{
    public function index(Request $request): View
    {
        $search = $request->query('search');

        $destinations = Destination::query()
            ->when($search, function ($query, $search) {
                $query->where(function ($q) use ($search) {
                    $q->where('name', 'like', "%{$search}%")
                      ->orWhere('region', 'like', "%{$search}%");
                });
            })
            ->orderBy('name')
            ->paginate(6)
            ->withQueryString();

        return view('destinations.index', compact(
            'destinations',
            'search'
        ));
    }

    public function show(Destination $destination): View
    {
        return view('destinations.show', compact('destination'));
    }
}
