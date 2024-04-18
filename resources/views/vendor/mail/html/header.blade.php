@props(['url'])
<tr>
<td class="header">
<a href="{{ $url }}" style="display: inline-block;">
@if (trim($slot) === 'Laravel')
<img src="img/iguru-long.png" class="logo" alt="iguruweb">
@else
{{ $slot }}
@endif
</a>
</td>
</tr>
