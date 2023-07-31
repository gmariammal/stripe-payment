@extends('layouts.app')
  
@section('content')
{!! grid([
    'dataProvider' => $dataProvider, // see info about DataProviders
    'rowsPerPage' => 20,
    'showFilters' => false,
    'columns' => [
        'name',
        'price',
        'description',
        [
            'class' => 'actions',
            'value' => [
                new \Woo\GridView\Columns\Actions\Action('/products/{id}', '<button type="button" class="btn btn-primary">Buy Now</button>'),
        ]
        ] ],
]) !!}
@endsection