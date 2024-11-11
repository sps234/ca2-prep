<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <form action= "/upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" >
        <button type="submit">Upload</button>
    </form>

</div>
