-- Crear Base de Datos --

create database proyecto

--******************************************************--

--Scripts Tablas --

create table proyecto(
  id serial,
  nombre_proyecto varchar (50),
  nombre_director_proyecto varchar (30),
  apellido1_director_proyecto varchar (30),
  apellido2_director_proyecto varchar (30),
  nombre_patrocinador varchar (50),
  monto_proyecto double precision,
  presupuesto_proyecto double precision,
  moneda varchar (30),
  observaciones varchar (500),
  constraint pk_proyecto primary key(id)
);


create table recurso_humano(
 id serial,
 nombre_personal_requerido varchar (30),
 apellido1_personal_requerido varchar (30),
 apellido2_personal_requerido varchar (30),
 especialidad varchar (30),
 proyecto_id serial,
 constraint pk_recurso_humano primary key (id), 
 constraint fk_recurso_humano  foreign key (proyecto_id) references proyecto (id)
);

create table interesados(
 id serial,
 nombre varchar (30),
 telefono_contacto varchar (20),
 descripcion_interes varchar (500),
 proyecto_id serial,
 constraint pk_interesados primary key (id),
 constraint fk_interesados  foreign key (proyecto_id) references proyecto (id)
);


create table tipo_comunicacion(
 id serial,
 tipo_comunicacion varchar (50),
 detalle varchar (500),
 proyecto_id serial,
 constraint pk_tipo_comunicacion primary key (id),
 constraint fk_comunicacion_proyecto foreign key (proyecto_id) references proyecto (id)
 );

create table comunicaciones(
 id serial,
 nombre_persona_a_contactar varchar (30),
 apellido1_persona_a_contactar varchar (30),
 apellido2_persona_a_contactar varchar (30),
 metodo_comunicacion varchar (30),
 tipo_comunicacion_id serial,
 constraint pk_comunicaciones primary key (id),
 constraint fk_comunicaciones_tipo_comunicacion foreign key (tipo_comunicacion_id) references tipo_comunicacion (id)
);

create table riesgo_proyecto(
 id serial,
 nombre_riesgo varchar (30),
 descripcion_riesgo varchar (500),
 solucion varchar (500),
 proyecto_id serial,
 constraint pk_riesgo_proyecto primary key (id),
 constraint fk_riesgos_proyecto_proyecto  foreign key (proyecto_id) references proyecto (id)
);

create table alcance_proyecto(
 id serial,
 responsable varchar(30),
 nombre_actividad varchar(50),
 descripcion varchar (500),
 calidad varchar (10),
 fecha_estimada varchar(20),
 proyecto_id serial,
 constraint pk_alcance_proyecto primary key (id),
 constraint fk_alcance_proyecto_proyecto  foreign key (proyecto_id) references proyecto (id)
);


create table adquisiciones(
 id serial,
 nombre_adquisicion varchar (30),
 costo_adquisicion double precision, 
 alcance_proyecto_id serial,
 constraint pk_adquisiciones primary key (id),
 constraint fk_alcance_proyecto_adquisiciones  foreign key (alcance_proyecto_id) references alcance_proyecto (id)
);

create table cronograma(
 id serial,
 nombre_actividad varchar(100),
 fecha_inicio varchar(20),
 fecha_fin varchar(20),
 duracion varchar (10),
 alcance_proyecto_id serial,
 constraint pk_cronograma primary key (id),
 constraint fk_cronograma_alcance_proyecto  foreign key (alcance_proyecto_id) references alcance_proyecto (id)
);

create table costo(
 id serial,
 costo_actividad double precision,
 alcance_proyecto_id serial,
 constraint pk_costo primary key (id),
 constraint fk_costo_alcance_proyecto  foreign key (alcance_proyecto_id) references alcance_proyecto (id)
);

create table login(
 id serial,
 usuario varchar (30) not null,
 password varchar (100) not null,
 remember_token character varying(100),
 constraint pk_login primary key (id)
);