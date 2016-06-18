## Modelos

Para crear un modelo correr

```bash
php artisan make:model ModelName
```

Dentro de los archivos modelos, para indicar la tabla a
la que estan relacionados, podemos usar la variable
`$table` y asignarle como una cadena el nombre de la
tabla relacionada con ese modelo.

Tambien podemos usar la variable `$fillable` para indicar
los atributos que son asignables desde un formulario.