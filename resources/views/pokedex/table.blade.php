<div class="card shadow">
    <div class="card-header bg-dark text-white">
        รายการ Pokémon
    </div>

    <div class="card-body p-0">
        <table class="table table-striped table-hover mb-0 text-center">
            <thead class="table-secondary">
                <tr>
                    <th>ID</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Type</th>
                    <th>HP</th>
                    <th>ATK</th>
                    <th>DEF</th>
                    <th>Tools</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pokedexs as $pokedex)
                <tr>
                    <td>{{ $pokedex->id }}</td>
                    <td>
                        <img src="{{ $pokedex->image_url }}" width="60">
                    </td>
                    <td>{{ $pokedex->name }}</td>
                    <td>
                        <span class="badge bg-info">
                            {{ $pokedex->type }}
                        </span>
                    </td>
                    <td>{{ $pokedex->hp }}</td>
                    <td>{{ $pokedex->attack }}</td>
                    <td>{{ $pokedex->defense }}</td>
                    <td>
                        <a class="btn btn-warning btn-sm mb-1"
                           href="/pokedex/{{ $pokedex->id }}">
                           ✏️
                        </a>
                        <form action="/pokedex/{{ $pokedex->id }}"
                              method="post"
                              style="display:inline;">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">
                                🗑️
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
