@extends('layouts.app')

@section('content')
@php
$gridData = [
    'dataProvider' => $dataProvider,
    'title' => 'Panel title',
    'useFilters' => false,
    'columnFields' => [
        'name',
        'price',
        'description',
        [
            'label' => 'Actions',
            'class' => Itstructure\GridView\Columns\ActionColumn::class, 
            'actionTypes' => [
                'view' => function ($data) {
                    return '/products/' . $data->id;
                },
            ],
            
        ]
       
    ]
];
@endphp
@gridView($gridData)
@endsection