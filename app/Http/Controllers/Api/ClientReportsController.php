<?php

namespace App\Http\Controllers\Api;

use App\Models\Client;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\ReportResource;
use App\Http\Resources\ReportCollection;

class ClientReportsController extends Controller
{
    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, Client $client)
    {
        $this->authorize('view', $client);

        $search = $request->get('search', '');

        $reports = $client
            ->reports()
            ->search($search)
            ->latest()
            ->paginate();

        return new ReportCollection($reports);
    }

    /**
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Client $client
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Client $client)
    {
        $this->authorize('create', Report::class);

        $validated = $request->validate([
            'hotdishmeat' => ['required', 'max:255', 'string'],
            'hotdishveg' => ['required', 'max:255', 'string'],
            'chili' => ['required', 'max:255', 'string'],
            'rye' => ['required', 'max:255', 'string'],
            'extrarye' => ['required', 'max:255', 'string'],
            'focaccia' => ['required', 'max:255', 'string'],
            'extrafocaccia' => ['required', 'max:255', 'string'],
        ]);

        $report = $client->reports()->create($validated);

        return new ReportResource($report);
    }
}
