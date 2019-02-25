<h2>Helllo {{ $user->name }}</h2>

<p>plase click on a link below to verify your accont</p>

<a href="{{ route('verification' , ['id' => $user->id]) }}">verification link</a>