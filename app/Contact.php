<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
    }
}
