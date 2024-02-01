<h1>Hello Admin</h1>
@if(auth()->user()->hasRole('admin'))
    <form method="POST" action="{{ route('admin.logout') }}">
        @csrf
        <button type="submit">Logout</button>
    </form>
@endif
