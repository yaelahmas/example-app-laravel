<x-app-layout>
    <x-slot name="title">Users</x-slot>

    <div class="container mt-4">
        <h1>{{ __('Users') }}</h1>
        <x-alert />

        <x-card>
            <x-card.title>
                <div class="d-flex justify-content-between align-items-center">
                    <h2 class="h5 mb-0">{{ __('User List') }}</h2>
                    <a href="{{ route('users.create') }}" class="btn btn-primary">
                        {{ __('Create User') }}
                    </a>
                </div>
            </x-card.title>

            <x-card.body>
                <table id="table-users" class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Username</th>
                            <th scope="col">Email</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-sm btn-warning">
                                        {{ __('Edit') }}
                                    </a>

                                    <x-button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                        data-target="#deleteUserModal{{ $user->id }}">
                                        {{ __('Delete') }}
                                    </x-button>

                                    <x-modal id="deleteUserModal{{ $user->id }}"
                                        label="deleteUserModal{{ $user->id }}Label">
                                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                            @csrf
                                            @method('delete')

                                            <x-modal.header title="{{ __('Confirm Delete User') }}"
                                                label="deleteUserModal{{ $user->id }}Label" />

                                            <x-modal.body>
                                                <p>{{ __('Are you sure you want to delete user') }}
                                                    <strong>{{ $user->name }}</strong>?
                                                </p>
                                            </x-modal.body>

                                            <x-modal.footer>
                                                <x-button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    {{ __('Cancel') }}
                                                </x-button>

                                                <x-button type="submit" class="btn btn-danger">
                                                    {{ __('Delete') }}
                                                </x-button>
                                            </x-modal.footer>
                                        </form>
                                    </x-modal>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card.body>
        </x-card>
    </div>

    @push('styles')
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap4.min.css">
    @endpush

    @push('scripts')
        <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
        <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap4.min.js"></script>
        <script>
            $(document).ready(function() {
                $('#table-users').DataTable({
                    order: [
                        [0, 'asc']
                    ],
                    columnDefs: [{
                        orderable: false,
                        targets: [4]
                    }],
                    responsive: true,
                    language: {
                        search: "_INPUT_",
                        searchPlaceholder: "Search users..."
                    }
                });
            });
        </script>
    @endpush
</x-app-layout>
