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
                            <input id='{{"qtd".$loop->index}}' type='number' maxlenght='4' onchange='myFunction()'></input>
                        </td>
                        <td>
                            <label id='{{"label".$loop->index}}'></label>
                        </td>
                    </tr>
                    <script>
                        function myFunction() {
                            var qtd = document.getElementById({{'qtd'.$loop->index}}).value;
                            var priceId = document.getElementById({{'label'.$loop->index}});
                            var valor =  {{ $info['quote']['USD']['price'] }};
                            
                            var mult = qtd * valor;

                            priceId.innerHTML(mult);
                        }
                    </script>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
