@foreach($pokemon as $entity)
    <div>
        <h3>{{ $entity->name }}</h3>
        <p>{{ $entity->type }}</p>
        <p>{{ $entity->power }}</p>
        <a href="{{ url('pokemon/'.$entity->id.'/edit') }}">Edit</a>
        <form action="{{ url('pokemon/'.$entity->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit">Delete</button>
        </form>
    </div>
@endforeach