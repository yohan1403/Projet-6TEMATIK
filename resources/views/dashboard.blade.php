<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
        <a href="dashboard/create" class="btn btn-primary" style="float:right;margin-top: -30px;">
            Ajouter un véhicule
        </a>
    </x-slot>

    <section class="container">
        <div class="row">



        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
    <table data-toggle="table" data-search="true" data-show-columns="true">
        <thead>
                        <tr>
                            <th>Photo</th>
                            <th>modèle</th>
                            <th>marque</th>
                            <th>puissance</th>
                            <th>année</th>
                            <th>finition</th>
                            <th>description courte</th>
                            <th scope="col" class="py-3 px-6">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($cars as $key => $data)
                        <tr>
                            <td><img src="{{$data->main_photo}}" width="100px"></td>
                            <td>{{$data->model}}</td>
                            <td>{{$data->brand}}</td>
                            <td>{{$data->power}}</td>
                            <td>{{$data->year}}</td>
                            <td>{{$data->finishing}}</td>  
                            <td>{{$data->short_description}}</td>
                            <td class="flex items-center py-4 px-6 space-x-3">
                                 <a href="{{ route('cars.edit',[$data->id]) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Modifier</a>
                                <a href="dashboard/delete/{{$data->id}}" class="font-medium text-red-600 dark:text-red-500 hover:underline">Supprimer</a>
                            </td>
                            <!--<td><a class="btn btn-primary" href="{{ route('cars.edit',[$data->id]) }}" role="button">Modifier</a></td>
                            <td><a class="btn btn-danger" href="dashboard/delete/{{$data->id}}" role="button">Supprimer</a></td>-->
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>

<link href="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.css" rel="stylesheet">
<script src="https://unpkg.com/bootstrap-table@1.20.2/dist/bootstrap-table.min.js"></script>