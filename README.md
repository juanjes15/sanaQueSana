
# Aplicación web Gestión Administrativa - Sana que sana

Proyecto que busca resolver el siguiente problema:

El centro salud “SANA QUE SANA”, lo contrata para que realice una aplicación web que ayude en
la gestión administrativa. Este aplicativo debe cumplir con los siguientes requerimientos:

Se desea diseñar una base de datos para guardar la información sobre médicos, empleados y
pacientes del centro de salud. De los médicos se desea saber su nombre, dirección, teléfono,
ciudad, departamento, código postal, cédula, número de la seguridad social, matricula
profesional y si es médico titular, médico interino o médico sustituto. Cada médico tiene un
horario en el que pasa consulta, pudiendo ser diferente cada día de la semana. Los datos de los
médicos sustitutos no desaparecen cuando finalizan una sustitución, se les da una fecha de baja.
Así, cada sustituto puede tener varias fechas de alta y fechas de baja, dependiendo de las
sustituciones que haya realizado. Si la última fecha de alta es posterior a la última fecha de baja,
el médico está realizando una sustitución en la actualidad en el centro de salud. El resto de
empleados son los ATS, ATS de zona, auxiliares de enfermería, celadores y administrativos. De
todos ellos se desea conocer su nombre, dirección, teléfono, ciudad, departamento, código
postal, cédula y número de la seguridad social. De todos, médicos y empleados, se mantiene
también información sobre los períodos de vacaciones que tienen planificados y de los que ya
han disfrutado. Por último, de los pacientes se conoce su nombre, dirección, teléfono, código
postal, cédula, número de la seguridad social y médico que les corresponde.
## Objetivos

- Realizar la interfaz gráfica, y la conexión a la Base de Datos con PHP.
- Realizar la Base de datos en Mysql.
- Realizar el Modelo Relacional.
## Tech Stack

**Front-end:** Bootstrap, HTML

**Back-end:** PHP
## Documentación

En la carpeta "docs" de este repositorio está en detalle las consultas, los diagramas, el código SQL y los resultados de este proyecto
