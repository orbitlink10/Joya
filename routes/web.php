<?php

use App\Mail\BookingRequestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/flowers', function () {
    return view('flowers');
})->name('flowers');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/events', function () {
    return view('events');
})->name('events');

Route::get('/booking', function () {
    return view('booking');
})->name('booking');

Route::post('/booking-request', function (Request $request) {
    $validated = $request->validate([
        'name' => ['nullable', 'string', 'max:120'],
        'phone' => ['nullable', 'string', 'max:80'],
        'email' => ['nullable', 'email', 'max:160'],
        'inspiration_photo' => ['nullable', 'file', 'image', 'max:5120'],
    ]);

    $fields = collect($request->except(['_token', 'inspiration_photo']))
        ->map(fn ($value) => is_array($value) ? implode(', ', array_filter($value)) : $value)
        ->filter(fn ($value) => filled($value))
        ->all();

    try {
        Mail::to(config('mail.booking_to'))->send(
            new BookingRequestMail(
                $fields,
                $request->file('inspiration_photo'),
                $validated['email'] ?? null
            )
        );
    } catch (Throwable $exception) {
        Log::error('Booking request email failed.', [
            'message' => $exception->getMessage(),
        ]);

        return response()->json([
            'message' => 'We could not send the email copy right now.',
        ], 500);
    }

    return response()->json([
        'message' => 'Booking request emailed successfully.',
    ]);
})->name('booking.request');
