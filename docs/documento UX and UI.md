# Plantilla de Levantamiento de Requisitos para Desarrollo Web de Finanzas Personales

## Información del Proyecto

- **Nombre del Proyecto:** DesignWiz: una herramienta mágica para diseñadores gráficos freelance.
- **Fecha de Inicio del Proyecto:** 04/10/2023
- **Equipo Responsable:** Natalia Cardoso

## Descripción del Proyecto
El proyecto es una plataforma de gestión integral diseñada para ayudar a freelancers de diseño gráfico a administrar sus proyectos de manera efectiva. La plataforma proporciona herramientas para gestionar proyectos, realizar un seguimiento financiero, generar presupuestos, facturación, comunicarse con los clientes y mantener un alto nivel de profesionalismo en sus operaciones. La plataforma incluye una interfaz de usuario intuitiva y amigable.
### Objetivo del Proyecto:

El objetivo principal del proyecto es proporcionar a los freelancers de diseño gráfico una herramienta sólida que les permita:
- Gestionar proyectos de manera eficiente y organizada.
- Realizar un seguimiento financiero detallado, incluyendo ingresos, gastos y ganancias.
- Generar presupuestos y facturas de manera automática.
- Comunicarse de manera efectiva con los clientes y mantener un registro de la correspondencia.
- Mejorar su profesionalismo y eficiencia en la gestión de proyectos.

### Requerimientos Funcionales:

- [ ] **Registro y Autenticación** – RF001
  - [ ] Los usuarios deben poder registrarse con una dirección de correo electrónico y contraseña.
  - [ ] Debe existir un proceso de autenticación seguro para iniciar sesión
- [ ] **Gestión de Proyectos** - RF002
  - [ ] Los usuarios deben poder crear, editar y eliminar proyectos
  - [ ] Cada proyecto debe incluir campos para descripción, fechas de inicio y entrega, cliente asociado y archivos relacionados.
- [ ] **Seguimiento de Tiempo y Gastos a través de gráficos y tablas** - RF003
  - [ ] Los usuarios deben poder registrar las horas trabajadas en cada proyecto.
  - [ ] Deben poder agregar y categorizar gastos relacionados con proyectos.
- [ ] **Generador de Presupuestos y Facturación** - RF004
  - [ ] Los usuarios deben poder generar presupuestos basados en el tiempo registrado y los gastos.
  - [ ] Deben poder generar facturas a partir de los presupuestos y enviarlas a los clientes.
- [ ] **Análisis Financiero** - RF005
  - [ ] La plataforma debe proporcionar informes financieros que incluyan ingresos, gastos, ganancias y pérdidas.
- [ ] **Plantillas de Contrato y Propuesta** - RF006
  - [ ] Los usuarios deben tener acceso a plantillas de contrato y propuesta.
  - [ ] Deben poder personalizar estas plantillas según las necesidades de cada proyecto.
- [ ] **Notificaciones y Recordatorios:** - RF007
  - [ ] Los usuarios deben recibir notificaciones y recordatorios de fechas de entrega, pagos pendientes y otras tareas importantes.
  
### Requerimientos No Funcionales:
- [ ] **Seguridad** - RF008
- [ ] **Usabilidad** - RF009
- [ ] **Rendimiento** - RF010
- [ ] **Cumplimiento Legal** - RF010
- [ ] **Documentación** - RF010

## Diseño y UI

### Página de Información General del Proyecto

- **Menú Principal**
  - Logo
  - Inicio - Servicios - Blog - Contacto
- **Sección de Bienvenida**
  - Título de la aplicación web
  - Imagen o ilustración llamativa
  - Una descripción
  - Llamado a la acción (botón de registro e inicio de sesión)
- **Servicios**
  - **Generación de Presupuestos y Facturación**
  - **Seguimiento Financiero**
  - **Plantillas de Contrato y Propuesta**
  - **Registro de Tiempo y Gastos**
  - **Dashboard de Seguimiento Globalizado de Proyectos**
  - **Informes Financieros Personalizados**
- **Sección de Contacto**
  - Logo
  - Datos de contacto de la empresa
  - Slide de redes sociales
  - Copyright
  - Normatividad
  - Tratamiento de datos

### Página de Blog

- Realizar dos entradas
  - Título
  - Fecha
  - Autor

### Login

- **Formulario**
  - Usuario
  - Contraseña
  - Botón de Ingreso
  - Texto de "Regístrate"

### Registro

- **Formulario**
  - Nombres
  - Apellidos
  - Fecha de Nacimiento
  - Número de Identificación
  - Dirección de Correo Electrónico (este será el usuario)
  - Contraseña
  - Botón de Registrarse

### Página Principal del Aplicativo

- **Barra Lateral (Menú)**
  - Logo
  - Foto de perfil
  - Información del usuario
  - Llamado a cada uno de los módulos (mediante icono)
  - **Menú de navegación:**
    - Módulo de Dashboard (Principal)
    - Módulo de Generación de Presupuestos
    - Módulo de Seguimiento Financiero
    - Módulo de Gestión de Proyectos
    - Módulo de Registro de Tiempo y Gastos
    - Módulo de Plantillas de Contrato y Propuesta
    - Módulo de Informes Financieros
    - Configuración de la Cuenta
    - Cierre de Sesión
  - **Configuración de la Cuenta**
    - Cambio de contraseña
    - Preferencias de comunicación
    - Configuración de privacidad
    - Información de contacto
    - Opciones de seguridad de la cuenta

  
- **Módulo de Dashboard (Principal)**
  - Gráfica de Gastos
  - Gráfica de Ingresos
  - Resumen de proyectos activos
  - Resumen de proyectos finalizados
  - Datos financieros clave (ingresos, gastos, ganancias)
  - Acceso rápido a otras secciones

- **Módulo de Generación de Presupuestos**
  - Formulario para crear un nuevo presupuesto
  - Lista de presupuestos existentes
  - Opciones de edición y eliminación de presupuestos
  - Función para convertir presupuestos en facturas

- **Módulo de Seguimiento Financiero**
  - Informes financieros detallados (ingresos, gastos, ganancias)
  - Gráficos de evolución financiera
  - Historial de transacciones
  - Herramientas para establecer metas financieras

- **Módulo de Gestión de Proyectos**
  - Lista de proyectos activos y pasados
  - Posibilidad de crear nuevos proyectos
  - Detalles de cada proyecto (descripción, fechas, cliente, estado)
  - Seguimiento de progreso y tareas relacionadas

- **Módulo de Registro de Tiempo y Gastos**
  - Registro de horas trabajadas en proyectos
  - Registro de gastos relacionados con proyectos
  - Categorización de tiempo y gastos
  - Resumen de tiempo y gastos acumulados

- **Módulo de Plantillas de Contrato y Propuesta**
  - Acceso a plantillas de contrato y propuesta
  - Personalización de plantillas
  - Creación y envío de contratos y propuestas a clientes

- **Módulo de Informes Financieros**
  - Generación de informes financieros personalizados
  - Visualización de tendencias financieras
  - Comparación de presupuesto vs. gastos reales
  - Resumen de la situación financiera actual

- **Cierre de Sesión**
  - Opción para cerrar sesión de la plataforma
