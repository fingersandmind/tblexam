<?php

namespace App;

use App\Mail\SendMailable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Mail;

class Contact extends Model
{
    protected $fillable = ['fname', 'lname', 'email', 'phone'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function saveContact($request)
    {
        $this->updateOrCreate(
            ['id' => $this->id],
            $request->except('action')
        );
        Mail::to($request->email)->send(new SendMailable());
    }
}
