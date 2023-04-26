This is the API documentation for the endpoints available in the application.
By Michał Strzygowski
## Base URL
The base URL is `http://localhost`.

## Endpoints

### Get All Users
Retrieves a list of all users.

#### Request
`GET /api/user`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

#### Response
```json
[
    {
        "id": 1,
        "name": "John",
        "email": "john@example.com",
        "created_at": "2023-04-24T13:47:03.000000Z",
        "updated_at": "2023-04-24T13:47:03.000000Z"
    },
    {
        "id": 2,
        "name": "Alice",
        "email": "alice@example.com",
        "created_at": "2023-04-24T13:47:03.000000Z",
        "updated_at": "2023-04-24T13:47:03.000000Z"
    }
]
```

### Get All Products
Retrieves a list of all products.

#### Request
`GET /api/products`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

#### Response
```json
[
    {
        "id": 1,
        "name": "Product A",
        "price": 20.99,
        "created_at": "2023-04-24T13:47:02.000000Z",
        "updated_at": "2023-04-24T13:47:02.000000Z"
    },
    {
        "id": 2,
        "name": "Product B",
        "price": 10.50,
        "created_at": "2023-04-24T13:47:02.000000Z",
        "updated_at": "2023-04-24T13:47:02.000000Z"
    }
]
```

### Get Product by ID
Retrieves a specific product by ID.

#### Request
`GET /api/products/:product_id`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

#### Response
```json
{
    "id": 1,
    "name": "Product A",
    "price": 20.99,
    "created_at": "2023-04-24T13:47:02.000000Z",
    "updated_at": "2023-04-24T13:47:02.000000Z"
}
```

### Create Product
Creates a new product.

#### Request
`POST /api/products`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

```json
{
    "name": "Product C",
    "price": 15.99
}
```

#### Response
```json
{
    "id": 3,
    "name": "Product C",
    "price": 15.99,
    "created_at": "2023-04-26T08:27:13.000000Z",
    "updated_at": "2023-04-26T08:27:13.000000Z"
}
```

### Update Product by ID
Updates a specific product by ID.

#### Request
`PUT /api/products/:product_id`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

```json
{
    "name": "New Name",
    "price": 25.99
}
```

#### Response
```json
{
    "id": 1,
    "name": "New Name",
    "price": 25.99,
    "created_at": "2023-04-24T13:47:02.000000Z",
    "updated_at": "2023-04-26T09:32:41.000000Z"
}
```

### Delete Product by ID
Deletes a specific product by ID.

#### Request
`DELETE /api/products/:product_id`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

#### Response
```json
{
    "message": "Product deleted successfully"
}
```

### Create Price for Product
Creates a new price for a specific product.

#### Request
`POST /api/products/:product_id/prices`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

```json
{
    "price": 22.50
}
```

#### Response
```json
{
    "id": 2,
    "product_id": 1,
    "price": 22.50,
    "created_at": "2023-04-26T09:36:14.000000Z",
    "updated_at": "2023-04-26T09:36:14.000000Z"
}
```

### Update Price by ID
Updates a specific price for a specific product.

#### Request
`PUT /api/products/:product_id/prices/:price_id`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

```json
{
    "price": 30.00
}
```

#### Response
```json
{
    "id": 2,
    "product_id": 1,
    "price": 30.00,
    "created_at": "2023-04-26T09:36:14.000000Z",
    "updated_at": "2023-04-26T09:42:08.000000Z"
}
```

### Delete Price by ID
Deletes a specific price for a specific product.

#### Request
`DELETE /api/products/:product_id/prices/:price_id`

```json
{
    "Accept": "application/json",
    "Content-Type": "application/json"
}
```

#### Response
```json
{
    "message": "Price deleted successfully"
}
```
