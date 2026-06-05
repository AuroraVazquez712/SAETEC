#### 1. INFORMACIÓN INICIAL
- **Autor:** StatHorses: 
    * García Hernández FridaRosales 
    * Rosales Tecuapetla Fatima Elvira
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
|**Módulo**|**Descripción**|
|----------|---------------|
|Perfil    |El usuario accede con su Nombre, Núm de cuenta, Correo, Contraseña, Recuperar           contraseña|
|Fórmulario para el alumno| En caso de que el usuario sea alumno, la primera vista será un apartado para configurar el perfil, el título es “Queremos conocerte más” y subtítulo “Acaba de configurar tu perfil”. De este modo, lo que se pedirá es: Número de cuenta, nombre, fecha de nacimiento, grupo, correo electrónico, intereses (personales), condiciones de estudio (número de compus, acceso internet, experiencia previa), Hábitos de estudio y estilo de aprendizaje, ¿Por qué me metí? y ¿Qué dificultades tengo?|El alumno ingresó sus datos y se guardan en la DB|
|Perfil del estudiante:|El alumno podrá consultar las calificaciones y los avances, además de contar con la opción de editar información personal. También se incluyen las tareas, el contacto del profesor y un espacio para dudas. Al final de cada semana, se presenta un breve cuestionario para expresar cómo te sientes con la clase, utilizando caritas coloreables que reflejan tu estado de ánimo: excelente, bien, regular, mal o muy mal.|
|Foro informativo| Espacio donde se comparten las novedades y recursos para los estudiantes. Incluye información sobre las causas de deserción, avisos importantes como finales, módulos y entregas de proyectos, además de tips para sobrevivir a la ETE con recomendaciones. También reúne el documento de privacidad y los lineamientos que orientan la participación en este espacio.|
|Módulos|Acceso a materiales extra como videos, ejercicios y cuestionarios que permiten identificar qué aspectos resultan más difíciles, qué se debe reforzar y cómo te sientes en el proceso. Además, incluyen un espacio para dudas o comentarios, facilitando la interacción entre alumno y profesor|
|Profesor-estudiante| Se integra por  lista del grupo con enlaces a cada alumno y gráficas sobre tareas, calificaciones, inasistencias y alumnos en riesgo. Permite registrar estudiantes, consultar calificaciones, número de ayudas, tareas entregadas y firmas. Además, ofrece espacios para dudas, retroalimentación, anuncios, materiales de apoyo y el documento de seguridad de datos.|

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
