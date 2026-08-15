<?php

namespace App\Http\Controllers;

use App\Models\ContactMessage;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ContactController extends Controller
{
    /**
     * Handle incoming web contact submissions.
     */
    public function submit(Request $request): JsonResponse|RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'company' => 'nullable|string|max:150',
            'service' => 'required|string|max:100',
            'budget' => 'nullable|string|max:50',
            'message' => 'required|string|max:3000',
        ]);

        try {
            $message = ContactMessage::create([
                ...$validated,
                'ip_address' => $request->ip(),
            ]);

            $successMessage = 'Thank you, ' . $validated['name'] . '! Your inquiry has been received. Our lead architect will reach out within 24 hours.';

            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => true,
                    'message' => $successMessage,
                    'data' => $message,
                ], 200);
            }

            return back()->with('success', $successMessage);
        } catch (\Throwable $e) {
            if ($request->wantsJson() || $request->ajax()) {
                return response()->json([
                    'success' => false,
                    'message' => 'Unable to save your message. Please try again or email us directly at ' . config('company.email', 'hello@novacore.tech'),
                ], 500);
            }

            return back()->withInput()->with('error', 'Unable to save your message. Please try again.');
        }
    }

    /**
     * Handle API contact submissions.
     */
    public function submitApi(Request $request): JsonResponse
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:100',
            'email' => 'required|email|max:150',
            'company' => 'nullable|string|max:150',
            'service' => 'required|string|max:100',
            'budget' => 'nullable|string|max:50',
            'message' => 'required|string|max:3000',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'errors' => $validator->errors(),
            ], 422);
        }

        $message = ContactMessage::create([
            ...$validator->validated(),
            'ip_address' => $request->ip(),
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Inquiry received successfully.',
            'data' => $message,
        ], 201);
    }
}
