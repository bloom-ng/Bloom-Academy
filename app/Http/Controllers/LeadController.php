<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Illuminate\Http\Request;

class LeadController extends Controller
{
    /**
     * Handle finance form submission
     */
    public function downloadFinance(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Save lead to database
        Lead::create([
            'first_name' => $validated['first_name'],
            'email' => $validated['email'],
            'source' => 'finance',
        ]);

        // Download the PDF
        $pdfPath = public_path('images/B.A_finance KPIs.pdf');
        
        if (!file_exists($pdfPath)) {
            return back()->withErrors(['error' => 'PDF file not found.']);
        }

        return response()->download($pdfPath, 'B.A_finance_KPIs.pdf');
    }

    /**
     * Handle marketing form submission
     */
    public function downloadMarketing(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
        ]);

        // Save lead to database
        Lead::create([
            'first_name' => $validated['first_name'],
            'email' => $validated['email'],
            'source' => 'marketing',
        ]);

        // Download the PDF
        $pdfPath = public_path('images/B.A_(Marketing metrics)_1.pdf');
        
        if (!file_exists($pdfPath)) {
            return back()->withErrors(['error' => 'PDF file not found.']);
        }

        return response()->download($pdfPath, 'B.A_Marketing_Metrics.pdf');
    }
}
