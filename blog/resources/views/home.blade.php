@include('common.header')
<h1>Home page</h1>
<h3>{{ $name }}</h3>

<p>Rangom number print in blade.php file : <br>
    {{ rand() }}
</p>

<p>Array data: {{ $users[1] }}</p>

@if ($name == 'chaman')
    <h2>This is chaman</h2>
@elseif($name == 'sarkar')
    <h2>This is sarkar</h2>
@else
    <h2>Others</h2>
@endif

<h3>Loop data show from controller</h3>
@foreach ($users as $user)
    <p>{{ $user }}</p>
@endforeach

<h3>Normal Loop</h3>
<div>
    @for ($i = 0; $i < 10; $i++)
        <p>{{ $i }}</p>
    @endfor
</div>
