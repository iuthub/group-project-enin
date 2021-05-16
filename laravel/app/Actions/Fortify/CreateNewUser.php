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
            'username' => ['required', 'string', 'max:255', Rule::unique(User::class),],
            'phoneNumber' => ['required', 'string', 'max:255', Rule::unique(User::class),],
            'birthdate' => ['required', 'string', 'max:255'],
            'passport' => ['required', 'string', 'max:255', Rule::unique(User::class),],
            'city' => ['required', 'string', 'max:255'],
            'postalCode' => ['required', 'string', 'max:255'],
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
