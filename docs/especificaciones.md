#### 1. INFORMACIÓN INICIAL
- **Autor:** StatHorses: 
    * García Hernández FridaRosales 
    * Tecuapetla Fatima Elvira
    * Salcedo Pérez Diego Iván
    * Vázquez Robles Aurora Betshabé **  
- **Título del proyecto:** SAETEC
- **Fecha de inicio:** 26 de mayo 2026

#### 2. RESUMEN DEL PROYECTO, METAS Y OBJETIVOS
- **Resumen:** SAETEC 	es una plataforma que permite a los usuarios (maestros, estudiantes o administradores) llevar un seguimiento periódico en torno al logro de objetivos en el Estudio Técnico en Computación.
    
- **Metas:**
    * Crear una plataforma virtual que evite la deserción del estudio técnico
    * Crear un sitio que lleve el historial de los estudiantes de forma eficaz y eficiente. 
    * Transmitir una sensación de confianza y apoyo

- **Objetivos:**
    * Brindar a los profesores un sistema de registros de sus alumnos, que le permita saber sus calificaciones, dudas o comentarios. 
    * Darles  a los alumnos una atención acorde a las características y apoyos que requieran.
    * Brindar información que haga consciente al estudiante de su historial académico.
    * Brindar apoyo a los estudiantes con recomendaciones y material extra a fin de evitar la deserción del estudio técnico. 

#### 3. PÚBLICO OBJETIVO (UX)
- Estudiantes de entre 16 y 18 años que busquen mejorar su experiencia y aprendizaje el Estudio Técnico Especializado en Computación. 


#### 4. PROPÓSITO Y ALCANCE
- **En alcance (Entregables):**
    * Creación de un perfil 
    * Formulario sobre el alumno 
    * Registro de alumnos y sus calificaciones
    * Espacio de opiniones, dudas y comentarios para el profesor
    * Espacio para tips
    * Diseño congruente a las páginas de la UNAM
    * Documentos de seguridad   

- **Fuera de alcance:**
    * Análisis de datos 
    * Módulos completos de quinto año
    * Panel o foro informativo 
    * Espacio para tips (de externos)


#### 5. ESPECIFICACIONES FUNCIONALES
|**Módulo**|**Descripción**|**Criterio de Aceptación**|
|----------|---------------|--------------------------|
|Perfil    |El usuario accede con su Nombre, Núm de cuenta, Correo, Contraseña, Recuperar           contraseña| El usuario crea un perfil 
|Fórmulario para el alumno| En caso de que el usuario sea alumno, la primera vista será un apartado para configurar el perfil, el título es “Queremos conocerte más” y subtítulo “Acaba de configurar tu perfil”. De este modo, lo que se pedirá es: Número de cuenta, nombre, fecha de nacimiento, grupo, correo electrónico, intereses (personales), condiciones de estudio (número de compus, acceso internet, experiencia previa), Hábitos de estudio y estilo de aprendizaje, ¿Por qué me metí? y ¿Qué dificultades tengo?|El alumno ingresó sus datos y se guardan en la DB
Informar al alumno de la privacidad de sus datos personales.


#### 6. REQUISITOS NO FUNCIONALES

| **Categoría**| **Requisito**| 
|--------------|--------------|
|Accesible     |La web debe ser amigable a la vista, lo que significa tener un contraste adecuado entre texto y fondo, de igual forma integrará imágenes y vídeos.|
|Responsivo:   |El diseño de la web debe adaptarse correctamente a las diferentes pantallas de los dispositivos, ya sea en móviles u ordenadores.|
|Seguridad:    |El usuario debe conocer el uso que se le dará a los datos que proporcione, así como de la política de seguridad para el tratamiento de los mismos.|
|Página sin fricción:|La página debe ser lo más amigable posible con el usuario, de forma que sea fácil de utilizar y visualmente agradable.|
#### 7. ARQUITECTURA DE LA INFORMACIÓN Y UX

- **Diseño Visual:** 
    * Se permitirá.

#### 8. ESPECIFICACIONES TÉCNICAS

- **Frontend:** 
    * CSS para el sistema de diseño responsivo y adecuado para una página de la UNAM
- **Backend:** 
- **Base de Datos:**
    * MariaDB para relacionar alumnos,calificaciones y aprendizajes de manera estructurada.
