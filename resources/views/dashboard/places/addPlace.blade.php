@extends('layouts.master')

@section('content')

    <div class="row justify-content-center m-3">
        <div class="col-md-6">
            <div class="card zain-light-bg">
                @include('layouts.errors')
                <div class="card-header">
                    <h3 class="text-dark mb-0">Adding a place</h3>
                </div>
                <div class="card-body">
                    <form action='/dashboard/places/add/{{$owner->id}}' method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-10">

                                <div class="form-group">
                                    <input name="owner_id" type="hidden" class="form-control hidden"
                                           value="{{$owner->id}}">
                                </div>

                                <div class="form-group">
                                    <input name="place_name" type="text" class="form-control text-dark"
                                           placeholder="Place name">
                                </div>

                                <div id="type" class="form-group">
                                    <select name="type" class="form-control text-dark">
                                        <option v-for="type in types">@{{type.type}}</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <div class="custom-file">
                                        <input name="image" type="file" class="custom-file-input"
                                               id="validatedCustomFile">
                                        <label class="custom-file-label text-dark">Choose file...</label>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <input name="location" type="text" class="form-control text-dark"
                                           placeholder="Location">
                                </div>

                                <div class="form-group">
                                    <div class="row align-items-center">
                                        <div class="col-md-6">
                                            <input name="hall_name" type="text" class="form-control text-dark"
                                                   placeholder="Hall name">
                                        </div>
                                        <div class="col-md-6">
                                            <input name="hall_max" type="number" class="form-control text-dark"
                                                   placeholder="Max people number">
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                    <textarea name="description" type="text" class="form-control text-dark"
                              placeholder="Add place description and offerings..."></textarea>
                                </div>

                                <div class="form-group">
                                    <small>price from low to high</small>

                                    <div class="row align-items-center mt-2">
                                        <div class="col">
                                            <input name="low_price" type="number" class="form-control text-dark"
                                                   placeholder="Low price">
                                        </div>
                                        -
                                        <div class="col">
                                            <input name="high_price" type="number" class="form-control text-dark"
                                                   placeholder="High price">
                                        </div>
                                    </div>
                                </div>

                                <div class="row justify-content-end">
                                    <div class="col-auto">
                                        <button type="submit" class="btn btn-default btn-sm btn-simple">Add</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <script>
        let vue = new Vue({
            el: "#type",
            data: {
                types: [],
            },
            methods: {
                getTypes() {
                    axios.get('/api/types').then(response => {
                        this.types = response.data.types
                    })
                }
            },
            mounted() {
                this.getTypes()
            }
        })
    </script>

@endpush