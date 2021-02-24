@props(['module' => $module])


<div class="mb-4">
    <a href="{{ route('users.modules', $module->user) }}" class="font-bold">{{ $module->user->username }}</a> <span class="text-gray-600
   text-sm">{{$module->created_at->diffForHumans()}}</span>

    <p class="mb-2">{{ $module->title }}</p>
    <p class="mb-2">{{ $module->category }}</p>
    <p class="mb-2">{{ $module->body }}</p>





    @can('delete', $module)
        <form action="{{ route('modules.destroy', $module) }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">Delete</button>
        </form>
    @endcan






</div>
