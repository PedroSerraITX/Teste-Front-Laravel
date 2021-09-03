@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12">
            @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
            @endif
            <table class="table table-dark table-striped">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Symbol</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">Quantity</th>
                        <th scope="col">Calculated value</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($infos as $info)
                    <tr>
                        <td>{{ $info['id'] }}</td>
                        <td>{{ $info['symbol'] }}</td>
                        <td>{{ $info['name'] }}</td>
                        <td><label>{{ $info['quote']['USD']['price'] }}</label></td>
                        <td><input type="number" name="quant[]" class="form-control prc " min="1" max="10" step="1"></td>
                        <td><input type="text" name="total[]" class="form-control" value="0"></td>
                        <td><input type="hidden" name="preco[]" value="{{ $info['quote']['USD']['price'] }}" /></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection
