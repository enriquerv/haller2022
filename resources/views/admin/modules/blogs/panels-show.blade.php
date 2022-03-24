<div id="tab1" class="tab-pane fade active in">
    <div class="row">
        <div class="col-lg-12">
            <div class="panel">
                <div class="panel-body">
                    <div class="col-md-12">
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <tr>
                                        <th>
                                            Título
                                        </th>
                                        <td>
                                            {{ $item->title }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            Descripción
                                        </th>
                                        <td>
                                            {{ $item->description }}
                                        </td>
                                    </tr>

                                     <tr>
                                        <th>
                                            Escrito por
                                        </th>
                                        <td>
                                            {{ $item->written_by }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            Activo
                                        </th>
                                        <td>
                                            {{ $item->available == 1 ? 'SI' : 'NO' }}
                                        </td>
                                    </tr>

                                    <tr>
                                        <th>
                                            Portada
                                        </th>
                                        <td>
                                            <img src="{{ env('APP_URL') }}/uploads/blogs/{{ $item->image_1 }}" class="w-100">
                                        </td>
                                    </tr>

                                     <tr>
                                        <th>
                                            Card
                                        </th>
                                        <td>
                                            <img src="{{ env('APP_URL') }}/uploads/blogs/{{ $item->image_2 }}" class="w-100">
                                        </td>
                                    </tr>



                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>