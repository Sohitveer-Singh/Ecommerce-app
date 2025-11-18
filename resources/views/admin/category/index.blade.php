@extends('layouts.user.app')
@push('styles')
    <style>
        .input-basic {
            width: 100%;
            padding: 1rem 2rem;
            height: 5rem;
            font-size: 1.4rem;
            font-family: "Jost", sans-serif;
            color: #232532;
            border: 1px solid rgba(174, 28, 154, 0.08);
            border-radius: 0.5rem;
            box-shadow: none;
        }

        .input-basic::placeholder {
            color: #797979;
        }

        .input-basic:focus {
            border-color: rgba(174, 28, 154, 0.08);
            outline: none;
        }

        .input-basic.textarea {
            padding: 3rem;
            height: auto;
        }

        .label-basic {
            font-family: "Jost", sans-serif;
            font-size: 1.5rem;
            color: #797979;
            margin-bottom: 0.5rem;
            display: block;
            margin-left: 4px;
        }

        .custom-rounded-btn {
            position: relative;
            display: inline-block;
            height: 45px;
            padding: 12px 14px;
            margin: 0;
            box-sizing: border-box;
            overflow: hidden;

            width: 168.734px;

            font-family: Inter, sans-serif;
            font-size: 14px;
            font-weight: 500;
            line-height: 21px;
            text-align: center;
            text-decoration: none;
            color: #fff;

            background-color: rgb(174, 28, 154);
            border-radius: 30px;
            margin-left: 8px;

            cursor: pointer;
            transition: all 0.3s ease;
        }

        .custom-rounded-btn:hover {
            /* opacity: 0.85; */

            background-color: rgb(174, 28, 154);
        }
    </style>
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
@endpush
@section('content')

    <!-- nav-content -->
    <div class="tab-content nav-content" id="v-pills-tabContent" style="flex: 1 0%;">

        <div class="tab-pane fade show active" id="v-pills-order" role="tabpanel"
             aria-labelledby="v-pills-order-tab" tabindex="0">
            <div class="user-profile">
                <div class="user-title">
                    <p class="paragraph">Hello, Sajjad</p>
                    <h5 class="heading">Welcome to your Listings </h5>
                </div>

                <div class="profile-section">
                    <div class="row g-5">
                        {{-- <div class="col-lg-12"> --}}
                        <form class="row mt-5" action="{{ route('admin.category.store') }}" method="POST"
                              enctype="multipart/form-data">
                            @csrf
                            <div class="col-lg-4">
                                <label for="categoryName" class="label-basic">Name*</label>
                                <input type="text" name="name" id="categoryName" class="input-basic"
                                       placeholder="Enter Category Name" value="{{ old('name') }}" required>
                                @error('name')
                                <div style="color: red; font-size: 0.8rem; margin-top: 5px;">
                                    {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-2">
                                <label for="categorySlug" class="label-basic">Slug*</label>
                                <input type="text" name="slug" id="categorySlug" class="input-basic"
                                       placeholder="Slug" value="{{ old('slug') }}" required>
                                @error('slug')
                                <div style="color: red; font-size: 0.8rem; margin-top: 5px;">
                                    {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-2">
                                <label for="categoryStatus" class="label-basic">Status*</label>
                                <select name="status" id="categoryStatus" class="input-basic">
                                    <option value="1"
                                        {{ old('status', '1') == '1' ? 'selected' : '' }}>Active
                                    </option>
                                    <option value="0" {{ old('status') == '0' ? 'selected' : '' }}>
                                        Inactive
                                    </option>
                                </select>
                                @error('status')
                                <div style="color: red; font-size: 0.8rem; margin-top: 5px;">
                                    {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-4">
                                <label for="categoryImage" class="label-basic">Image*</label>
                                <input type="file" name="image" id="categoryImage" class="input-basic"
                                       required>
                                @error('image')
                                <div style="color: red; font-size: 0.8rem; margin-top: 5px;">
                                    {{ $message }}</div>
                                @enderror
                            </div>

                            <div class="col-lg-4">
                                <div class="form-btn mt-5">
                                    <button type="submit" style="margin: 0;" class="shop-btn cancel-btn">
                                        Create Tag
                                    </button>
                                </div>
                            </div>
                        </form>
                        <div class="col-lg-12">
                            <table id="basictable" class="table-bordered table-striped table align-middle">
                                <thead class="">
                                <tr>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse ($categories as $category)
                                    <tr>
                                        <td>
                                            <img src="{{ Storage::url($category->image) }}"
                                                 alt="{{ $category->name }}" height="50">
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td>{{ $category->slug }}</td>
                                        <td>
                                            @if ($category->status)
                                                <span class="badge bg-success">Active</span>
                                            @else
                                                <span class="badge bg-secondary">Inactive</span>
                                            @endif
                                        </td>
                                        <td>
                                            {{-- <a href="{{ route('admin.listing-categories.edit', $category) }}"
                                                class="btn btn-sm btn-info">Edit</a> --}}
                                            <form
                                                action="{{ route('admin.category.destroy', $category) }}"
                                                method="POST" class="d-inline"
                                                onsubmit="return confirm('Are you sure you want to delete this category?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit"
                                                        class="btn btn-sm btn-danger">Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No categories found.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>


            </div>
        </div>

    </div>

@endsection
@push('scripts')
    <script src="https://cdn.datatables.net/2.3.4/js/dataTables.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#basictable').DataTable({
                pageLength: 10
            });
        });
    </script>
@endpush
