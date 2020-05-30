<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="modal_controller.php" method="post">

                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Добавить новый товар</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>


                <div class="modal-body">
                    <div class="p-2">
                        <input name="add_name" class="mb-3 form-control ds-input" placeholder="Введите название товара">
                        <input name="add_desc" class="mb-3 form-control ds-input" placeholder="Введите описание товара">
                        <input name="add_price" class="mb-3 form-control ds-input" placeholder="Введите название цену">

                        <div class="mb-3 custom-control custom-checkbox">
                            <input name="add_isActive" type="checkbox" class="custom-control-input" id="customCheck2"
                                   checked>
                            <label class="custom-control-label" for="customCheck2">Товар в наличии</label>
                        </div>
                    </div>
                </div>


                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Вернуться</button>
                    <button type="submit" class="btn btn-primary">Добавить товар</button>
                </div>
            </form>


        </div>
    </div>
</div>