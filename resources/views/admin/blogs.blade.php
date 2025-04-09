@extends('layouts.admin')

@section('content')

    <h3 class="text-lg font-semibold text-gray-800 mb-2">BLOG MANAGEMENT</h3>
    <p class="text-sm text-gray-600 mb-4">Yeah. It's a blog management thing.</p>
    <button class="bg-blue-500 text-white p-2 mb-4"><a href="/admin/blogs/create">Create Blog</a></button>

    <table class="bg-white w-full text-left border">
        <thead>
            <tr class="bg-blue-200">
                <th class="p-2">Title</th>
                <th class="p-2">Slug</th>
                <th class="p-2">Published</th>
                <th class="p-2">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr class="border-t">
                    <td class="p-2">{{ $blog->title }}</td>
                    <td class="p-2">{{ $blog->slug }}</td>
                    <td class="p-2">{{ $blog->published }}</td>
                    <td class="p-2">
                        <a href="/admin/blog/{{ $blog->id }}" class="text-blue-500">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>


@endsection 
