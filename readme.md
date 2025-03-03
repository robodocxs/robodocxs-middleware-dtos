# Robodocxs Middleware DTOs

This package provides DTOs that are used between the Robodocxs Core Service and its ERP middlewares.

## Installation

```
composer require robodocxs/robodocxs-middleware-dtos
```

## Development

To symlink this project in your local middleware for faster development, follow these steps:

1. Add repository to `composer.json`

```
"repositories": [
    {
        "type": "path",
        "url": "../robodocxs-middleware-dtos",
        "options": {
            "symlink": true
        }
    }
]
```

2. Require `dev-main` and prefer source:

```
composer require robodocxs/robodocxs-middleware-dtos:dev-main --prefer-source
```

## Contributing

Contributions are welcome! Please feel free to submit a Pull Request.

## License

The MIT License (MIT).