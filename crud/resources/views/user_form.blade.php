<div class="add-user__form-wrapper">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form name="add-new-user" id="add-new-user" method="post" action="{{ url('store-user') }}">
        @csrf
        <div class="form-section">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" required>
        </div>
        <div class="form-section">
            <label for="surname">Surname</label>
            <input type="text" id="surname" name="surname" class="form-control" required>
        </div>
        <div class="form-section">
            <label for="email">E-mail</label>
            <input type="text" id="email" name="email" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary"> Submit</button>
    </form>
</div>
