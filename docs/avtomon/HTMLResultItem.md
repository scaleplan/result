<small>avtomon</small>

HTMLResultItem
==============

Класс результатов в виде HTML-страниц

Описание
-----------

Class HTMLResultItem

Сигнатура
---------

- **class**.
- Является подклассом класса [`AbstractResult`](../avtomon/AbstractResult.md).

Методы
-------

Методы класса class:

- [`__construct()`](#__construct) &mdash; Конструктор
- [`setResult()`](#setResult) &mdash; Установить значение результата
- [`getStringResult()`](#getStringResult) &mdash; Get string result
- [`getArrayResult()`](#getArrayResult) &mdash; Возвратить результат в виде массива
- [`getObjectResult()`](#getObjectResult) &mdash; Возвратить результат в виде объекта

### `__construct()` <a name="__construct"></a>

Конструктор

#### Сигнатура

- **public** method.
- Может принимать следующий параметр(ы):
    - `$result` (`mixed`)
- Ничего не возвращает.

### `setResult()` <a name="setResult"></a>

Установить значение результата

#### Сигнатура

- **public** method.
- Может принимать следующий параметр(ы):
    - `$result` &mdash; - значение результата
- Ничего не возвращает.

### `getStringResult()` <a name="getStringResult"></a>

Get string result

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `null`
    - `string`

### `getArrayResult()` <a name="getArrayResult"></a>

Возвратить результат в виде массива

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `array`
    - `null`

### `getObjectResult()` <a name="getObjectResult"></a>

Возвратить результат в виде объекта

#### Сигнатура

- **public** method.
- Может возвращать одно из следующих значений:
    - `null`
    - `object`

