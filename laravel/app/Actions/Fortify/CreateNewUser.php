<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'firstName' => ['required', 'string', 'max:255'],
            'lastName' => ['required', 'string', 'max:255'],
            'birthdate' => ['required', 'string', 'max:255' , 'date_format:d-m-Y'],
            'city' => ['required','regex:/^[a-zA-Z]+$/'],
            'postalCode' =>['required','number','min:7','max:7'],
            'username' => ['required','string', 'min:5', Rule::unique(User::class),],
            'phoneNumber' => [ 'required','string','regex:/\+998-[0-9]{2}-[0-9]{7}$/', Rule::unique(User::class),],
            'passport' => ['required' ,'string', 'regex:/^[A-B]{2}[0-9]{7}/', Rule::unique(User::class),],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
        ])->validate();

        return User::create([
            'firstName' => $input['firstName'],
            'lastName' => $input['lastName'],
            'username' => $input['username'],
            'phoneNumber' => $input['phoneNumber'],
            'birthdate' => $input['birthdate'],
            'passport' => $input['passport'],
            'city' => $input['city'],
            'postalCode' => $input['postalCode'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
    }
}
