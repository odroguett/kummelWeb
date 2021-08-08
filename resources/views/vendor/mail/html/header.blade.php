<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Kummel')
<h3>Kummel Productos Naturales y Gourmet</h3>
{{-- <img src="img/logo.png" class="logo" alt="Kummel productos naturales y gourmet"> --}}
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
