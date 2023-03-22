@extends('layouts.app')

@section('title', 'Главная')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
{{--                <div class="container-fluid d-flex justify-content-between p-0">--}}


{{--                    @isset($tagList)--}}
{{--                        <div class="dropdown d-flex mb-3">--}}
{{--                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton1"--}}
{{--                                    data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="true">--}}
{{--                                Теги--}}
{{--                            </button>--}}
{{--                            <div class="dropdown-menu">--}}
{{--                                <div class="list-group list-group-flush">--}}
{{--                                    @foreach ($tagList as $tag)--}}
{{--                                        <label class="list-group-item">--}}
{{--                                            <input class="form-check-input me-1" type="checkbox" value="{{$tag->id}}" name="tagsFilter">--}}
{{--                                            {{$tag->name}}--}}
{{--                                        </label>--}}
{{--                                    @endforeach--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    @endisset--}}

{{--                    <div class="d-flex mb-3 ">--}}
{{--                        <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Search" name="searchField">--}}
{{--                        <button class="btn btn-outline-success" type="submit" name="searchBtn">Искать</button>--}}
{{--                    </div>--}}
{{--                </div>--}}


                @if (session('danger'))
                    <div class="alert alert-danger">
                        {{ session('danger') }}
                    </div>
                @endif
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="list-group" id="taskList" role="tablist">
{{--                    @include('task-list')--}}

                    <form method="POST" action="/" class="needs-validation" novalidate >
                        @csrf
                        <div class="mb-3">
                            <label for="inputName" class="form-label" >Name</label>
                            <input type="text" name="name" class="form-control" id="inputName" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputEmail" class="form-label">Email</label>
                            <input type="email" name="email" class="form-control" id="inputEmail" aria-describedby="emailHelp" required>
                        </div>
                        <div class="mb-3">
                            <label for="inputMessage" class="form-label">Message</label>
                            <textarea class="form-control" required name="message" id="inputMessage"></textarea>
                        </div>
{{--                            <div class="mb-3">--}}
{{--                                <label for="exampleInputPassword1" class="form-label">Password</label>--}}
{{--                                <input type="password" class="form-control" id="exampleInputPassword1">--}}
{{--                            </div>--}}
{{--                            <div class="mb-3 form-check">--}}
{{--                                <input type="checkbox" class="form-check-input" id="exampleCheck1">--}}
{{--                                <label class="form-check-label" for="exampleCheck1">Check me out</label>--}}
{{--                            </div>--}}
                        <div class="container-fluid d-flex justify-content-end p-0 mt-3">
                            <button type="submit" class="btn btn-outline-success">Send</button>
                        </div>


                    </form>

                </div>


{{--                <div class="container-fluid d-flex justify-content-end p-0 mt-3">--}}
{{--                    <button class="btn btn-outline-primary me-2" name="editTask" disabled>Изменить</button>--}}
{{--                    <button class="btn btn-outline-danger me-2" name="deleteTask" disabled>Удалить</button>--}}
{{--                    <a class="btn btn-outline-success" href="{{ url('/edit') }}">Добавить</a>--}}

{{--                </div>--}}

            </div>
        </div>
    </div>
@endsection
