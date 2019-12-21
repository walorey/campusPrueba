                    <div class="card-header">Material didactico</div>

                     <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <div class="list-group">
                          <a href="#" class="list-group-item list-group-item-action active">
                            Crases justo odio
                          </a>
                          <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
                          <a href="#" class="list-group-item list-group-item-action">Morbi leo risus</a>
                          <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
                          <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">Vestibulum at eros</a>
                        </div>
                    </div>