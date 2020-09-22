@extends('layouts.master')

@section('content')
    <section class="col-md-6 mx-auto text-center" style="min-height: 400px">
        @forelse($tasks as $task)
            <li>{{ $task->name }}</li>
            <div class="d-flex justify-content-center">
                <a class="btn btn-success mx-3 px-3" href="{{route('edit',['task' => $task->id])}}">Edit</a>
                <form method="post" action="{{route('destroy')}}">
                    @csrf
                    @method('delete')
                    <input type="hidden" name="id" value="{{$task->id}}">
                    <button class="btn btn-danger">Delete</button>
                </form>
            </div>

        @empty
            <li>No available task</li>
        @endforelse
        <div class="mt-5">
            {{$tasks->links()}}
        </div>

        <aside class="mt-5">
            <a class="btn btn-primary" href="{{route('create')}}">Add Task</a>
        </aside>

        <list></list>

    </section>
@endsection

@section('extra-scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/vue/2.5.2/vue.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sortablejs@1.8.4/Sortable.min.js"></script>
@endsection