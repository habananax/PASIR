## PASIR - Ana Torrecilla Martín

<sub>IES Politécnico Jesús Marín - Administración de Sistemas Informáticos en Red (S21AR)</sub>

----------------------------------------------------------------------------------------

*Centrado en el despliegue de servicios, automatización devOps y gitOps a través de GitLAB. En este proyecto se busca realizar un entorno privado de GitLAB para uso de una empresa, donde también explicaremos las diferentes funcionalidades de éste como servicio y lo usaremos para crear y almacenar una serie de subproyectos de despliegue con el uso de Docker, Ansible y Gitlab CI. También se adentrará en el uso de lenguajes en dichos subproyectos con intención de la mejora del diseño frontend en ellos, y con el fin de ampliar en más ámbitos menos conocidos (html, css, php y javascript).*
  
*Todo el entorno, el servidor GitLAB y los subproyectos se creará dentro de Proxmox en cluster con 3 o más nodos si es necesario, con el fin de ampliar la alta disponibilidad. Los sistemas operativos que se usarán serán LINUX (Ubuntu y Debian principalmente). Se intentará automatizar todo lo posible, tanto en la creación de elementos, como en el despliegue de los proyectos de GitLAB en dichos contenedores.*


----------------------------------------------------------------------------------------

Este repositorio contiene el siguiente orden de archivos:

  - Directorio **Ansible**: En este directorio se encontrarán los Playbooks necesarios para la realización de tareas en Ansible, junto con el script GitLab CICD que llamará a los playbooks para su ejecución.
  
                    - gitlab-ci.yml
                    - playbook_main.yml
                    - install_docker.yml
                    - install_nginx.yml
                    - inventory.yml
                    - vars.yml

  - Directorio **Docker**: En este directorio se encontrarán los contenedores que han sido levantados con Docker y todos los archivos necesarios para el funcionamiento de cada contenedor.
  
                    - frontend_proyect (Contenedor con imagen NGINX y un proyecto frontend a base de HTML, CSS y JavaScript).
                    - inventario_php (Contenedor con imagen Apache2-PHP y MySQL, y un proyecto HTML, CSS y PHP para la visualización y edición de la base de datos).
                    - mail-server_docker (Contenedor con imagen Poste.io para la realización de un servidor de correos SSL y AntiSpam).

  - Directorio **Documentación**: En este directorio se encontrará la documentación guiada con el desarrollo completo del proyecto PASIR, tanto en PDF como en DOC.
  
                    - Documento PDF
                    - Documento Word

  - Directorio **Nginx**: En este directorio se encontrará el sitio virtual configurado para el uso del proxy inverso utilizado en el proyecto.
  
                    - reverse-proxy.conf
