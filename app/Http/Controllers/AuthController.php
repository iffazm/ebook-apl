<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class AuthController extends Controller
{
    public function me()
    {
        return
        [
            "NIS" => "3103118080",
            "Name" => "Lathifah Zumaemah",
            "Gender" => "Female",
            "Phone" => "081911933525",
            "Class" => "XII RPL 3",
        ];
    }
}
