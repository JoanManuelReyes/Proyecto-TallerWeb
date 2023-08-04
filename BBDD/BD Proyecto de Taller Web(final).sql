DROP DATABASE IF EXISTS bdproyecto;
create database bdproyecto;
use bdproyecto;

-- Table: Cliente
CREATE TABLE Cliente (
    DNI_cliente char(8)  NOT NULL,
    Nombre_cliente varchar(45)  NOT NULL,
    Apellido_cliente varchar(45)  NOT NULL,
    Telefono_cliente char(9)  NOT NULL,
    Email_cliente varchar(85)  NOT NULL,
    Direccion_cliente varchar(85)  NOT NULL,
    CONSTRAINT cliente_pk PRIMARY KEY  (DNI_cliente)
);


INSERT INTO Cliente VALUES("71765432", "Javier", "Díaz", "987654321", "javierdiaz@gmail.com", "Av. El Parral #218");
INSERT INTO Cliente VALUES("70345678", "Alonso", "Ramos", "895476321", "alonsoramos@gmail.com", "Jr. Los Alisos");
INSERT INTO Cliente VALUES("73765432", "Pedro", "León", "241728673", "pedroleon@gmail.com", "Av. Las Palmeras");
INSERT INTO Cliente VALUES("71764432", "Carlos", "Casas", "127634892", "carloscasas@gmail.com", "Av. Aviacion");

-- Table: Contactarse
CREATE TABLE Contactarse (
    ID_contactarse int  NOT NULL,
    Nombre varchar(50)  NOT NULL,
    Email varchar(100)  NOT NULL,
    Telefono char(9)  NOT NULL,
    DNI char(8)  NOT NULL,
    Asunto_contactarse text  NOT NULL,
    Descripcion_contactarse text  NOT NULL,
    CONSTRAINT Contactarse_pk PRIMARY KEY  (ID_contactarse)
);

INSERT INTO Contactarse VALUES("101","Pedro","pedroleon@gmail.com","241728673","73765432", "Consulta", "Hola, ¿Quisiera conocer si puedo eliminar mi cuenta?");
INSERT INTO Contactarse VALUES("102","Alonso","alonsoramos@gmail.com","895476321","70345678", "Propuesta", "Saludos, les quiero comentar que pueden buscar más lugares en la region Cajamarca.");
INSERT INTO Contactarse VALUES("103","Pedro","pedroleon@gmail.com","241728673","73765432", "Consulta", "Hola, ¿Podrían cambiar unos datos de mi cuenta?");
INSERT INTO Contactarse VALUES("104","Alonso","alonsoramos@gmail.com","895476321","70345678", "Propuesta", "Saludos, les sugiero que rebajen sus precios para la campaña de navidad.");



-- Table: Guia
CREATE TABLE Guia (
    ID_guia varchar(8)  NOT NULL,
    Nombre_guia varchar(85)  NOT NULL,
    Foto_guia varchar(100)  NOT NULL,
    Descripcion_guia text  NOT NULL,
    Region varchar(20)  NOT NULL,
    CONSTRAINT Guia_pk PRIMARY KEY  (ID_guia)
);

INSERT INTO Guia VALUES("G0000001", "Luis", "imagenes_guias/costa1.jpg", "Luis es alguien comprometido con su trabajo, domina el ingles, frances, espanol y chino Mandarin. Se graduo de la carrera de Hoteleria y turismo en la Universidad Mayor de San Marcos.", "Costa");
INSERT INTO Guia VALUES("G0000002", "Henry", "imagenes_guias/costa2.jpg", "Henry es alguien muy carismatico al momento de explicarse, domina el ingles, espanol y frances. Fue miembro voluntario de los bomberos en el año 2018, y ahora esta estudiando la carrera de traduccion e iterpretacion.", "Costa");
INSERT INTO Guia VALUES("G0000003", "Roberto", "imagenes_guias/costa3.jpg", "Roberto fue a Francia para estudiar la carrera de Hoteleria y Turismo, le encanta los animales y hablar sobre los idiomas. Sabe hablar ingles, español y frances.", "Costa");
INSERT INTO Guia VALUES("G0000004", "Ariana", "imagenes_guias/sierra1.jpg", "Ariana es una persona muy centrada lo que le permite escuchar atentamente a los turista y responder todas sus dudas. Domina el ingles y espanol. Estudio Ciencias politicas pero como le encantaba viajar decidio estudiar Hoteleria y turismo en la Universidad La Catolica.", "Sierra");
INSERT INTO Guia VALUES("G0000005", "Fernanda", "imagenes_guias/sierra2.jpg", "Fernanda es alguien muy amable que tiene paciencia al momento de explicar. Habla aleman, espanol e ingles. Estudio traduccion e Iterpretacion en la Universidad San Martin de Porres.", "Sierra");
INSERT INTO Guia VALUES("G0000006", "Elizabeth", "imagenes_guias/sierra3.jpg", "Elizabeth tiene muchos años siendo guia turistico, habla ingles, español y portugues. Estudio en la Universidad Ricardo Palma y realizo unos cursos sobre atencion al cliente en Brasil.", "Sierra");
INSERT INTO Guia VALUES("G0000007", "Josefina", "imagenes_guias/selva1.jpg", "Josefina le gusta tomarse fotos con los turistas como recurso, tiene una capacidad extraordinaria para comunicarse. Habla espanol, ingles, aleman y chino.", "Selva");
INSERT INTO Guia VALUES("G0000008", "Rosa", "imagenes_guias/selva2.jpg", "Rosa es muy observadora y ademas es amable con los ninos, Habla español e ingles. Es egresada de la carrera de comunicacion de la Universidad San Martin de Porres.", "Selva");
INSERT INTO Guia VALUES("G0000009", "Maria", "imagenes_guias/selva4.jpg", "Maria es una persona divertida que le encanta conocer nuevos lugares y personas. Es estudiante de la carrera de Hoteleria y turismo, habla ingles y español.", "Selva");



-- Table: Paquete_Tour
CREATE TABLE Paquete_Tour (
    Codigo_tour char(6)  NOT NULL,
    Nombre_tour varchar(85)  NOT NULL,
    Region_tour varchar(20)  NOT NULL,
    Descripcion_tour text  NOT NULL,
    Foto_tour varchar(100)  NOT NULL,
    Cantidad_dias_tour int  NOT NULL,
    Precio_tour numeric(6,2)  NOT NULL,
    Guia_ID_guia varchar(8)  NOT NULL,
    CONSTRAINT Paquete_Tour_pk PRIMARY KEY  (Codigo_tour)
);

INSERT INTO Paquete_Tour VALUES("T00001", "Viaje a Costa Verde", "Costa", "El Circuito de Playas de la Costa Verde, popularmente conocido como la Costa Verde, es una vía ubicada en la ciudad de Lima...", "imagenes/img1.jpg", "3", "1150", "G0000003");
INSERT INTO Paquete_Tour VALUES("T00002", "Viaje a Huacachina", "Costa", "Si estas buscando recorrer el sur del Peru, y vivir las experiencias mágicas que tenemos para ti, contamos con diversos paquetes turísticos...", "imagenes/img4.jpg", "4", "1730", "G0000001");
INSERT INTO Paquete_Tour VALUES("T00003", "Viaje a Paracas", "Costa", "Paracas es una ciudad de la costa oeste de Perú. Es conocida por sus playas, como El Chaco, ubicada en la bahía resguardada de Paracas...", "imagenes/img6.jpg", "3", "850", "G0000002");
INSERT INTO Paquete_Tour VALUES("T00004", "Inca Jungle a Machu Picchu", "Sierra", "Comenzará tomando una furgoneta durante 3,5 horas hasta Abra Málaga, que se encuentra a 4350 metros sobre el nivel del mar...", "imagenes_sierra/MachuPicchu.jpg", "4", "990", "G0000005");
INSERT INTO Paquete_Tour VALUES("T00005", "Trekking Choquequirao", "Sierra", "Nos levantaremos muy temprano para tomar desayuno y obtener energía para la caminata del día. Nuestra primera visita será...", "imagenes_sierra/Apurimac.jpg", "4", "1542", "G0000004");
INSERT INTO Paquete_Tour VALUES("T00006", "Viaje a Puno", "Sierra", "En este tour a las islas Amantani, Uros y Taquile, los pasajeros son recogidos de los hoteles del centro hasta el puerto para luego...", "imagenes_sierra/Puno.jpg", "2", "570", "G0000006");
INSERT INTO Paquete_Tour VALUES("T00007", "Tambopata Jungle Adventure Tour", "Selva", "Aventúrese en las profundidades de la selva amazónica y explore el diverso Parque Nacional Tambopata en una excursión ...", "imagenes_selva/tambopata1.jpg", "4", "870", "G0000008");
INSERT INTO Paquete_Tour VALUES("T00008", "Tarapoto Aventurero", "Selva", "Maravillate con los impresionantes atractivos que guarda la hermosa cuidad de Tarapoto. Descubre la naturaleza,floray fauna ...", "imagenes_selva/tarapoto1.jpg", "4", "940", "G0000009");
INSERT INTO Paquete_Tour VALUES("T00009", "Chanchamayo y Tarma Magicos", "Selva", "Luego de tomar el desvío a Tarma, podrá llegaren 6 horas, desde Lima, a estos valles ubicados en zonas de selva...", "imagenes_selva/chanchamayo1.jpg", "3", "740", "G0000007");

-- Table: Reclamo
CREATE TABLE Reclamo (
    Codigo_Reclamo int NOT NULL,
    Nro_boleto int  NOT NULL,
    Fecha_vuelo date  NOT NULL,
    Nombre_cliente varchar(45)  NOT NULL,
    Apellido_cliente varchar(45)  NOT NULL,
    DNI char(8)  NOT NULL,
    Telefono_cliente char(9)  NOT NULL,
    Email_cliente varchar(85)  NOT NULL,
    Direccion_cliente varchar(85)  NOT NULL,
    Descripcion_reclamo text  NOT NULL,
    CONSTRAINT Reclamo_pk PRIMARY KEY  (Codigo_Reclamo)
);

INSERT INTO Reclamo VALUES("101", "1000000004", "2023-01-20", "Alonso", "Ramos", "70345678", "895476321", "alonsoramos@gmail.com", "Jr. Los Alisos", "Mi viaje se retraso.");
INSERT INTO Reclamo VALUES("102", "1000000003", "2022-12-24", "Carlos", "Casas", "71764432", "127634892", "carloscasas@gmail.com", "Av. Aviacion", "Requiero la devolución de mi dinero.");
INSERT INTO Reclamo VALUES("103", "1000000005", "2022-10-21", "Pedro", "León", "73765432", "241728673", "pedroleon@gmail.com", "Av. Las Palmeras", "El guia no fue muy coordial.");
INSERT INTO Reclamo VALUES("104", "1000000008", "2022-10-11", "Alonso", "Ramos", "70345678", "895476321", "alonsoramos@gmail.com", "Jr. Los Alisos", "El hotel no contaba con buena infraestructura.");



-- Table: Reservar
CREATE TABLE Reservar (
    Nro_Boleto_reservar int  NOT NULL,
    Cliente_DNI_cliente char(8)  NOT NULL,
    Paquete_Tour_Codigo_tour char(6)  NOT NULL,
    Metodo_pago_reservar varchar(50)  NOT NULL,
    Numero_tarjeta_reservar char(16)  NOT NULL,
    CVC_reservar varchar(4)  NOT NULL,
    Fecha_reservar date  NOT NULL,
    CONSTRAINT Reservar_pk PRIMARY KEY  (Nro_Boleto_reservar)
);

INSERT INTO Reservar VALUES("1000000001","73765432", "T00003", "Tarjeta Visa", "5412341478926391", "6752", "2022-12-15");
INSERT INTO Reservar VALUES("1000000002","71765432", "T00007", "Tarjeta MasterCard", "4414863258926391", "7896", "2022-11-23");
INSERT INTO Reservar VALUES("1000000003","71764432", "T00009", "Tarjeta Visa", "6412496247826391", "3453", "2022-12-24");
INSERT INTO Reservar VALUES("1000000004","70345678", "T00001", "Tarjeta de débito - BBVA Perú", "7412395632726391", "5479", "2023-01-20");
INSERT INTO Reservar VALUES("1000000005","73765432", "T00003", "Tarjeta MasterCard", "4412341428695491", "3845", "2022-10-21");
INSERT INTO Reservar VALUES("1000000006","71765432", "T00008", "Tarjeta MasterCard", "6412332856748391", "3785", "2023-02-19");
INSERT INTO Reservar VALUES("1000000007","71764432", "T00004", "Tarjeta Visa", "3412345638756391", "6752", "2023-04-03");
INSERT INTO Reservar VALUES("1000000008","70345678", "T00002", "Tarjeta de débito - BBVA Perú", "2412394356826391", "1387", "2022-10-11");


-- Table: Login
CREATE TABLE Login (
    id_login int  NOT NULL,
    email varchar(100)  NOT NULL,
    contrasenia varchar(50)  NOT NULL,
    tipo_usuario varchar(20) NOT NULL,
    CONSTRAINT Login_pk PRIMARY KEY  (id_login)
);

INSERT INTO Login VALUES("2001","adminutp@gmail.com", "2022", "Administrador");
INSERT INTO Login VALUES("2002","javierdiaz@gmail.com", "aaa111", "Cliente");
INSERT INTO Login VALUES("2003","alonsoramos@gmail.com", "bbb222", "Cliente");
INSERT INTO Login VALUES("2004","pedroleon@gmail.com", "ccc333", "Cliente");
INSERT INTO Login VALUES("2005","carloscasas@gmail.com", "ddd444", "Cliente");

-- foreign keys
-- Reference: Paquete_Tour_Guia (table: Paquete_Tour)
ALTER TABLE Paquete_Tour ADD CONSTRAINT Paquete_Tour_Guia
    FOREIGN KEY (Guia_ID_guia)
    REFERENCES Guia (ID_guia);

-- Reference: Reservar_Cliente (table: Reservar)
ALTER TABLE Reservar ADD CONSTRAINT Reservar_Cliente
    FOREIGN KEY (Cliente_DNI_cliente)
    REFERENCES Cliente (DNI_cliente);

-- Reference: Reservar_Paquete_Tour (table: Reservar)
ALTER TABLE Reservar ADD CONSTRAINT Reservar_Paquete_Tour
    FOREIGN KEY (Paquete_Tour_Codigo_tour)
    REFERENCES Paquete_Tour (Codigo_tour);


drop procedure if exists spcrearcuenta;
DELIMITER //
create procedure spcrearcuenta(nombre varchar(45),apellido varchar(45),dni int,telefono int,email varchar(85),direccion varchar(85),contrasenia varchar(50))
BEGIN
declare id int;
select ifnull(max(id_login),0)+1 into id from Login;
INSERT INTO Cliente VALUES(dni, nombre, apellido, telefono, email, direccion);
INSERT INTO Login VALUES(id,email, contrasenia, "Cliente");
end //
