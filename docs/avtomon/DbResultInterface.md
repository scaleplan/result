<small>avtomon</small>

DbResultInterface
=================

Интерфейс результатов запросов к БД

Описание
-----------

Interface DbResultInterface

Сигнатура
---------

- **interface**.

Методы
-------

Методы класса interface:

- [`getResult()`](#getResult)
- [`getArrayResult()`](#getArrayResult) &mdash; Get result as array
- [`getJsonResult()`](#getJsonResult) &mdash; Get result as JSON
- [`getFirstResult()`](#getFirstResult) &mdash; If result is array, returns first element of result array
- [`getResultId()`](#getResultId) &mdash; If result is assiciative array, returns id field from first record of result
- [`getResultFirstField()`](#getResultFirstField) &mdash; If result is assiciative array, returns first field from first record of result
- [`getStringResult()`](#getStringResult) &mdash; get result as string

### `getResult()` <a name="getResult"></a>

#### Сигнатура

- **public** method.
- Ничего не возвращает.

### `getArrayResult()` <a name="getArrayResult"></a>

Get result as array

#### Сигнатура

- **public** method.
- Возвращает `mixed` value.

### `getJsonResult()` <a name="getJsonResult"></a>

Get result as JSON

#### Сигнатура

- **public** method.
- Возвращает `mixed` value.

### `getFirstResult()` <a name="getFirstResult"></a>

If result is array, returns first element of result array

#### Сигнатура

- **public** method.
- Возвращает `mixed` value.

### `getResultId()` <a name="getResultId"></a>

If result is assiciative array, returns id field from first record of result

#### Сигнатура

- **public** method.
- Возвращает `mixed` value.

### `getResultFirstField()` <a name="getResultFirstField"></a>

If result is assiciative array, returns first field from first record of result

#### Сигнатура

- **public** method.
- Возвращает `mixed` value.

### `getStringResult()` <a name="getStringResult"></a>

get result as string

#### Сигнатура

- **public** method.
- Возвращает `mixed` value.

