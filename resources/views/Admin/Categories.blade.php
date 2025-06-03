<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Categories</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-6">
    <div class="container mx-auto">
        <h1 class="text-3xl font-bold mb-6">Categories</h1>

        <div class="overflow-x-auto bg-white shadow rounded-lg">
            <table class="min-w-full divide-y divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">ID</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Name</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Description</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Image</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Created At</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Updated At</th>
                        <th class="px-4 py-2 text-left text-sm font-medium text-gray-700">Actions</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                @forelse ($categories as $category)
                        <tr>
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $category->id }}</td>
                            <td class="px-4 py-2 text-sm text-gray-900">{{ $category->name }}</td>
                            <td class="px-4 py-2 text-sm text-gray-700">{{ $category->description }}</td>
                            <td class="px-4 py-2">
                                <img src="{{ asset('storage/' . $category->image) }}" alt="{{ $category->name }}" class="w-20 h-auto rounded">

                            </td>
                            <td class="px-4 py-2 text-sm text-gray-500">{{ $category->created_at }}</td>
                            <td class="px-4 py-2 text-sm text-gray-500">{{ $category->updated_at }}</td>
                            <td class="px-4 py-2">
                                <div class="flex space-x-2">
                                    <a href="#" class="bg-green-500 hover:bg-green-600 text-white px-3 py-1 text-sm rounded">Edit</a>
                                    <a href="#" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded">Delete</a>
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="px-4 py-4 text-center text-gray-500">No categories found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
