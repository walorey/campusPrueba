	@if ($errors->any())
    <div class="alert alert-danger fade show">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		</button>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
	@endif
	@if (session('verde'))
    <div class="alert alert-success fade show">
    	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		    <span aria-hidden="true">&times;</span>
		</button>
        <ul>
			{{session('verde')}}
        </ul>
    </div>
	@endif
    @if (session('rojo'))
    <div class="alert alert-danger fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            {{session('rojo')}}
        </ul>
    </div>
    @endif
    @if (session('amarillo'))
    <div class="alert alert-warning fade show">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <ul>
            {{session('amarillo')}}
        </ul>
    </div>
    @endif