<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['nullable'],    
            'age' => ['nullable'],
            'gender' => ['nullable'],   
            'local' => ['nullable'], 
            'username' => ['nullable'],
            'role' => ['nullable'],  
            'getIP' => ['nullable'],  
            'getCity' => ['nullable'],  
            'getRegion' => ['nullable'],  
            'getRegionCode' => ['nullable'],  
            'getCountry' => ['nullable'],  
            'getCountryCode' => ['nullable'],  
            'getContinent' => ['nullable'],  
            'getContinentCode' => ['nullable'],  
            'getPostalCode' => ['nullable'],  
            'getLatitude' => ['nullable'],  
            'getLongitude' => ['nullable'],  
            'getCurrencyCode' => ['nullable'],  
            'getCurrencySymbol' => ['nullable'],  
            'getCurrencyExchangeRate' => ['nullable'],  
            'getLocation' => ['nullable'],  
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            //'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['required', 'accepted'] : '',
        ])->validate();

        return DB::transaction(function () use ($input) {
            return tap(User::create([
                'name' => $input['name'],  
                'age' => $input['age'],
                'gender' => $input['gender'],
                'local' => $input['local'],             
                'username' => $input['username'],
                'email' => $input['email'],
                'role' => $input['role'],    
                'getIP' => $input['getIP'],    
                'getCity' => $input['getCity'],    
                'getRegion' => $input['getRegion'],    
                'getRegionCode' => $input['getRegionCode'],    
                'getCountry' => $input['getCountry'],    
                'getCountryCode' => $input['getCountryCode'],    
                'getContinent' => $input['getContinent'],    
                'getContinentCode' => $input['getContinentCode'],    
                'getPostalCode' => $input['getPostalCode'],    
                'getLatitude' => $input['getLatitude'], 
                'getLongitude' => $input['getLongitude'],    
                'getCurrencyCode' => $input['getCurrencyCode'],    
                'getCurrencySymbol' => $input['getCurrencySymbol'],    
                'getCurrencyExchangeRate' => $input['getCurrencyExchangeRate'],    
                'getLocation' => $input['getLocation'], 
                'password' => Hash::make($input['password']),
            ]), function (User $user) {
                //$this->createTeam($user);
            }
        );
        });
    }

    /**
     * Create a personal team for the user.
     *
     * @param  \App\Models\User  $user
     * @return void
     */
   // protected function createTeam(User $user)
    //{
        //$user->ownedTeams()->save(Team::forceCreate([
            //'user_id' => $user->id,
            //'name' => explode(' ', $user->name, 2)[0]."'s Team",
            //'personal_team' => true,
        //]));
    //}
}
