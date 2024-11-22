Pasos realizados para resolver la prueba:

- Importe los script SQL en mi base de datos local y comence a revisar las tablas para entender las relaciones. (Realmente dedique bastante tiempo del total a esto, considero que fue mi mayor desafio y la razon por la que no pude finalizarla completamente)
- Comence con iniciar el proyecto con laravel, creando los modelos y relaciones segun mi entendimiento.
- Según lo que entendi intente traer las tareas entregadas, que segun la tabla task_status son las que tienen id = 4, que tengan un recurso asignado existente en la tabla resource.
- Ademas, para implementar el filtro segun año y fecha, use la relaciones de los modelos y las tablas intermedias para revisar la fecha de los campos de workOrder segun la columna work_order_item_detail_id en la tabla task.

## Consideraciones y problemas encontrados
- No fui capaz de resolver el ejercicio completamente, debido a que no termine de comprender en la consigna a que se referia con "usuarios que superen el monto promedio de ese recurso". Por lo que no se esta filtrando segun ese promedio mencionado.
- Lo resolvi en una vista que se accede a travez de  la ruta /report/{year}/{month), ejemplo /report/2023/10

![image](https://github.com/user-attachments/assets/1f945d3b-e7b0-4520-9bb5-651fc792edc5)
