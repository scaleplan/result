<small> avtomon </small>

DbResultItem
============

Database query result class

Description
-----------

Class DbResultItem

Signature
---------

- **class**.
- It is a subclass of the class [`ArrayResultItem`](../avtomon/ArrayResultItem.md).

Methods
-------

Class methods class:

  - [`__construct()`](#__construct) &mdash; Constructor
  - [`setResult()`](#setResult) &mdash; Set Result
  - [`getFirstResult()`](#getFirstResult) &mdash; Return the first result record
  - [`getResultId()`](#getResultId) &mdash; Return the id field of the first result record
  - [`getResultFirstField()`](#getResultFirstField) &mdash; Return the first field of the first result record
  - [`getObjectResult()`](#getObjectResult) &mdash; Return result as object

### `__construct()`<a name="__construct"> </a>

Constructor

#### Signature

- **public** method.
- It can take the following parameter (s):
  - `$result`(`array`| `null`) - result
  - `$prefix`(`string`) - the prefix of the result fields
- Returns nothing.
- Throws one of the following exceptions:
  - [`avtomon\DbResultItemException`](../avtomon/DbResultItemException.md)

### `setResult()`<a name="setResult"> </a>

Set Result

#### Signature

- **public** method.
- It can take the following parameter (s):
  - `$result`(`array`| `null`) - result
  - `$prefix`(`string`) - the prefix of the result fields
- Returns nothing.
- Throws one of the following exceptions:
  - [`avtomon\DbResultItemException`](../avtomon/DbResultItemException.md)

### `getFirstResult()`<a name="getFirstResult"> </a>

Return the first result record

#### Signature

- **public** method.
Returns the `array`value.

### `getResultId()`<a name="getResultId"> </a>

Return the id field of the first result record

#### Signature

- **public** method.
- Can return one of the following values:
  - `mixed`
  - `null`

### `getResultFirstField()`<a name="getResultFirstField"> </a>

Return the first field of the first result record

#### Signature

- **public** method.
- Returns the `null`value.

### `getObjectResult()`<a name="getObjectResult"> </a>

Return result as object

#### Signature

- **public** method.
- Can return one of the following values:
  - `null`
  - `object`

