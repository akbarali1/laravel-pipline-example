@extends('app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-10">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title justify-content-center"><i class="bx bxs-spreadsheet"></i> Список товаров</h5>
                        <!-- Table with hoverable rows -->
                        <div class="table-responsive">
                            <table class="table table-hover table-striped table-sm">
                                <thead>
                                <tr>
                                    <th scope="col" class="align-middle" style="font-size: 14px;"></th>
                                    <th scope="col" class="align-middle" style="font-size: 14px;">Наименование</th>
                                    <th scope="col" class="align-middle" style="font-size: 14px;">Модель</th>
                                    <th scope="col" class="align-middle" style="font-size: 14px;">Поставщик</th>
                                    <th scope="col" class="align-middle" style="font-size: 14px;">Стоимость</th>
                                    <th scope="col" class="align-middle" style="font-size: 10px;">Количество</th>
                                    <th scope="col" class="align-middle" style="font-size: 14px;">Статус</th>
                                    <th scope="col" class="align-middle" style="font-size: 14px;">Время создания</th>
                                    <th scope="col" style="font-size: 10px;">Действие</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr class="align-middle">
                                    <td style="font-size: 14px;">
                                        <a href="/storage/photos/all_users/a22s%20Black.png" target="_blank">
                                            <img src="/storage/photos/all_users/a22s%20Black.png" class="img-thumbnail" style="width: 45px;display: block;margin-left: auto;margin-right: auto;">
                                        </a>
                                    </td>
                                    <td style="font-size: 14px;">Смартфон Samsung Galaxy A22s 4/64 Black</td>
                                    <td style="font-size: 14px;">Samsung Galaxy A22s 4/64 Black</td>
                                    <td style="font-size: 14px;">
                                        SIRDARYO PREMIUM ALOQA (MEGAImkon 32%)
                                    </td>
                                    <td class="text-center" style="font-size: 14px;">
                                        2590000
                                    </td>
                                    <td class="text-center" style="font-size: 14px;">
                                        10
                                    </td>
                                    <td style="font-size: 14px;">
                                        Включено
                                    </td>
                                    <td style="font-size: 14px;">
                                        2022-04-27 16:21:06
                                    </td>
                                    <td style="font-size: 14px;width: 65px;" class="float-right">
                                        <a href="https://megaimkon.uzwebline.com/_management/product/edit/73" class="btn btn-primary btn-sm" style="padding: 2px 5px;"><i class="bi bi-pencil"></i></a>
                                        <a href="https://megaimkon.uzwebline.com/_management/product/copy/73" class="btn btn-success btn-sm" style="padding: 2px 5px;">
                                            <i class="bx bx-copy"></i>
                                        </a>
                                        <a href="https://megaimkon.uzwebline.com/_management/product-logs?product_id=73" class="btn btn-outline-info btn-sm" target="_blank" style="padding: 0px 2px; width: 25px; height: 25px;">
                                            <img src="https://www.svgrepo.com/show/108787/log-file-format.svg" alt="" style="width: 21px; height: 21px;">
                                        </a>
                                        <a href="https://megaimkon.uzwebline.com/_management/product/delete/73" class="btn btn-danger btn-sm" onclick="return confirm('Вы хотите удалить product?')" style="padding: 2px 5px;">
                                            <i class="ri-delete-bin-7-line"></i>
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- End Table with hoverable rows -->
                    </div>
                    <div class="card-footer">
                        <nav>
                            <div>
                                <ul class="pagination">
                                    <li class="page-item disabled" aria-disabled="true" aria-label="pagination.previous">
                                        <span class="page-link" aria-hidden="true">‹</span>
                                    </li>
                                    <li class="page-item active" aria-current="page"><span class="page-link">1</span></li>
                                    <li class="page-item"><a class="page-link" href="https://megaimkon.uzwebline.com/_management/product?page=2">2</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="https://megaimkon.uzwebline.com/_management/product?page=2" rel="next" aria-label="pagination.next">›</a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="col-lg-2">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title"><i class="bx bx-filter-alt"></i> Фильтр</h5>
                        <form class="row g-3" method="GET">
                            <div class="col-12">
                                <label for="name" class="form-label">Название товара</label>
                                <input type="text" class="form-control" id="name" name="name" value="">
                            </div>
                            <div class="col-12">
                                <label for="model" class="form-label">Модель</label>
                                <input type="text" class="form-control" id="model" name="model" value="">
                            </div>
                            <div class="col-12">
                                <label for="price" class="form-label">Цена</label>
                                <input type="number" class="form-control" id="price" name="price" value="">
                            </div>
                            <div class="col-12">
                                <label for="count" class="form-label">Количество</label>
                                <input type="number" class="form-control" id="quantity" name="quantity" value="">
                            </div>
                            <div class="col-12">
                                <label for="sku" class="form-label">SKU</label>
                                <input type="text" class="form-control" id="sku" name="sku" value="">
                            </div>
                            <div class="col-12">
                                <label class="form-label">Производитель</label>
                                <select class="form-select" aria-label="Default select example" name="manufacturer">
                                    <option value="">---------------</option>
                                    <option value="48">
                                        2E
                                    </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Категории</label>
                                <select class="form-select" aria-label="Default select example" name="category">
                                    <option value="">---------------</option>
                                    <option value="40">
                                        Электрочайники и термопоты
                                    </option>
                                    <option value="91">
                                        Эпиляторы
                                    </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Поставщик</label>
                                <select class="form-select" aria-label="Default select example" name="supplier">
                                    <option selected="" value="">------</option>
                                    <option value="3">
                                        SIRDARYO PREMIUM ALOQA (MEGAImkon 32%)
                                    </option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Статус</label>
                                <select class="form-select" name="status" aria-label="Default select example">
                                    <option value="1" selected="selected">Включено</option>
                                    <option value="0">Отключено</option>
                                </select>
                            </div>
                            <button type="submit" class="btn btn-primary"><span><i class="bx bx-filter-alt"></i></span>Фильтр</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
