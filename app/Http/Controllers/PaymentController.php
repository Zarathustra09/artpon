<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Xendit\Configuration;
use Xendit\Invoice\CreateInvoiceRequest;
use Xendit\Invoice\InvoiceApi;
use Xendit\Invoice\InvoiceItem;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::where('user_id', auth()->id())->get();
        return view('guest.payment_history', compact('payments'));
    }

    public function store(Request $request)
    {
        Log::info($request->all());
        $request->validate([
            'total' => 'required|numeric',
            'service' => 'required|string',
            'description' => 'required|string',
        ]);

        Configuration::setXenditKey(env('XENDIT_API_KEY'));
        $apiInstance = new InvoiceApi();

        $external_id = 'invoice-' . Str::random(5);
        $total = $request->input('total');
        $success_redirect_url = route('payment.success', ['external_id' => $external_id]);
        $failure_redirect_url = route('payment.failed');

        $create_invoice_request = new CreateInvoiceRequest([
            'external_id' => $external_id,
            'description' => $request->input('description'),
            'amount' => $total,
            'invoice_duration' => 172800,
            'currency' => 'PHP',
            'reminder_time' => 1,
            'success_redirect_url' => $success_redirect_url,
            'failure_redirect_url' => $failure_redirect_url
        ]);

        Log::info('Creating invoice with details:', [
            'external_id' => $external_id,
            'description' => $request->input('description'),
            'amount' => $total,
            'success_redirect_url' => $success_redirect_url,
            'failure_redirect_url' => $failure_redirect_url
        ]);

        DB::beginTransaction();

        try {
            $result = $apiInstance->createInvoice($create_invoice_request);

            Log::info('Invoice created successfully:', [
                'invoice_url' => $result['invoice_url'],
                'invoice_id' => $result['id']
            ]);

            $payment = new Payment();
            $payment->user_id = auth()->id();
            $payment->booking_id = session('booking_id'); // Retrieve booking_id from session
            $payment->external_id = $external_id;
            $payment->checkout_link = $result['invoice_url'];
            $payment->total = $total;
            $payment->status = 'pending';
            $payment->save();

            Log::info('Payment saved successfully:', [
                'user_id' => auth()->id(),
                'external_id' => $external_id,
                'checkout_link' => $result['invoice_url'],
                'status' => 'pending'
            ]);

            DB::commit();

            return redirect($result['invoice_url']);

        } catch (\Xendit\XenditSdkException $e) {
            DB::rollBack();

            Log::error('Exception when calling InvoiceApi->createInvoice:', [
                'message' => $e->getMessage(),
                'full_error' => $e->getFullError()
            ]);

            return response()->json(['message' => 'Exception when calling InvoiceApi->createInvoice: ' . $e->getMessage(), 'full_error' => $e->getFullError()], 500);
        }
    }
    public function success(Request $request)
    {
        $request->validate([
            'external_id' => 'required|string',
        ]);

        $external_id = $request->input('external_id');
        $payment = Payment::where('external_id', $external_id)->first();
        $booking = Booking::find($payment->booking_id);

        if ($payment) {
            $payment->status = 'paid';
            $payment->save();
        }

        if ($booking) {
            $booking->status = 'paid';
            $booking->save();
        }

        return redirect()->route('artpons.payment_history')->with('success', 'Payment successful.');
    }

    public function failed()
    {
        return redirect()->route('guest.booking')->with('error', 'Payment unsuccessful.');
    }
}
