

<div class="alert alert-warning" role="alert">
    You have an existing session in progress and does not allow new sessions.
</div>

<form action="{{ route('logout') }}" method="POST">
    @csrf
    <button type="submit" class="btn btn-primary">Logout</button>
</form>
