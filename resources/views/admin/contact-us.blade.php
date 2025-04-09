@extends('layouts.admin')

@section('content')

    <h3 class="text-lg font-semibold text-gray-800 mb-2">CONTACT FORM MANAGEMENT</h3>
    <p class="text-sm text-gray-600 mb-4">CONTACT FORM ENTRIES WILL APPEAR HERE</p>

    <table class="bg-white w-full text-left border">
        <thead>
            <tr class="bg-blue-200">
                <th class="p-2">Created At</th>
                <th class="p-2">Sender</th>
                <th class="p-2">Message</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($contactUs as $contact)
                <tr class="border-t text-sm">
                    <td class="p-2">{{ $contact->created_at }}</td>
                    <td class="p-2">
                        Company Name: {{ $contact->company_name }}<br>
                        Name: {{ $contact->contact_name }}<br>
                        Email: {{ $contact->email }}<br>
                        Phone: {{ $contact->phone }}
                        
                    </td>
                    <td class="p-2"><b>{{$contact->subject }}</b><br>{{ $contact->message }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection 
