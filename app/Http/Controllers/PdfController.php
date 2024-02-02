<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class PdfController extends Controller
{
    public function generatePDF()
    {
        // Example data for an invoice
        // $invoiceData = [
        //     'invoice_number' => 'INV-001',
        //     'date' => now()->format('Y-m-d'),
        //     'customer_name' => 'John Doe',
        //     'amount' => 100.00,
        // ];

        // // Pass the invoice data to the view
        // $data = [
        //     'title' => 'Invoice',
        //     'invoiceData' => $invoiceData,
        // ];

        // $pdf = PDF::loadView('invoice', $data);
        
        $pdf = PDF::loadView('invoice');


        return $pdf->download('invoice .pdf');
    }
}