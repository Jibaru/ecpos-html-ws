# ECPOS HTML Web Service

## Configuración

1. Clonar el archivo `.env.example` a `.env`.
2. Crear un archivo en la raiz del proyecto llamado `print-content.html`.
3. Ejecutar `docker-compose up`.

## Configuración en POS

1. Ir a Configuraciones > General > Impresoras.
2. Crear o editar impresora.
3. Establecer los siguientes valores:

```
Tipo: html-ws
Conector de estado: cool-ecpos-printer
Puerto de estado: 8090
```

Nota: En caso de haber cambiado el `PORT` en el archivo `.env` reemplazar el puerto de estado por el valor del `PORT` el `.env`.

## Ver impresora

Para ver la información, basta con entrar a: `http://localhost:8090` para ver las impresiones.
En caso de querer limpiar, borrar el contenido del archivo `print-content.html`.
