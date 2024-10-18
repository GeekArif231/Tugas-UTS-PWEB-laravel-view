@extends('layouts.app')

@section('title', 'Contact')

@section('header', 'Contact List')

<!-- @section('header2', 'user') -->

@section('content')
<div class="max-w-4xl mx-auto bg-gradient-to-br from-blue-500 to-indigo-600 p-8 rounded-lg shadow-lg text-white">
    <div class="text-center mb-6 font-[]">
        <h2 class="text-4xl font-bold">Contact</h2>
        <p class="text-lg mt-2">Welcome</p>
    </div>
    <div class="overflow-hidden rounded-lg shadow-lg">
        <table class="min-w-full bg-white text-gray-800 rounded-lg overflow-hidden">
            <thead class="bg-indigo-500 text-white font-[Poppins]">
                <tr>
                    <th class="py-3 px-6 text-left  tracking-wider uppercase">list</th>
                    <th class="py-3 px-6 text-left  tracking-wider uppercase">Role</th>
                    <th class="py-3 px-6 text-left  tracking-wider uppercase">Email</th>
                </tr>
            </thead>
            <tbody class="bg-gray-50 divide-y divide-gray-200">
                @foreach ($contacts as $contact)
                    <tr class="hover:bg-gray-100 transition-colors duration-200">
                        <td class="py-3 px-6 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="ml-4">
                                    <div class="text-sm font-medium">{{ $contact['name'] }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="py-3 px-6 whitespace-nowrap">
                            <span class="text-sm">{{ $contact['role'] }}</span>
                        </td>
                        <td class="py-3 px-6 whitespace-nowrap">
                            <span class="text-sm">{{ $contact['email'] }}</span>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
