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
                        <th scope="col">Quantity</th>
                        <th scope="col">Price</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($infos as $info)
                    <tr>
                        <td>{{ $info['id'] }}</td>
                        <td>{{ $info['symbol'] }}</td>
                        <td>{{ $info['name'] }}</td>
                        <td>
                            @php 
                                $id = "qtd".$loop->index; 
                                echo "<input id=".$id." type='number' maxlenght='4'></input>";
                            @endphp
                        </td>
                        <td>
                            @php $value = $_GET['qtd'.$loop->index];
                                $price = $info['quote']['USD']['price'];
                                $sum = $value * $price;
                                echo $sum; 
                            @endphp
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
