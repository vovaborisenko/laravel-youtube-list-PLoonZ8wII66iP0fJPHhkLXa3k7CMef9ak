<?php

namespace App\Http\Controllers\Blog\Admin;

use App\Http\Controllers\Blog\BaseController as GuestBaseController;
use Illuminate\Http\Request;

/**
 * Базовый контроллер для всех контроллеров управления
 * блогом в панели администрирования.
 *
 * Должен быть родителем для всех контроллеров управления блогом.
 *
 * @package App\Http\Controllers\Blog\Admin
 */
abstract class BaseController extends GuestBaseController
{
    /**
     * BaseContoller constructor
     */
    public function __construct()
    {
        // Инициализация общих методов для админки.
    }
}
