 @props(['titulo', 'type', 'nombre'])

<div class="my-2">
<label for="">{{ $titulo }}</label>
<input type={{ $type }} name={{ $nombre }} class="border border-black rounded-lg px-3 py">
@error('$nombre')
 <p>{{ $message }}</p>
@enderror
</div>
