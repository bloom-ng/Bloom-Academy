<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Lead;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class LeadController extends Controller
{
    /**
     * Display a paginated list of captured leads.
     */
    public function index()
    {
        $leads = Lead::latest()->paginate(10);

        return view('admin.leads.index', compact('leads'));
    }

    /**
     * Download all leads as a CSV file.
     */
    public function downloadCsv(): StreamedResponse|RedirectResponse
    {
        $leads = Lead::orderByDesc('created_at')->get();

        if ($leads->isEmpty()) {
            return back()->with('error', 'No leads found.');
        }

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename=leads.csv',
            'Pragma' => 'no-cache',
            'Cache-Control' => 'must-revalidate, post-check=0, pre-check=0',
            'Expires' => '0',
        ];

        $callback = function () use ($leads) {
            $handle = fopen('php://output', 'w');

            // UTF-8 BOM for Excel compatibility
            fprintf($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));

            fputcsv($handle, ['Full Name', 'Email', 'Source', 'Captured At']);

            foreach ($leads as $lead) {
                fputcsv($handle, [
                    $lead->first_name,
                    $lead->email,
                    ucfirst($lead->source ?? ''),
                    optional($lead->created_at)->format('Y-m-d H:i:s'),
                ]);
            }

            fclose($handle);
        };

        return response()->streamDownload($callback, 'leads.csv', $headers);
    }
}
