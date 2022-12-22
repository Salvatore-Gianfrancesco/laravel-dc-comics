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
                    <td class="d-flex flex-column gap-2">
                        <!-- Show button -->
                        <a href='{{Route("comics.show", $comic->id)}}' class="btn btn-primary">
                            <i class="fa-solid fa-eye"></i>
                        </a>

                        <!-- Edit & Update button -->
                        <a href='{{Route("comics.edit", $comic->id)}}' class="btn btn-secondary">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </a>

                        <!-- Modal trigger button -->
                        <button type="button" class="btn btn-danger w-100" data-bs-toggle="modal" data-bs-target="#deleteComicId-{{$comic->id}}">
                            Delete
                        </button>

                        <!-- Modal Body -->
                        <!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
                        <div class="modal fade" id="deleteComicId-{{$comic->id}}" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalId-{{$comic->id}}" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-sm" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="modalId-{{$comic->id}}">Delete comic?</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure you want to delete permanently the record? The action is irreversible.
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                        <form action="{{Route('comics.destroy', $comic->id)}}" method="post">
                                            @csrf
                                            @method('delete')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
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