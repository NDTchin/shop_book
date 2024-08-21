@extends('admin.main')

@section('content')
    <form method="GET" action="{{ route('search') }}">
        <div>
            <label for="id">ID:</label>
            <input type="text" id="id" name="id" placeholder="Enter ID">
        </div>
        <div>
            <label for="start_date">Start date:</label>
            <input type="date" id="start_date" name="start_date">
        </div>
        <div>
            <label for="end_date">End date:</label>
            <input type="date" id="end_date" name="end_date">
        </div>
        <div>
            <label for="active">Status:</label>
            <select id="active" name="active">
                <option value="">Active</option>
                <option value="1">Yes</option>
                <option value="0">No</option>
            </select>
        </div>
        <button type="submit">Filter</button>
    </form>
    <table class="table">
        <thead>
        <tr>
            <th style="width: 50px">ID</th>
            <th>Name</th>
            <th>Description</th>
            <th>Category</th>
            <th>Publish At</th>
            <th>Image</th>
            <th>Amount</th>
            <th>Price</th>
            <th>Created At</th>
            <th>Updated At</th>
            <th>Active</th>
            <th>Update</th>
        </tr>

        @foreach($list as $lists)
            <tr>
                <th>{{$lists->id}}</th>
                <th>{{$lists->name}}</th>
                <th>{{$lists->description}}</th>
                <th>{{$lists->category}}</th>
                <th>{{$lists->publish_at}}</th>
                <th><img class="img-thumbnail" style="width: 100px" src="{{$lists->image}}" alt=""></th>
                <th>{{$lists->amount}}</th>
                <th>{{$lists->price}}</th>
                <th>{{$lists->created_at}}</th>
                <th>{{$lists->updated_at}}</th>
                <th>
                    @if($lists->status== 1)
                        <span class="badge badge-success">YES</span>
                    @else
                        <span class="badge badge-danger">NO</span>
                    @endif</th>
                <td>
                    <a class="btn btn-primary btn-sm" href="/admin/menus/edit/{{$lists->id}}">
                        <i class="fas fa-edit"></i>
                    </a>
                    <a  class="btn btn-danger btn-sm" href="/admin/menus/destroy/{{$lists->id}}">
                        <i class="fas fa-trash"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </thead>
        <tbody>
        </tbody>
    </table>
    @include('pagination.default', ['paginator' => $list])
@endsection
