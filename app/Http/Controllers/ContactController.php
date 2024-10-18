<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Faker\Factory as Faker;

class ContactController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function register()
    {
        return view('register');
    }

    // Memproses login dan redirect ke halaman contact
    public function processLogin(Request $request)
    {
        $request->session()->put('username', $request->input('username'));
        return redirect()->route('contact');
    }

    // Menampilkan halaman contact dengan data dummy
    public function showContact(Request $request)
    {
        $faker = Faker::create();

        // Data dummy menggunakan Faker
        $contacts = [];
        for ($i = 0; $i < 10; $i++) {
            $contacts[] = [
                'name' => $faker->name,
                'role' => $faker->randomElement(['Student', 'Employee', 'Freelancer']),
                'email' => $faker->email,
            ];
        }

        // Ambil username dari session, default 'Guest'
        $username = $request->session()->get('username', 'Guest');

        return view('contact', [
            'contacts' => $contacts,
            'username' => $username
        ]);
    }
}
