<!DOCTYPE html> 
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Manage Products - GoldSpice Admin</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <style>
    :root {
      --yellow: #ffee39;
      --yellowdark: #ffdc4fdc;
      --yellow2: #fff9a9;
      --emerald: #44b180;
      --emerald2: #b7ffbb;
      --tumeric: #c58610;
      --green2: #36996e;
      --grey2: #555;
      --red1:#ba0505;
      --red2:#6f0404;
    }
  </style>
</head>
<body class="bg-black text-white font-sans min-h-screen relative">

  <!-- Background image -->
  <div class="fixed inset-0 z-0">
    <img src="{{ asset('images/spicespoons4.jpg') }}" class="w-full h-full object-cover opacity-80" />
    <div class="absolute inset-0 bg-black/70"></div>
  </div>

  <!-- Page Content --> 
  <div class="relative z-10 p-8 max-w-6xl mx-auto">

    <h1 class="text-5xl font-bold text-[var(--yellowdark)] mb-8">Welcome to Product Management!</h1>

    <!-- Add Product Button -->
    <button onclick="toggleForm()" class="bg-[var(--emerald)] hover:bg-[var(--emerald2)] text-white hover:text-black font-semibold px-6 py-2 rounded mb-6 transition">
      + Add New Product
    </button>

    <!-- Success / Error -->
    @if (session('success'))
      <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">
          {{ session('success') }}
      </div>
    @endif

    @if ($errors->any())
      <ul class="mb-4">
          @foreach ($errors->all() as $error)
              <li class="bg-red-100 text-red-800 px-4 py-2 rounded mb-2">{{ $error }}</li>
          @endforeach
      </ul>
    @endif

    <!-- Hidden Form -->
    <div id="productForm" class="hidden bg-white text-black p-6 rounded-lg shadow mb-10">
      <h2 class="text-xl font-bold mb-4 text-[var(--tumeric)]">New Product Details</h2>
      <form method="POST" action="{{ route('spice.create') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
          <div>
            <label for="imagelink" class="block text-sm font-medium mb-1">Image File</label>
            <input type="file" id="imagelink" name="imagelink" accept="image/*" class="w-full border rounded px-3 py-2" required />
          </div>
          <div>
            <label for="name" class="block text-sm font-medium mb-1">Product Name</label>
            <input type="text" id="name" name="name" class="w-full border rounded px-3 py-2" required />
          </div>
          <div>
            <label for="packsize" class="block text-sm font-medium mb-1">Pack Size (g)</label>
            <input type="number" id="packsize" name="packsize" class="w-full border rounded px-3 py-2" required />
          </div>
          <div>
            <label for="price" class="block text-sm font-medium mb-1">Price (Rs)</label>
            <input type="number" id="price" name="price" class="w-full border rounded px-3 py-2" required />
          </div>
        </div>
        <button type="submit" class="mt-4 bg-[var(--tumeric)] hover:bg-yellow-500 text-white px-6 py-2 rounded">
          Submit Product
        </button>
      </form>
    </div>

    <!-- Product Table -->
    @if ($spices->count() > 0)
    <div class="overflow-x-auto bg-white text-black rounded-lg shadow mb-10">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-[var(--tumeric)] text-white">
          <tr>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Image</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Name</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Pack Size</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Price (Rs)</th>
            <th class="px-6 py-3 text-left text-sm font-semibold uppercase tracking-wider">Actions</th>
          </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
          @foreach($spices as $spice)
          <tr class="hover:bg-gray-100">
            <td class="px-6 py-4">
              <img src="{{ asset('storage/' . $spice->imagelink) }}" alt="Spice Image" class="w-16 h-16 object-cover rounded border" />
            </td>
            <td class="px-6 py-4">{{ $spice->name }}</td>
            <td class="px-6 py-4">{{ $spice->packsize }}g</td>
            <td class="px-6 py-4">Rs. {{ number_format($spice->price, 2) }}</td>
            <td class="px-6 py-4 space-x-2 flex items-center">
              <!-- Edit + Update Form -->
              <form method="POST" action="{{ route('spice.update', $spice->id) }}"
                    enctype="multipart/form-data"
                    id="edit-form-{{ $spice->id }}"
                    class="hidden flex flex-col sm:flex-row gap-2 items-start sm:items-center">
                @csrf
                @method('PUT')

                <input type="text" name="name" value="{{ $spice->name }}" class="w-24 px-2 py-1 text-sm rounded border">
                <input type="text" name="packsize" value="{{ $spice->packsize }}" class="w-20 px-2 py-1 text-sm rounded border">
                <input type="text" name="price" value="{{ $spice->price }}" class="w-20 px-2 py-1 text-sm rounded border">
                
                <!-- New: Image input -->
                <input type="file" name="imagelink" accept="image/*" class="text-sm text-gray-600">

                <button type="submit" class="bg-yellow-500 text-white px-3 py-1 text-sm rounded">
                  Update
                </button>
              </form>

              <!-- Button Group -->
              <div id="button-group-{{ $spice->id }}" class="flex gap-2">
                <button onclick="showEditForm({{ $spice->id }})" class="bg-yellow-400 hover:bg-yellow-500 text-black px-3 py-1 text-sm rounded">
                  Edit
                </button>

                <form method="POST" action="{{ route('spice.delete', $spice->id) }}" onsubmit="return confirm('Are you sure?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="bg-red-500 hover:bg-red-600 text-white px-3 py-1 text-sm rounded">
                    Delete
                  </button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
    @endif

    <div class="button bg-green">
    <button><a href="{{ url('dashboard') }}" class="inline-block mt-4 bg-white text-black font-bold rounded-full px-4 py-2 rounded hover:bg-[var(--emerald)] transition transform hover:scale-105 duration-300"><< Back to Dashboard</a></button>
  </div>

  </div>

  

  <!-- Scripts -->
  <script>
    function toggleForm() {
      const form = document.getElementById("productForm");
      form.classList.toggle("hidden");
    }

    function showEditForm(id) {
      document.getElementById(`edit-form-${id}`).classList.remove('hidden');
      document.getElementById(`button-group-${id}`).classList.add('hidden');
    }
  </script>

</body>
</html>
