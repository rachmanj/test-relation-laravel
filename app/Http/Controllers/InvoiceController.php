<?php

namespace App\Http\Controllers;

use App\Models\Invoice;
use App\Models\Project;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    public function index()
    {
        $invoices = Invoice::all();

        return $invoices;
    }

    public function create()
    {
        $projects = Project::all();

        return view('invoices.create', compact('projects'));
    }

    public function store(Request $request)
    {
        $invoice = new Invoice();

        $invoice->nomor_invoice = $request->nomor_invoice;
        $invoice->tanggal_invoice = $request->tanggal_invoice;
        $invoice->projects_id = $request->projects_id;
        $invoice->nominal = $request->nominal;

        $invoice->save();
    }
}
