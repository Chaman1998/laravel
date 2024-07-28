<div>
    <h3>File Upload page</h3>
    <form action="fileupload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file">
        <button>Upload</button>
    </form>
    @if (isset($path))
        <img src="{{ URL('storage/' . $path) }}" alt="" style="width:40px;height:30px">
    @endif
</div>
