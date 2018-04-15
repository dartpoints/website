<?php

use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('claim', function () {
    return view('claim.index');
})->name('claim.index')->middleware('auth');

Route::get('claim/{event}', function (\App\Event $event) {
    return view('claim.show')->with(compact('event'));
})->name('claim.show')->middleware('auth');

Route::post('claim/{event}', function (\App\Event $event, Request $request) {
    $validatedData = $request->validate([
        'code' => 'required||alpha_num|size:20|exists:codes,code',
    ]);

    $code = \App\Code::where('code', $validatedData['code'])->first();
    if ($code->claimed) abort(401);

    if (Auth::user()->claims()->where('event_id', $code->event->id)->first() !== null) abort(401);

    $code->claim()->create([
        'user_id' => Auth::user()->id,
        'house_id' => Auth::user()->house->id,
        'event_id' => $code->event->id,
    ]);

    $code->claimed = true;
    $code->save();

    return redirect()->route('claim.index');
})->name('claim.create')->middleware('auth');

Auth::routes();
