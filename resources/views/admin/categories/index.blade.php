<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list danh muc</title>
</head>
<body>
    <a href="{{ route('categories.create') }}">them</a>

    @if (session('msg'))
        <h2>{{ session('msg') }}</h2>
    @endif

    <table id="example"
        class="table table-bordered dt-responsive nowrap table-striped align-middle"
        style="width:100%">

    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            {{-- <th>Parent</th> --}}
            <th>Created at</th>
            <th>Updated at</th>
            <th>Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                {{-- <td>{{ $item->parent?->name }}</td> --}}
                <td>{{ $item->created_at }}</td>
                <td>{{ $item->updated_at }}</td>
                <td>
                    <a href="{{ route('categories.show', $item->id) }}" class="btn btn-info mb-3">Xem</a>
                    <a href="{{ route('categories.edit', $item->id) }}"
                        class="btn btn-warning mb-3">Sửa</a>

                    <a href="{{ route('categories.destroy', $item->id) }}"
                        onclick="return confirm('Chắc chắn chưa?')"
                        class="btn btn-danger mb-3">Xóa</a>
                </td>
            </tr>
        @endforeach
    </tbody>

</table>
</body>
</html>