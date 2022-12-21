@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{Route('comics.create')}}" class="btn btn-primary my-3">Add new comic</a>

    <div class="table-responsive-md">
        <table class="table table-striped table-hover table-borderless table-primary align-middle">
            <thead class="table-light">
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Price</th>
                    <th>Sale Date</th>
                    <th>Type</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody class="table-group-divider">
                @forelse($comics as $comic)
                <tr class="table-primary">
                    <td scope="row">{{$comic->id}}</td>
                    <td>{{$comic->title}}</td>
                    <td>{{$comic->price}}</td>
                    <td>{{$comic->sale_date}}</td>
                    <td>{{$comic->type}}</td>
                    <td><img width="80" src="{{$comic->thumb}}" alt="{{$comic->title}}"></td>
                    <td>
                        <a href='{{route("comics.show", $comic->id)}}' class="btn btn-primary view">
                            <i class="fa-solid fa-eye"></i>
                        </a>
                    </td>
                </tr>
                @empty
                <tr class="table-primary">
                    <td scope="row">No comics to show...</td>
                </tr>
                @endforelse

            </tbody>
            <tfoot>

            </tfoot>
        </table>
    </div>
</div>
@endsection