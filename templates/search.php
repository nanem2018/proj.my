<div class="row">
    <form class="form-group m-3  col-6 search-form" method="get">
        <label for="search">Для осуществления поиска введите Ваш запрос и при необходимости отметьте дополнительные параметры:</label>
        <input name="search" class="search-input mb-3 form-control ds-input" placeholder="<?= isSearch()?$_GET['search']:'Введите Ваш запрос' ?>">
        <details class="">
            <summary>Расширенные настройки поиска</summary>
            <div class="p-2">
                <label for="searchBy[]" class="mt-3">По каким полям искать:</label>
                <select name="searchBy[]" class="mb-3 custom-select" size="3" multiple>
                    <option value="good_id">ID товара</option>
                    <option value="good_name">Название товара</option>
                    <option value="good_description">Описание</option>
                </select>

                <hr>

                <label>Сотртировать по:</label>
                <select name="sort" class="mb-3 form-control">
                    <option value="1">Стоимости</option>
                    <option value="2">В алфавитном порядке</option>
                    <option value="3">Уникальному идентификатору</option>
                </select>

                <div class="mb-3">
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio1" name="radioOrder" class="custom-control-input" value="up" checked>
                        <label class="custom-control-label" for="customRadio1">По возрастанию</label>
                    </div>
                    <div class="custom-control custom-radio">
                        <input type="radio" id="customRadio2" name="radioOrder" class="custom-control-input"
                               value="down">
                        <label class="custom-control-label" for="customRadio2">По убыванию</label>
                    </div>
                </div>

                <hr>

                <div class="form-group">
                    <label for="name" class=" control-label">Диапазон цены товара</label>
                    <div class="col-sm-6">
                        Минимальная стоимость: <input  class="form-control col-5" name="priceMin" id="priceMin">
                        Максимальная стоимость: <input  class="form-control" name="priceMax" id="priceMax">
                        <div  id="slider-range"></div>
                    </div>
                </div>

                <hr>

                <div class="mb-3 custom-control custom-checkbox">
                    <input name="isActive" type="checkbox" class="custom-control-input" id="customCheck1">
                    <label class="custom-control-label" for="customCheck1">Показать только товар в наличии</label>
                </div>

            </div>
        </details>
        <br>
        <button type="submit" class="btn btn-primary">Искать!</button>
    </form>

</div>

