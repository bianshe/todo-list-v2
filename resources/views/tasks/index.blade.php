
@extends('layouts.app') 


@section('content')
    <div class="container card-container">
        <div class="card custom-card add-task">
        
        @include('common.errors')
            
            <h5 class="card-title">Добавить задание:</h5>
            <div class="card-body">      
                <form action="{{ url('task')}}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <input type="text" name="name" id="" placeholder="Новая задача">
                    <button class="btn btn-primary" type="submit">
                        <i class="bi bi-plus-lg"></i>
                    </button>
                </form>
            </div>
        </div>


        @if(count($tasks) > 0)
            <div class="card custom-card">
                <h5 class="card-title text-center">Мои Задачи</h5>
                <div class="card-body">
                    <table class="table">
                        <tbody>
                            @foreach ($tasks as $task)
                                <tr>
                                    <td>{{$task->name}}</td>
                                    <td>
                                        <form action="{{ url("task/".$task->id) }}" method="post">
                                            {{ csrf_field() }}
                                            {{ method_field('DELETE') }}
                                            <button class="btn btn-danger" type="submit" id="delete-task-{{ $task->id }}">
                                                <i class="bi bi-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach   
                        </tbody>
                    </table>  
                </div>
            </div>
        @endif       
    </div>
@endsection