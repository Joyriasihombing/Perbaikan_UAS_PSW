<!-- resources/views/pages/product/edit.blade.php -->
<x-app-layout title="Update Product">
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
        .form-label.orange {
            color: orange;
        }
    </style>

    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2 class="orange">Edit Product</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('booking.store') }}" method="POST" class="p-4" enctype='multipart/form-data'>
                    @csrf
                    <div class="form-group">
                        <label for="play_date" class="form-label orange">Select Date</label>
                        <input type="date" name="play_date" id="play_date" class="form-control @error('play_date') is-invalid @enderror">

                        @error('play_date')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="start_at" class="form-label orange">Mulai:</label>
                        <input type="time" class="form-control @error('start_at') is-invalid @enderror"
                            value="{{ old('start_at') }}" id="start_at" name="start_at">
                        @error('start_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="end_at" class="form-label orange">Sampai:</label>
                        <input type="time" class="form-control @error('end_at') is-invalid @enderror"
                            value="{{ old('end_at') }}" id="end_at" name="end_at">
                        @error('end_at')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <label for="payment_method" class="form-label orange">Payment Method</label>
                        <select id="payment_method" name="payment_method" class="form-control @error('payment_method') is-invalid @enderror">
                            <option value="" selected>Select</option>
                            <option value="COD" {{ old('payment_method') == 'COD' ? 'selected' : '' }}>COD</option>
                        </select>
                        @error('payment_method')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="mb-3">
                        <input hidden type="text" id="product_id" name="product_id" class="form-control" value="{{ $product->id }}">
                    </div>

                    <button type="submit" class="btn mt-5 btn-orange">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
