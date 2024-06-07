<!-- resources/views/pages/product/index.blade.php -->
<x-app-layout title="Product">
    <style>
        .orange {
            color: orange;
        }
        .btn-orange {
            background-color: orange;
            border-color: orange;
            color: white;
        }
        .btn-orange:hover {
            background-color: darkorange;
            border-color: darkorange;
        }
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border-color: #c3e6cb;
        }
    </style>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="card my-5">
                <h1 class="card-header orange">List of Products</h1>

                <div class="card-body">
                    <div class="d-flex justify-content-between mb-3">
                        <!-- Additional controls if needed -->
                    </div>

                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr class="orange">
                                    <th>ID</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Price</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $index => $product)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>
                                            <img class="img-fluid" width="100" src="{{ asset($product->file)}}" />
                                        </td>
                                        <td>{{ $product->name }}</td>
                                        <td>Rp. {{ number_format($product->price, 0) }} </td>
                                        <td>
                                            <a href="{{ route('booking.createByid', $product->id) }}"
                                                class="btn btn-orange">Booking</a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
