@extends('layouts.user.app')
@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.4/css/dataTables.dataTables.min.css">
    <style>
        /* Make tab text bigger */
        .dashboard-tabs .nav-link {
            font-size: 1.4rem;
        }

        /* Make table text bigger */
        .dashboard-table {
            font-size: 1.4rem; /* Adjust this value as needed */
        }
    </style>
@endpush
@section('content')
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
                        <div class="col-lg-4 col-sm-6">

                            <div class=" overflow-hidden border-0"
                                 style="border-radius: 1.2rem;  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;font-family: 'Jost', sans-serif;
                                                 background: rgba(174, 28, 154, 0.08);">

                                <div style="height: 100px" class="d-flex align-items-center justify-center p-3">

                                    <div class="flex-shrink-0">
                                                     <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                             xmlns="http://www.w.w3.org/2000/svg">
                                                        <rect width="62" height="62" rx="4" fill="white"></rect>
                                                            <path
                                                                d="M45.2253 29.8816H44.4827L43.6701 26.3651C43.376 25.1043 42.2552 24.2217 40.9662 24.2217H36.8474V20.8453C36.8474 19.038 35.3764 17.5811 33.5831 17.5811H18.1724C16.4631 17.5811 15.0762 18.968 15.0762 20.6772V37.0967C15.0762 38.8058 16.4631 40.1928 18.1724 40.1928H19.2931C19.8955 42.1962 21.7448 43.6533 23.9304 43.6533C26.1159 43.6533 27.9792 42.1962 28.5816 40.1928C28.8455 40.1928 35.3459 40.1928 35.1942 40.1928C35.7966 42.1962 37.6459 43.6533 39.8315 43.6533C42.031 43.6533 43.8803 42.1962 44.4827 40.1928H45.2253C46.7663 40.1928 47.9992 38.9599 47.9992 37.4189V32.6555C47.9992 31.1145 46.7663 29.8816 45.2253 29.8816ZM23.9304 40.8513C22.7897 40.8513 21.8849 39.8969 21.8849 38.7918C21.8849 37.657 22.7956 36.7324 23.9304 36.7324C25.0652 36.7324 25.9898 37.657 25.9898 38.7918C25.9898 39.9151 25.0692 40.8513 23.9304 40.8513ZM28.9739 25.0622L24.799 28.3125C24.2023 28.7767 23.3035 28.6903 22.8236 28.0604L21.2125 25.9449C20.7361 25.3284 20.8622 24.4458 21.4787 23.9835C22.0811 23.5072 22.9637 23.6332 23.4401 24.2496L24.1966 25.2303L27.2507 22.8487C27.8531 22.3864 28.7357 22.4845 29.2121 23.1009C29.6884 23.7173 29.5763 24.586 28.9739 25.0622ZM39.8315 40.8513C38.6906 40.8513 37.7861 39.8969 37.7861 38.7918C37.7861 37.657 38.7107 36.7324 39.8315 36.7324C40.9662 36.7324 41.8909 37.657 41.8909 38.7918C41.8909 39.9166 40.9683 40.8513 39.8315 40.8513ZM37.618 27.0236H40.2798C40.6021 27.0236 40.8962 27.2337 41.0083 27.542L41.8629 30.0497C42.031 30.5541 41.6667 31.0724 41.1344 31.0724H37.618C37.1976 31.0724 36.8474 30.7222 36.8474 30.3019V27.7942C36.8474 27.3739 37.1976 27.0236 37.618 27.0236Z"
                                                                fill="#AE1C9A"></path>
                                                        </svg>
                                                      </span>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-muted mb-1">Active Listing</p>
                                        <h5 class="mb-0">{{$completedListings->count()}}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">

                            <div class=" overflow-hidden border-0"
                                 style="border-radius: 1.2rem;  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;font-family: 'Jost', sans-serif;
                                                 background: rgba(174, 28, 154, 0.08);">

                                <div style="height: 100px" class="d-flex align-items-center justify-center p-3">

                                    <div class="flex-shrink-0">
                                                     <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                             xmlns="http://www.w.w3.org/2000/svg">
                                                        <rect width="62" height="62" rx="4" fill="white"></rect>
                                                            <path
                                                                d="M45.2253 29.8816H44.4827L43.6701 26.3651C43.376 25.1043 42.2552 24.2217 40.9662 24.2217H36.8474V20.8453C36.8474 19.038 35.3764 17.5811 33.5831 17.5811H18.1724C16.4631 17.5811 15.0762 18.968 15.0762 20.6772V37.0967C15.0762 38.8058 16.4631 40.1928 18.1724 40.1928H19.2931C19.8955 42.1962 21.7448 43.6533 23.9304 43.6533C26.1159 43.6533 27.9792 42.1962 28.5816 40.1928C28.8455 40.1928 35.3459 40.1928 35.1942 40.1928C35.7966 42.1962 37.6459 43.6533 39.8315 43.6533C42.031 43.6533 43.8803 42.1962 44.4827 40.1928H45.2253C46.7663 40.1928 47.9992 38.9599 47.9992 37.4189V32.6555C47.9992 31.1145 46.7663 29.8816 45.2253 29.8816ZM23.9304 40.8513C22.7897 40.8513 21.8849 39.8969 21.8849 38.7918C21.8849 37.657 22.7956 36.7324 23.9304 36.7324C25.0652 36.7324 25.9898 37.657 25.9898 38.7918C25.9898 39.9151 25.0692 40.8513 23.9304 40.8513ZM28.9739 25.0622L24.799 28.3125C24.2023 28.7767 23.3035 28.6903 22.8236 28.0604L21.2125 25.9449C20.7361 25.3284 20.8622 24.4458 21.4787 23.9835C22.0811 23.5072 22.9637 23.6332 23.4401 24.2496L24.1966 25.2303L27.2507 22.8487C27.8531 22.3864 28.7357 22.4845 29.2121 23.1009C29.6884 23.7173 29.5763 24.586 28.9739 25.0622ZM39.8315 40.8513C38.6906 40.8513 37.7861 39.8969 37.7861 38.7918C37.7861 37.657 38.7107 36.7324 39.8315 36.7324C40.9662 36.7324 41.8909 37.657 41.8909 38.7918C41.8909 39.9166 40.9683 40.8513 39.8315 40.8513ZM37.618 27.0236H40.2798C40.6021 27.0236 40.8962 27.2337 41.0083 27.542L41.8629 30.0497C42.031 30.5541 41.6667 31.0724 41.1344 31.0724H37.618C37.1976 31.0724 36.8474 30.7222 36.8474 30.3019V27.7942C36.8474 27.3739 37.1976 27.0236 37.618 27.0236Z"
                                                                fill="#AE1C9A"></path>
                                                        </svg>
                                                      </span>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-muted mb-1">Inactive Listing</p>
                                        <h5 class="mb-0">{{$pendingListings->count()}}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-sm-6">

                            <div class=" overflow-hidden border-0"
                                 style="border-radius: 1.2rem;  box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;font-family: 'Jost', sans-serif;
                                                 background: rgba(174, 28, 154, 0.08);">

                                <div style="height: 100px" class="d-flex align-items-center justify-center p-3">

                                    <div class="flex-shrink-0">
                                                     <span>
                                                        <svg width="62" height="62" viewBox="0 0 62 62" fill="none"
                                                             xmlns="http://www.w.w3.org/2000/svg">
                                                        <rect width="62" height="62" rx="4" fill="white"></rect>
                                                            <path
                                                                d="M45.2253 29.8816H44.4827L43.6701 26.3651C43.376 25.1043 42.2552 24.2217 40.9662 24.2217H36.8474V20.8453C36.8474 19.038 35.3764 17.5811 33.5831 17.5811H18.1724C16.4631 17.5811 15.0762 18.968 15.0762 20.6772V37.0967C15.0762 38.8058 16.4631 40.1928 18.1724 40.1928H19.2931C19.8955 42.1962 21.7448 43.6533 23.9304 43.6533C26.1159 43.6533 27.9792 42.1962 28.5816 40.1928C28.8455 40.1928 35.3459 40.1928 35.1942 40.1928C35.7966 42.1962 37.6459 43.6533 39.8315 43.6533C42.031 43.6533 43.8803 42.1962 44.4827 40.1928H45.2253C46.7663 40.1928 47.9992 38.9599 47.9992 37.4189V32.6555C47.9992 31.1145 46.7663 29.8816 45.2253 29.8816ZM23.9304 40.8513C22.7897 40.8513 21.8849 39.8969 21.8849 38.7918C21.8849 37.657 22.7956 36.7324 23.9304 36.7324C25.0652 36.7324 25.9898 37.657 25.9898 38.7918C25.9898 39.9151 25.0692 40.8513 23.9304 40.8513ZM28.9739 25.0622L24.799 28.3125C24.2023 28.7767 23.3035 28.6903 22.8236 28.0604L21.2125 25.9449C20.7361 25.3284 20.8622 24.4458 21.4787 23.9835C22.0811 23.5072 22.9637 23.6332 23.4401 24.2496L24.1966 25.2303L27.2507 22.8487C27.8531 22.3864 28.7357 22.4845 29.2121 23.1009C29.6884 23.7173 29.5763 24.586 28.9739 25.0622ZM39.8315 40.8513C38.6906 40.8513 37.7861 39.8969 37.7861 38.7918C37.7861 37.657 38.7107 36.7324 39.8315 36.7324C40.9662 36.7324 41.8909 37.657 41.8909 38.7918C41.8909 39.9166 40.9683 40.8513 39.8315 40.8513ZM37.618 27.0236H40.2798C40.6021 27.0236 40.8962 27.2337 41.0083 27.542L41.8629 30.0497C42.031 30.5541 41.6667 31.0724 41.1344 31.0724H37.618C37.1976 31.0724 36.8474 30.7222 36.8474 30.3019V27.7942C36.8474 27.3739 37.1976 27.0236 37.618 27.0236Z"
                                                                fill="#AE1C9A"></path>
                                                        </svg>
                                                      </span>
                                    </div>

                                    <div class="flex-grow-1 ms-3">
                                        <p class="text-muted mb-1">Total Listing</p>
                                        <h5 class="mb-0">{{$listings->count()}}</h5>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="cart-section">
                                <div class="d-flex justify-content-end mb-3">
                                    <div class="form-btn">
                                        <a href="{{route('user.listing.basic-details')}}"
                                           style="margin: 0;"
                                           class="shop-btn cancel-btn">Add Listing</a>
                                    </div>
                                </div>

                                <nav>
                                    <div class="nav nav-tabs dashboard-tabs" id="nav-tab"
                                         role="tablist">
                                        <button class="nav-link active" id="nav-home-tab"
                                                data-bs-toggle="tab" data-bs-target="#nav-home"
                                                type="button"
                                                role="tab" aria-controls="nav-home"
                                                aria-selected="true">Completed Listings
                                        </button>
                                        <button class="nav-link" id="nav-profile-tab"
                                                data-bs-toggle="tab"
                                                data-bs-target="#nav-profile" type="button" role="tab"
                                                aria-controls="nav-profile" aria-selected="false">
                                            Incomplete
                                            Listings
                                        </button>

                                    </div>
                                </nav>
                                <div class="tab-content" id="nav-tabContent">
                                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                         aria-labelledby="nav-home-tab">
                                        <table id="completedListingsTable"
                                               class="table-striped table-bordered table dashboard-table"
                                               style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Thumbnail</th>
                                                <th>Name</th>
                                                <th>Status</th>
                                                <th>Category</th>
                                                <th>Created At</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            {{-- ... table head ... --}}
                                            <tbody>
                                            {{-- Change from @forelse --}}
                                            @foreach ($completedListings as $listing)
                                                <tr>
                                                    <td>{{ $listing->id }}</td>
                                                    <td>
                                                        @if ($listing->thumbnail)
                                                            <img
                                                                src="{{ Storage::url($listing->thumbnail) }}"
                                                                alt="{{ $listing->name }}"
                                                                height="50">
                                                        @else
                                                            <span class="text-muted">No Image</span>
                                                        @endif
                                                    </td>
                                                    <td>{{ $listing->name }}</td>
                                                    <td>
                                                        @if ($listing->status)
                                                            <span class="badge bg-success">Active</span>
                                                        @else
                                                            <span
                                                                class="badge bg-secondary">Inactive</span>
                                                        @endif
                                                    </td>
                                                    <td>
                                                        {{ $listing->category->name ?? 'N/A' }}
                                                    </td>
                                                    <td>{{ $listing->created_at->format('d M, Y') }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('public.listing-details', $listing) }}"
                                                           class="btn btn-sm btn-success">View</a>
                                                        <a href="{{ route('user.listing.edit', $listing) }}"
                                                           class="btn btn-sm btn-primary">Edit</a>
                                                    </td>
                                                </tr>
                                            @endforeach {{-- Change from @empty --}}
                                            {{-- REMOVE THE @empty BLOCK --}}
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                         aria-labelledby="nav-profile-tab">
                                        <table id="pendingListingsTable"
                                               class="table-striped table-bordered table dashboard-table"
                                               style="width:100%">
                                            <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Name</th>
                                                <th>Pending Step</th>
                                                <th>Last Updated</th>
                                                <th>Actions</th>
                                            </tr>
                                            </thead>
                                            {{-- ... table head ... --}}
                                            <tbody>
                                            {{-- Change from @forelse --}}
                                            @foreach ($pendingListings as $listing)
                                                <tr>
                                                    <td>{{ $listing->id }}</td>
                                                    <td>{{ $listing->name }}</td>
                                                    <td>
                                                                      <span class="badge bg-warning text-dark">Step
                                                                         {{ $listing->listing_step }}</span>
                                                    </td>
                                                    <td>{{ $listing->updated_at->diffForHumans() }}
                                                    </td>
                                                    <td>
                                                        <a href="{{ route('user.listing.resume', $listing) }}"
                                                           class="btn btn-sm btn-primary">
                                                            Continue
                                                        </a>
                                                    </td>
                                                </tr>
                                            @endforeach {{-- Change from @empty --}}
                                            {{-- REMOVE THE @empty BLOCK --}}
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
            $('#completedListingsTable').DataTable({
                "order": [
                    [3, "desc"]
                ],
                // Add this language option
                "language": {
                    "emptyTable": "No completed listings found."
                }
            });
            $('#pendingListingsTable').DataTable({
                "order": [
                    [3, "desc"]
                ],
                // Add this language option
                "language": {
                    "emptyTable": "No pending listings found."
                }
            });
        });
    </script>
@endpush
