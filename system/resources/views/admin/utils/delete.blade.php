<form action="{{$url}}" method="post" onsubmit="return confirm('Apakah Anda Yakin Menghapus Data?!')">
    @csrf
    @method("delete")
    <button class="btn btn-danger btn-sm"><i class="fa fa-trash"></i></button>
</form>