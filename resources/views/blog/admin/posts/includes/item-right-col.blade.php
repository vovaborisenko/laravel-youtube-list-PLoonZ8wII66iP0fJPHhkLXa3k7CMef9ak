<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <button class="btn btn-primary" type="submit">Сохранить</button>
            </div>
        </div>
    </div>
</div>
@if ($item->exists)
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <ul class="list-unstyled">
                        <li>ID: {{ $item->id }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label>Создано</label>
                        <input class="form-control" type="text" value="{{ $item->created_at }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Изменено</label>
                        <input class="form-control" type="text" value="{{ $item->updated_at }}" disabled>
                    </div>
                    <div class="form-group">
                        <label>Опубликовано</label>
                        <input class="form-control" type="text" value="{{ $item->published_at }}" disabled>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
