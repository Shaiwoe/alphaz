<pre>
@foreach($coins as $coin)

{{ $coin->name }}
{{ $coin->quote->USD->price }}
{{ print_r($coin->quote) }}

@endforeach
