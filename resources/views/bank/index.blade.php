@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center konteineris">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Trusted clients</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse($clients as $client)
                        <li class="list-group-item">
                            <div class="client-line">
                                <div class="client-info">
                                    {{$client->name}}
                                    {{$client->surname}}
                                </div>
                                <div class="buttons">
                                    <div class="client-funds">
                                        {{$client->funds}}€
                                    </div>
                                    <a href="{{route('clients-show', $client)}}" class="btn btn-info">Show</a>
                                    <a href="{{route('clients-edit', $client)}}" class="btn btn-info">Edit</a>
                                    <a href="{{route('clients-add', $client)}}" class="btn btn-info">Add</a>
                                    <a href="{{route('clients-deduct', $client)}}" class="btn btn-info">Deduct</a>
                                    <form action="{{route('clients-delete', $client)}}" method="post">
                                        <button type="submit" class="btn btn-info">Delete</button>
                                        @csrf
                                        @method('delete')
                                    </form>
                                </div>
                            </div>
                        </li>
                        @empty
                        <li class="list-group-item">
                        <div class="client-line">No clients in the bank</div>
                        </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection