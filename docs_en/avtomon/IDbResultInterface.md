<small> avtomon </small>

IDbResultInterface
==================

Database query result interface

Description
-----------

Interface IDbResultInterface

Signature
---------

- **interface**.

Methods
-------

Methods of class interface:

  - [`getResult()`](#getResult)
  - [`getArrayResult()`](#getArrayResult) &mdash; Get result as array
  - [`getJsonResult()`](#getJsonResult) &mdash; Get result as JSON
  - [`getFirstResult()`](#getFirstResult) &mdash; If result is array, returns first element of result array
  - [`getResultId()`](#getResultId) &mdash; If result is assiciative array, returns id field from first record of result
  - [`getResultFirstField()`](#getResultFirstField) &mdash; If result is assiciative array, returns first field from first record of result
  - [`getStringResult()`](#getStringResult) &mdash; get result as string

### `getResult()`<a name="getResult"> </a>

#### Signature

- **public** method.
- Returns nothing.

### `getArrayResult()`<a name="getArrayResult"> </a>

Get result as array

#### Signature

- **public** method.
Returns the `mixed`value.

### `getJsonResult()`<a name="getJsonResult"> </a>

Get result as JSON

#### Signature

- **public** method.
Returns the `mixed`value.

### `getFirstResult()`<a name="getFirstResult"> </a>

If result is array, returns first element of result array

#### Signature

- **public** method.
Returns the `mixed`value.

### `getResultId()`<a name="getResultId"> </a>

If result is assiciative array, returns id field from first record of result

#### Signature

- **public** method.
Returns the `mixed`value.

### `getResultFirstField()`<a name="getResultFirstField"> </a>

If result is assiciative array, returns first field from first record of result

#### Signature

- **public** method.
Returns the `mixed`value.

### `getStringResult()`<a name="getStringResult"> </a>

get result as string

#### Signature

- **public** method.
Returns the `mixed`value.

