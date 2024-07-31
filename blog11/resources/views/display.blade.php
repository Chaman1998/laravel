<div>
    <h3>List of All Images</h3>
{{-- {{print_r $imgData}} --}}
    @foreach ($imgData as $img)
        <img src="{{url('storage/'.$img->path)}}" alt=""
        style="width: 200px; margin:5px;">
    @endforeach
</div>
