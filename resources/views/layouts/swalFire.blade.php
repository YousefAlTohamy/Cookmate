{{-- display alert when logged in --}}
@if (session('login-success'))
    <script>
        Swal.fire({
            title: 'Hello!',
            text: '{{ session('login-success') }}',
            icon: 'success',
            confirmButtonText: 'Close'
        });
    </script>
@endif

{{-- display alert when recipe created --}}
@if (session('create-rec-success'))
    <script>
        Swal.fire({
            title: 'Done!',
            text: '{{ session('create-rec-success') }}',
            icon: 'success',
            confirmButtonText: 'Close'
        });
    </script>
@endif

{{-- display alert when recipe edit failed --}}
@if (session('show-error'))
    <script>
        Swal.fire({
            title: 'Failed!',
            text: '{{ session('show-error') }}',
            icon: 'error',
            confirmButtonText: 'Close'
        });
    </script>
@endif

{{-- display alert when recipe updated --}}
@if (session('update-rec-success'))
    <script>
        Swal.fire({
            title: 'Done!',
            text: '{{ session('update-rec-success') }}',
            icon: 'success',
            confirmButtonText: 'Close'
        });
    </script>
@endif

{{-- display alert when recipe deleted --}}
@if (session('del-rec-success'))
    <script>
        Swal.fire({
            title: 'Done!',
            text: '{{ session('del-rec-success') }}',
            icon: 'success',
            confirmButtonText: 'Close'
        });
    </script>
@endif

{{-- display alert when recipe deletion failed --}}
@if (session('delete-error'))
    <script>
        Swal.fire({
            title: 'Failed!',
            text: '{{ session('delete-error') }}',
            icon: 'error',
            confirmButtonText: 'Close'
        });
    </script>
@endif

{{-- display alert when account created --}}
@if (session('add-admin-success'))
    <script>
        Swal.fire({
            title: 'Done!',
            text: '{{ session('add-admin-success') }}',
            icon: 'success',
            confirmButtonText: 'Close'
        });
    </script>
@endif


<script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to recover this recipe",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#537d5d',
            confirmButtonText: 'Yes, delete it'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`delete-form-${id}`).submit();
            }
        });
    }
</script>

<script>
    function confirmLogout() {
        Swal.fire({
            title: 'Confirm Logout',
            text: "Are you sure you want to log out?",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#d33',
            cancelButtonColor: '#537d5d',
            confirmButtonText: 'Log out',
            cancelButtonText: 'Stay'
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById(`logout-form`).submit();
            }
        });
    }
</script>
