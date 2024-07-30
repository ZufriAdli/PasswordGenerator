<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PasswordGeneratorController extends Controller
{
    private $lowercase = 'abcdefghijklmnopqrstuvwxyz';
    private $uppercase = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    private $numbers = '0123456789';
    private $symbols = '!#$%&()*+@^';

    public function showForm()
    {
        return view('password-form');
    }

    public function generate(Request $request)
    {
        $characters = '';
        $includeLowercase = $request->input('include_lowercase', false);
        $includeUppercase = $request->input('include_uppercase', false);
        $includeNumbers = $request->input('include_numbers', false);
        $includeSymbols = $request->input('include_symbols', false);

        if ($includeLowercase) $characters .= $this->lowercase;
        if ($includeUppercase) $characters .= $this->uppercase;
        if ($includeNumbers) $characters .= $this->numbers;
        if ($includeSymbols) $characters .= $this->symbols;

        $minLength = $request->input('min_length', 8);

        if (strlen($characters) == 0) {
            return redirect()->back()->withErrors('No characters available for password generation.');
        }

        $password = '';
        for ($i = 0; $i < $minLength; $i++) {
            $password .= $characters[random_int(0, strlen($characters) - 1)];
        }

        return view('password-result', ['password' => $password]);
    }
}
