@extends ('layouts.default')

@section ('content')
    <p>{{ $address }}</p>
    <p>{{ $post_code }}</p>
    <p>
        @if ($email)
            {{ $email }}
        @else
            Адрес электронной почты не указан
        @endif</p>
    <p>{{ $phone }}</p>
@endsection
