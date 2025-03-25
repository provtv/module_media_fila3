# API Endpoints FixCity

## Autenticazione
Tutte le richieste API richiedono un token Bearer JWT nell'header:
```
Authorization: Bearer <token>
```

## Formato Risposte
### Successo
```json
{
    "success": true,
    "data": {},
    "message": "Operation successful"
}
```

### Errore
```json
{
    "success": false,
    "message": "Error message",
    "errors": {
        "field": ["error details"]
    }
}
```

## Endpoints

### Autenticazione
```
POST /api/auth/login
POST /api/auth/register
POST /api/auth/logout
POST /api/auth/refresh
GET  /api/auth/me
```

### Profili
```
GET    /api/profiles
POST   /api/profiles
GET    /api/profiles/{id}
PUT    /api/profiles/{id}
DELETE /api/profiles/{id}
```

### Ticket
```
GET    /api/tickets
POST   /api/tickets
GET    /api/tickets/{id}
PUT    /api/tickets/{id}
DELETE /api/tickets/{id}
GET    /api/tickets/stats
```

### Commenti Ticket
```
GET    /api/tickets/{ticket}/comments
POST   /api/tickets/{ticket}/comments
PUT    /api/tickets/{ticket}/comments/{id}
DELETE /api/tickets/{ticket}/comments/{id}
```

### Allegati Ticket
```
GET    /api/tickets/{ticket}/attachments
POST   /api/tickets/{ticket}/attachments
DELETE /api/tickets/{ticket}/attachments/{id}
```

## Esempi di Richieste

### Creazione Ticket
```http
POST /api/tickets
Content-Type: application/json
Authorization: Bearer <token>

{
    "title": "Buca in strada",
    "description": "Grande buca in Via Roma",
    "priority": "high",
    "category_id": 1,
    "due_date": "2024-03-01T12:00:00Z"
}
```

### Aggiornamento Stato Ticket
```http
PUT /api/tickets/1
Content-Type: application/json
Authorization: Bearer <token>

{
    "status": "in_progress",
    "assignee_id": 5
}
```

### Aggiunta Commento
```http
POST /api/tickets/1/comments
Content-Type: application/json
Authorization: Bearer <token>

{
    "content": "Lavori iniziati"
}
```

## Rate Limiting
- 60 richieste/minuto per IP
- 1000 richieste/ora per utente autenticato

## Paginazione
```
GET /api/tickets?page=1&per_page=20
```

Risposta:
```json
{
    "data": [...],
    "meta": {
        "current_page": 1,
        "from": 1,
        "last_page": 5,
        "per_page": 20,
        "to": 20,
        "total": 100
    }
}
```

## Filtri
```
GET /api/tickets?status=open&priority=high&category=1
```

## Ordinamento
```
GET /api/tickets?sort=created_at&order=desc
```

## Include Relazioni
```
GET /api/tickets/1?include=comments,attachments
```

## Validazione

### Creazione Ticket
```php
[
    'title' => 'required|string|max:255',
    'description' => 'required|string',
    'priority' => 'required|in:low,medium,high,critical',
    'category_id' => 'required|exists:ticket_categories,id',
    'due_date' => 'nullable|date|after:today'
]
```

### Aggiornamento Ticket
```php
[
    'status' => 'sometimes|required|in:new,in_review,assigned,in_progress,resolved,closed,rejected',
    'assignee_id' => 'nullable|exists:users,id',
    'priority' => 'sometimes|required|in:low,medium,high,critical'
]
```

## Codici di Stato HTTP
- 200: OK
- 201: Created
- 400: Bad Request
- 401: Unauthorized
- 403: Forbidden
- 404: Not Found
- 422: Unprocessable Entity
- 429: Too Many Requests
- 500: Internal Server Error

## Note
1. Tutte le date sono in formato ISO 8601
2. I token JWT scadono dopo 1 ora
3. Refresh token validi per 7 giorni
4. File upload limitato a 10MB
5. Supporto per versioning API (v1)

## Reports
### GET /api/reports
- Headers:
  - Authorization: Bearer {token}
- Query Parameters:
  - status: string
  - category: string
  - page: integer
  - per_page: integer

### GET /api/reports/{id}
- Headers:
  - Authorization: Bearer {token}
- Response:
  ```json
  {
    "id": "integer",
    "title": "string",
    "description": "string",
    "status": "string",
    "category": {
      "id": "integer",
      "name": "string"
    },
    "location": {
      "lat": "float",
      "lng": "float"
    },
    "media": [
      {
        "id": "integer",
        "url": "string",
        "type": "string"
      }
    ],
    "created_at": "datetime",
    "updated_at": "datetime"
  }
  ```

### POST /api/reports
- Headers:
  - Authorization: Bearer {token}
- Request:
  ```json
  {
    "title": "string",
    "description": "string",
    "category_id": "integer",
    "location": {
      "lat": "float",
      "lng": "float"
    },
    "media": ["file"]
  }
  ```

### PUT /api/reports/{id}
- Headers:
  - Authorization: Bearer {token}
- Request:
  ```json
  {
    "title": "string",
    "description": "string",
    "status": "string",
    "category_id": "integer"
  }
  ```

### DELETE /api/reports/{id}
- Headers:
  - Authorization: Bearer {token}
- Response: 204 No Content

## Categories
### GET /api/categories
- Response:
  ```json
  [
    {
      "id": "integer",
      "name": "string",
      "description": "string",
      "icon": "string"
    }
  ]
  ```

## User Management
### GET /api/user/profile
- Headers:
  - Authorization: Bearer {token}
- Response:
  ```json
  {
    "id": "integer",
    "name": "string",
    "email": "string",
    "role": "string",
    "reports_count": "integer",
    "created_at": "datetime"
  }
  ``` 