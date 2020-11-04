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
                                value="{{ old('title', $item->title) }}"
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
                                value="{{ old('slug', $item->slug) }}"
                            >
                        </div>
                        <div class="form-group">
                            <label for="category_id">Категория</label>
                            <select name="category_id"
                                id="category_id"
                                class="form-control"
                                placeholder="Выберите категорию"
                                required
                            >
                                @foreach ($categoryList as $option)
                                    <option value="{{ $option->id }}"
                                        @if ( old('category_id', $item->category_id) == $option->id) selected @endif
                                    >{{ $option->option_label }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="context_raw">Описание</label>
                            <textarea name="context_raw"
                                id="context_raw"
                                rows="10"
                                class="form-control"
                            >{{ old('context_raw', $item->context_raw) }}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
