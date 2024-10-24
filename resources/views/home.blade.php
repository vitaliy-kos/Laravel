@extends ('layouts.default')

@section ('content')
    <p>{{ $name }}</p>
    <p>
        @if ($age > 18)
            {{ $age }}
        @else
            Человек слишком молод
        @endif
    </p>
    <p>{{ $position }}</p>
    <p>{{ $address }}</p>
@endsection
