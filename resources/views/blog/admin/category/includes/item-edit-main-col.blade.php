<div class="row justify-content-center">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <div class="card-title"></div>
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                        <a href="#maindata" class="nav-link active" data-toggle="tab" role="tab">Основные данные</a>
                    </li>
                </ul>
                <br>
                <div class="tab-content">
                    <div class="tab-pane active" id="maindata" role="tab-panel">
                        <div class="form-group">
                            <label for="title">Заголовок</label>
                            <input id="title"
                                class="form-control"
                                type="text"
                                name="title"
                                value="{{$item->title}}"
                                minlength="3"
                                required
                            >
                        </div>
                        <div class="form-group">
                            <label for="slug">Слаг</label>
                            <input id="slug"
                                class="form-control"
                                type="text"
                                name="slug"
                                value="{{$item->slug}}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="parent_id">Родитель</label>
                            <select name="parent_id"
                                id="parent_id"
                                class="form-control"
                                placeholder="Выберите категорию"
                                required
                            >
                                @foreach ($categoryList as $item)
                                    <option value="{{ $item->id }}"
                                        @if ($item->parent_id == $item->id) selected @endif
                                    >{{ $item->id }}. {{ $item->title }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="description">Описание</label>
                            <textarea name="description"
                                id="description"
                                rows="3"
                                class="form-control"
                            >{{ $item->description }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
