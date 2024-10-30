@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <button id="addProductBtn" class="btn btn-primary mb-3">Add Product</button>
        <table id="productTable" class="table">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Min Price</th>
                <th>Max Price</th>
                <th>Service</th>
                <th>Stock</th>
                <th>Actions</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            var table = $('#productTable').DataTable({
                ajax: {
                    url: '{{ route('admin.products.data') }}',
                    dataSrc: 'data'
                },
                columns: [
                    { data: 'id' },
                    { data: 'name' },
                    { data: 'min_price' },
                    { data: 'max_price' },
                    { data: 'service.name' },
                    { data: 'stock' },
                    {
                        data: null,
                        render: function(data, type, row) {
                            return `
                                <a href="#" class="btn btn-sm btn-primary editProductBtn" data-id="${row.id}">
                                    <i class="fas fa-edit"></i>
                                </a>
                                <a href="#" class="btn btn-sm btn-danger deleteProductBtn" data-id="${row.id}">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            `;
                        }
                    }
                ]
            });

            $(document).ready(function() {
                $('#addProductBtn').on('click', function() {
                    Swal.fire({
                        title: 'Add Product',
                        html: `
                <input type="text" id="name" class="swal2-input" placeholder="Name">
                <input type="number" id="min_price" class="swal2-input" placeholder="Min Price">
                <input type="number" id="max_price" class="swal2-input" placeholder="Max Price">
                <select id="service_id" class="swal2-input">
                    @foreach($services as $service)
                        <option value="{{ $service->id }}">{{ $service->name }}</option>
                    @endforeach
                        </select>
                        <input type="number" id="stock" class="swal2-input" placeholder="Stock">
`,
                        confirmButtonText: 'Add',
                        focusConfirm: false,
                        preConfirm: () => {
                            const name = Swal.getPopup().querySelector('#name').value;
                            const min_price = Swal.getPopup().querySelector('#min_price').value;
                            const max_price = Swal.getPopup().querySelector('#max_price').value;
                            const service_id = Swal.getPopup().querySelector('#service_id').value;
                            const stock = Swal.getPopup().querySelector('#stock').value;
                            if (!name || !min_price || !max_price || !service_id || !stock) {
                                Swal.showValidationMessage(`Please enter all fields`);
                            }
                            return { name: name, min_price: min_price, max_price: max_price, service_id: service_id, stock: stock };
                        }
                    }).then((result) => {
                        if (result.isConfirmed) {
                            $.ajax({
                                url: '{{ route('admin.products.store') }}',
                                method: 'POST',
                                data: {
                                    _token: '{{ csrf_token() }}',
                                    name: result.value.name,
                                    min_price: result.value.min_price,
                                    max_price: result.value.max_price,
                                    service_id: result.value.service_id,
                                    stock: result.value.stock
                                },
                                success: function(response) {
                                    Swal.fire('Added!', '', 'success');
                                    $('#productTable').DataTable().ajax.reload(); // Reload the DataTable
                                },
                                error: function(response) {
                                    Swal.fire('Error!', 'There was an error adding the product.', 'error');
                                }
                            });
                        }
                    });
                });
            });

            $('#productTable').on('click', '.editProductBtn', function() {
                var productId = $(this).data('id');
                $.ajax({
                    url: `/admin/products/${productId}`,
                    method: 'GET',
                    success: function(product) {
                        Swal.fire({
                            title: 'Edit Product',
                            html: `
                                <input type="text" id="name" class="swal2-input" placeholder="Name" value="${product.name}">
                                <input type="number" id="min_price" class="swal2-input" placeholder="Min Price" value="${product.min_price}">
                                <input type="number" id="max_price" class="swal2-input" placeholder="Max Price" value="${product.max_price}">
                                <select id="service_id" class="swal2-input">
                                    @foreach($services as $service)
                            <option value="{{ $service->id }}" ${product.service_id == {{ $service->id }} ? 'selected' : ''}>{{ $service->name }}</option>
                                    @endforeach
                            </select>
                            <input type="number" id="stock" class="swal2-input" placeholder="Stock" value="${product.stock}">
                            `,
                            confirmButtonText: 'Update',
                            focusConfirm: false,
                            preConfirm: () => {
                                const name = Swal.getPopup().querySelector('#name').value;
                                const min_price = Swal.getPopup().querySelector('#min_price').value;
                                const max_price = Swal.getPopup().querySelector('#max_price').value;
                                const service_id = Swal.getPopup().querySelector('#service_id').value;
                                const stock = Swal.getPopup().querySelector('#stock').value;
                                if (!name || !min_price || !max_price || !service_id || !stock) {
                                    Swal.showValidationMessage(`Please enter all fields`);
                                }
                                return { name: name, min_price: min_price, max_price: max_price, service_id: service_id, stock: stock };
                            }
                        }).then((result) => {
                            if (result.isConfirmed) {
                                $.ajax({
                                    url: `/admin/products/${productId}`,
                                    method: 'PUT',
                                    data: {
                                        _token: '{{ csrf_token() }}',
                                        name: result.value.name,
                                        min_price: result.value.min_price,
                                        max_price: result.value.max_price,
                                        service_id: result.value.service_id,
                                        stock: result.value.stock
                                    },
                                    success: function(response) {
                                        Swal.fire('Updated!', '', 'success');
                                        table.ajax.reload(); // Reload the DataTable
                                    },
                                    error: function(response) {
                                        Swal.fire('Error!', 'There was an error updating the product.', 'error');
                                    }
                                });
                            }
                        });
                    },
                    error: function(response) {
                        Swal.fire('Error!', 'There was an error fetching the product details.', 'error');
                    }
                });
            });
        });

        $('#productTable').on('click', '.deleteProductBtn', function() {
            var productId = $(this).data('id');
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!',
            }).then((result) => {
                if (result.isConfirmed) {
                    $.ajax({
                        url: `/admin/products/${productId}`,
                        method: 'DELETE',
                        data: {
                            _token: '{{ csrf_token() }}'
                        },
                        success: function(response) {
                            Swal.fire('Deleted!', 'Your product has been deleted.', 'success');
                            table.ajax.reload(); // Reload the DataTable
                        },
                        error: function(response) {
                            Swal.fire('Error!', 'There was an error deleting the product.', 'error');
                        }
                    });
                }
            });
        });
    </script>
@endpush
